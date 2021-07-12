<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Stripe_web extends MY_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->library("session");

		$this->load->helper('url');


		$this->load->module('template');
		$this->load->model('common_model');
		$this->load->model('settings_model');
		$this->load->model('frontend_model');
		$this->load->helper('common_helper');


		$this->load->library(array('form_validation'));

		$this->lang->load('auth');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));


		$this->load->module('template');


		$this->load->helper(array('html', 'language', 'form', 'country'));

		$this->load->model('Users_modal');

		$this->load->model('common_model');

		$this->load->model('stripe_model');


		if (!$this->ion_auth->logged_in()) {

			redirect('users/auth', 'refresh');

		}

	}


	private function frontend_render($view = '', $data = [])
	{

		/* Any mobile device (phones or tablets) */
		if ($this->mobile_detect->isMobile()) {
			$data['mobile'] = TRUE;

			if ($this->mobile_detect->isiOS()) {
				$data['ios'] = TRUE;
				$data['android'] = FALSE;
			} else if ($this->mobile_detect->isAndroidOS()) {
				$data['ios'] = FALSE;
				$data['android'] = TRUE;
			} else {
				$data['ios'] = FALSE;
				$data['android'] = FALSE;
			}

			if ($this->mobile_detect->getBrowsers('IE')) {
				$data['mobile_ie'] = TRUE;
			} else {
				$data['mobile_ie'] = FALSE;
			}
		} else {
			$data['mobile'] = FALSE;
			$data['ios'] = FALSE;
			$data['android'] = FALSE;
			$data['mobile_ie'] = FALSE;
		}
		$this->load->view('templates/header', $data);
		$this->load->view($view, $data);
		$this->load->view('templates/footer', $data);
	}

	public function index()

	{
		// set the flash data error message if there is one
		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		// list the users
		$data['users'] = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user) {
			$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
		}


		$this->frontend_render("stripe_web/my_stripe", $data);

	}


	public function stripePost()

	{


		$user_id = array('id' => $this->session->userdata('user_id'));


		// get user profile data

		$user_profile = $this->common_model->update_data($user_id, 'users');


		require_once('application/libraries/stripe-php/init.php');


		\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));


		//add customer to stripe


		/*$customer = \Stripe\Customer::create(array(

			'email' => $email,

			'source'  => $token

		));*/

		$charge = \Stripe\Charge::create([

			"amount" => 5 * 100,

			"currency" => "usd",

			"source" => $this->input->post('stripeToken'),

			"description" => "Paiement de cotisation de la CARAF."

		]);

		$chargeJson = $charge->jsonSerialize();


		if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {

			//order details

			$amount = $chargeJson['amount'] / 100;

			$balance_transaction = $chargeJson['balance_transaction'];

			$currency = $chargeJson['currency'];

			$status = $chargeJson['status'];

			$date = date("Y-m-d H:i:s");

			$itemPrice = $amount;

			$email = $user_profile->email;

			$card_num = "";

			$card_cvc = "";

			$card_exp_month = "";

			$card_exp_year = "";

			$itemName = "";

			$itemNumber = "";


			// var_dump($user_profile);


			echo $amount;

			$name = $user_profile->first_name . " - " . $user_profile->last_name;

			$user_id = $user_profile->id;

			$inser_data = $this->stripe_model->insert_paiement($user_id, $name, $email, $card_num, $card_cvc, $card_exp_month, $card_exp_year, $itemName, $itemNumber,

				$itemPrice, $currency, $amount, $currency, $balance_transaction, $status, $date, $date);

		}


		$this->session->set_flashdata('success', 'Payment made successfully.');


		redirect('/stripe', 'refresh');

	}


	public function liste_user_cot()
	{

		//$user_id = array('id' => $this->session->userdata('user_id'))

		$user_id = array('id' => $this->session->userdata('user_id'));
		$user_email = array('email' => $this->session->userdata('user_email'));
		// get user profile data

		$user_profile = $this->common_model->update_data($user_id, 'users');

		$user_id = $user_profile->id;
		$user_email = $user_profile->email;

		// set the flash data error message if there is one

		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$data['user_adhesion_date'] = $this->db->get_where('users',['id'=>$user_id])->row()->date;
		$this->session->set_flashdata('message', $this->ion_auth->messages());


		if (!$this->ion_auth->logged_in()) {

			redirect('users/auth', 'refresh');

		}


		$sess_id = $this->session->userdata('user_id');


		if (!empty($sess_id)) {
			$data['cotis'] = $this->stripe_model->user_cotisation_paye($user_email);
			$data['stripe_key'] = $this->config->item('stripe_key');
			$data['stripe_secret'] = $this->config->item('stripe_secret');
			$data['offre_adhesion'] = $this->db->get_where('offre',['type'=>'adhesion'])->row();
			$data['offre_cotisation'] = $this->db->get_where('offre',['type'=>'cotisation_mensuelle'])->row();
			$data['profile'] = $this->db->select('first_name , last_name , email')->where(['id'=>$user_id])->get('users')->row();

			$this->frontend_render("stripe_web/liste_user_coti", $data);

		} else {
			view("siteweb/index");
		}

	}

	public function stripe_payment_process(){
		$response = '';
		if(!empty($_POST))
		{
			require_once('application/libraries/stripe-php/init.php');
			\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

			$token = $_POST['source'];
			$data['response'] = 'true';
			$_POST = trim_form_data($_POST,'lowercase');
			$offre_adhesion = $this->db->get_where('offre',['type'=>'adhesion'])->row();
			$offre_cotisation = $this->db->get_where('offre',['type'=>'cotisation_mensuelle'])->row();

			$interval           = 'month';
			$interval_count     = '1';
			$trial_period_days  = '3';
			$rand_id            = random_id();
			$total_amount 		= (int)$_POST['amount'] / 100;

			if($interval == 'month'){
				\Stripe\Plan::create([
					"amount"               => (int) $offre_cotisation->montant * 100,
					"interval"             => $interval,
					"interval_count"       => $interval_count,
					"trial_period_days"    => (int) $trial_period_days,
					"product"              => ["name" => $offre_cotisation->type.date("dmY").$rand_id],
					"currency"             => "eur",
					"id"                   => date("dmY").str_replace(' ','_',$_POST['first_name']).$rand_id.time(),
					"nickname"             => date("dmY").str_replace(' ','_',$_POST['last_name']).$rand_id.time(),
				]);
			}

			$customer = \Stripe\Customer::create(array(
				'email'         => $_POST['email'],
				'source'        => $token,
				'description'   => $_POST['card_holder'],
			));

			$charge = \Stripe\Charge::create([
				'customer'              => $customer->id,
				'amount'                => (int) $total_amount * 100,
				'currency'              => 'eur',
				'description'           => 'ADHESION',
				'source'                => $token,
				'statement_descriptor'  => 'Custom descriptor',
			]);

			/* Insertion des donner relatif à l’adhésion dans la table souscription */
			//$numadhe    = $this->numadhe;


			$idsous = $this->db->get_where('souscription',['email'=>$_POST['email']])->row()->id;

//			Insertion des donner relatif à la cotisation dans la table souscription
			$cotisation_data = [];
			$dates 		= $_POST['advance_cotisation_month_string'];
			if($_POST['advance_cotisation_month_count'] == '1'){
				$date_debut = date('Y-m-d',strtotime($dates));
				$date_f  = new DateTime();
				$date_f->setTimestamp(strtotime($dates));
				$nombre_days_add = ((int)date('m',strtotime($dates)) == 2 )?'27' : '29';
				$date_f->modify("+ {$nombre_days_add} days");
				$date_fin = date('Y-m-d' , $date_f->getTimestamp());
				$cotisation_data['datedebut'] 	= $date_debut;
				$cotisation_data['datefin']		= $date_fin;
				$cotisation_data['email']	= $_POST['email'];
			}

			else{
				$date_arr   = explode(' - ', $dates);
				$date_debut = date('Y-m-d',strtotime($date_arr[0]));
				$date_fin   = date('Y-m-d',strtotime($date_arr[1]));
				$cotisation_data['datedebut'] 	= $date_debut;
				$cotisation_data['datefin']		= $date_fin;
				$cotisation_data['email']	= $_POST['email'];
			}


			$cotisation_data['date_stat'] 		= date('Y-m-d H:i:s');
			$cotisation_data['etatstat'] 		= 'S';
			$cotisation_data['idoffre'] 		= $offre_cotisation->idoffre;
			$cotisation_data['libelleoffre'] 	= $offre_cotisation->libelle;
			$cotisation_data['idsous'] 			= $idsous;
			$cotisation_data['statutstat'] 		= '1';
			$cotisation_data['nombre_mois'] 	= (!empty($_POST['advance_cotisation_month_count']))?$_POST['advance_cotisation_month_count'] : '0';
			$cotisation_data['montantoffre'] 	= $total_amount;
			$this->db->insert('statsouscription' , $cotisation_data);
		}
	}

}
