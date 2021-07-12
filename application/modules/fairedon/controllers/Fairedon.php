<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fairedon extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->module('template');
		$this->load->helper('url');
		$this->load->library(array('form_validation'));
		$this->lang->load('auth');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->load->module('template');
		$this->load->model('frontend_model');
		$this->load->model('Payment_model', 'payment');
		$this->load->helper(array('html', 'language', 'form', 'country'));
		$this->load->model('Users_modal');
		$this->load->model('common_model');
		$this->load->model('stripe_model');
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
		$data['stripe_key'] = $this->config->item('stripe_key');
		$data['stripe_secret'] = $this->config->item('stripe_secret');
		$this->frontend_render("fairedon/faire_don" , $data);
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

			$interval           = 'month';
			$interval_count     = '1';
			$trial_period_days  = '3';
			$rand_id            = random_id();
			$amount 			= (int)$_POST['amount'] / 100;

			$customer = \Stripe\Customer::create(array(
				'email'         => $_POST['email'],
				'source'        => $token,
				'description'   => $_POST['card_holder'],
			));

			$charge = \Stripe\Charge::create([
				'customer'              => $customer->id,
				'amount'                => (int) $amount * 100,
				'currency'              => 'eur',
				'description'           => 'Paiement de don à la CARAF',
				'source'                => $token,
				'statement_descriptor'  => 'Custom descriptor',
			]);

			$chargeJson = $charge->jsonSerialize();

			if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == true && $chargeJson['captured'] == true) {
				$db_data = [
					'email'=>$_POST['email'],
					'amount'=>$amount,
					'date'=> time(),
					'user_id'=>(!empty($this->session->userdata('user_id')))?$this->session->userdata('user_id') : null,
				];
				$this->db->insert('donation',$db_data);

				$response = [
				                'status'=>true,
				                'message'=>'Merci pour votre don à la CARAF.'
				            ];
				display(json_encode($response));
			}



		}
	}

	public function stripePost()
	{
		$user_id = array('id' => $this->session->userdata('user_id'));
		$user_profile = $this->common_model->update_data($user_id, 'users');

		$email = $_POST['email'];
		$token = $_POST['stripeToken'];
		$amount = (int) $_POST['montant'];

		require_once('application/libraries/stripe-php/init.php');
		\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
//add customer to stripe
		$customer = \Stripe\Customer::create(array(
			'email' => $email,
			'source' => $token
		));
		$charge = \Stripe\Charge::create([
			"amount" => $amount * 100,
			"currency" => "usd",
			"source" => $this->input->post('stripeToken'),
			"description" => "Paiement de don à la CARAF."
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
// echo $amount;
			$name = $user_profile->first_name . " - " . $user_profile->last_name;
			$user_id = $user_profile->id;
			$inser_data = $this->stripe_model->insert_paiement($user_id, $name, $email, $card_num, $card_cvc, $card_exp_month, $card_exp_year, $itemName, $itemNumber,
				$itemPrice, $currency, $amount, $currency, $balance_transaction, $status, $date, $date);
		}
		$db_data = [
			'email'=>$email,
			'amount'=>$amount,
			'date'=> time(),
			'user_id'=>(!empty($this->session->userdata('user_id')))?$this->session->userdata('user_id') : null,
		];
		$this->db->insert('donation',$db_data);
//		$response = [
//		                'status'=>true,
//		                'message'=>''
//		            ];
//		display(json_encode($response));
		$this->session->set_flashdata('success', '');
		redirect('/fairedon', 'refresh');
	}


}
