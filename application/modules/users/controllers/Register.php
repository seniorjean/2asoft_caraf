<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Register extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper(array('form','html'));
		$this->load->model('Register_model');
        $this->load->library(array('form_validation'));

		$string = "";
              	$chars = "0123456789";
                for($i=0;$i<6;$i++)
                    $string.=substr($chars,rand(0,strlen($chars)),1);

               $this->numadhe    = date("Ynd").$string;
	}
	public function index()
	{
		$data['stripe_key'] = $this->config->item('stripe_key');
		$data['stripe_secret'] = $this->config->item('stripe_secret');
		$data['offre_adhesion'] = $this->db->get_where('offre',['type'=>'adhesion'])->row();
		$data['offre_cotisation'] = $this->db->get_where('offre',['type'=>'cotisation_mensuelle'])->row();
		$data['assocs'] = $this->db->select('a.id , a.sigle , v.name as village')->join('villages as v','v.id = a.village')->get('associations as a')->result();
       	$data['counties'] = $this->db->get_where('country',['visible'=>'1'])->result();
        $this->load->view('auth/Sign_Up', $data);
	}

	public function get_assoc($assoc_id){
	   if(!empty($assoc_id)){
           display(json_encode([
               'status' => true,
               'assoc' => $this->db->select('a.id , a.sigle , v.name as village , a.president')->join('villages as v','v.id = a.village')->get_where('associations as a' , ['a.id' => $assoc_id])->row()
           ]));
       }
       else{
	       display(json_encode([
	           'status' => false
           ]));
       }
    }

	public function sign_up()
	{
		$_POST['username'] = $_POST['email'];
        //validate form
        $this->form_validation->set_rules('first_name', 'First name','trim|required');
        $this->form_validation->set_rules('last_name', 'Last name','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('username','Username','trim|required|is_unique[users.phone]');
        $this->form_validation->set_rules('email','Email','trim|valid_email|required');
        $this->form_validation->set_rules('password','Password','trim|min_length[8]|max_length[20]|required');
        $this->form_validation->set_rules('confirm_password','Confirm password','trim|matches[password]|required');

        if($this->form_validation->run($this) === FALSE)
        {
        	$msg = implode("\n" , $this->form_validation->error_array());
            $response = [
                            'status'=>false,
                            'message'=> $msg,
                        ];

            display(json_encode($response));
        }
        else
        {

                $first_name = $this->input->post('first_name');
                $last_name  = $this->input->post('last_name');
                $username   = $this->input->post('username');
                $email      = $this->input->post('email');
                $password   = $this->input->post('password');


                $string = "";
                $chars = "0123456789";
                for($i=0;$i<6;$i++) $string.=substr($chars,rand(0,strlen($chars)),1);

                $numadhe    = $this->numadhe;
                $additional_data = array(
                    'first_name'    => $first_name,
                    'last_name'     => $last_name,
                    'numadhe'       => $numadhe,
                    'phone'         =>$this->input->post('phone'),
                    'date'          => date('y-m-d')  ,
                    'active'        => '0'
                );

                if($this->ion_auth->register($username,$password,$email,$additional_data))
                {
					$msg = "vos informations ont été enregistrées avec succès. veuillez effectuer le paiement pour terminer votre adhésion";

					if(!empty($_POST['new_adhesion'])){
                        $user_id = $this->db->get_where('users',['numadhe'=>$numadhe , 'email'=>$email])->row()->id;
                        $code_pay = $this->db->get_where('country' , ['country_id'=>$_POST['country_id']])->row()->country_code;
                        $codepos = $_POST['codepos'];
                        $region_code = $codepos[0].''.$codepos[1];
                        $assoc_id = (!empty($_POST['association_id']))?$_POST['association_id'] : '00';
                        $nomenclature = $assoc_id.$_POST['gender'].$region_code.$code_pay.'00'.$user_id;

                        $db_data['user_id']     = $user_id;
                        $db_data['birth_date']  = $this->input->post('birth_date');
                        $db_data['birth_place'] = $this->input->post('birth_place');
                        $db_data['addresse']    = $this->input->post('addresse');
                        $db_data['code_postal'] = $this->input->post('code_postal');
                        $db_data['ville']       = $this->input->post('ville');
                        $db_data['fait_a']      = $this->input->post('fait_a');
                        $db_data['fait_le']     = $this->input->post('fait_le');
                        $db_data['email']     = $this->input->post('email');
                        $db_data['matricule'] = $nomenclature;
			

			/*data souscription */
			

						if ($_FILES['ppid']['name'] != "") {
							$file_name = random_id().'.jpeg';
							move_uploaded_file($_FILES['ppid']['tmp_name'], 'public/siteweb/img/clients/'.$file_name);
							$db_data['ppid'] = $file_name;
						}

						if ($_FILES['jdef']['name'] != "") {
							$file_name = random_id().'.pdf';
							move_uploaded_file($_FILES['jdef']['tmp_name'], 'public/siteweb/img/clients/'.$file_name);
							$db_data['jdef'] = $file_name;
						}

						if(!empty($_POST['association_id'])){
							$db_data['payment_status'] = 'paid';
							$db_data['association_id'] = $_POST['association_id'];

							$dbs_data['datefin']			= date('Y-m-d H:i:s', strtotime('+1 years'));
							$dbs_data['datefinsous']		= date('Y-m-d', strtotime('+1 years'));
							$dbs_data['datesouscription']	= date('Y-m-d H:i:s');
							$dbs_data['email']     			= $_POST['email'];
							$dbs_data['relance']     		= 0;
							$dbs_data['tentative']     		= 0;
							$dbs_data['etatsous']     		= 'S';
							$dbs_data['statutsous']     	= 1;
							$dbs_data['statutsous']     	= 1;
							$dbs_data['token']     		= random_id();
							$this->db->insert('souscription',$dbs_data);
							$this->db->where(['id'=>$user_id])->update('users',['active'=>'1']);

							$idsous = $this->db->get_where('souscription',['email'=>$_POST['email']])->row()->id;
							$offre_adhesion = $this->db->get_where('offre',['type'=>'adhesion'])->row();
							$adhesion_data = [
								'datedebut'		=> date('Y-m-d H:i:s'),
								'datefin' 		=>date('Y-m-d H:i:s', strtotime('+1 years')),
								'date_stat' 	=>date('Y-m-d H:i:s'),
								'etatstat' 		=> 'S',
								'idoffre' 		=> $offre_adhesion->idoffre,
								'email'			=> $_POST['email'],
								'statutstat'	=>'1',
								'libelleoffre'	=> $offre_adhesion->libelle,
								'montantoffre'	=> $offre_adhesion->montant,
								'nombre_mois'	=>'12',
								'idsous'		=> $idsous,
							];
							$this->db->insert('statsouscription',$adhesion_data);
							$msg = "Votre adhésion s'est terminée avec succès, veuillez attendre l'activation de votre compte";
							$this->session->set_flashdata('message',$msg);
						}

						$this->db->insert('user_details',$db_data);
                    }
                    $response = [
                                    'status'=>true,
                                    'message'=>$msg
                                ];

                    display(json_encode($response));
					$msg .= "<br> Email : {$_POST['email']} : <br> Mot de passe : {$_POST['password']}";
					$this->send_mail($_POST['email'] , 'Adhésion A la CARAF' , $msg);
                }
                else
                {
                    $msg = "Il y a un problème dans le remplissage de votre formulaire, veuillez remplir le formulaire correctement";
                    $response = [
                                    'status'=>false,
                                    'message'=>$msg
                                ];
                    display(json_encode($response));
                }
        }
    }

    private function send_mail($to = '' ,  $subject = '',$msg = ''){
		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);
		// send email
		mail($to,$subject,$msg);
	}

    public function get_code_postau($country_id = ''){
		if(!empty($_GET['term']) and !empty($country_id)){
//			$code_postaux = $this->db->select("codes_postaux.* , concat(commune , ' (' , codepos, ')') as label")->like('commune',$_GET['term'])->limit(10)->get_where('codes_postaux',['country_id'=>$country_id]);
			$code_postaux = $this->db->select("codes_postaux.* , commune as label")->like('commune',$_GET['term'])->limit(10)->get_where('codes_postaux',['country_id'=>$country_id]);
			if($code_postaux->num_rows() > 0){
				$result = $code_postaux->result();
				display(json_encode($result));
			}
			else{
				display(json_encode([
					['id'=> 0],
					['id'=> 0],
					['id'=> 0],
				]));
			}
		}
	}

	public function count_code_postaux(){
		if(!empty($_POST['country_id'])){
			$code_postaux = $this->db->get_where('codes_postaux',['country_id'=>$_POST['country_id']]);
			if($code_postaux->num_rows() > 0){
				display(json_encode(['status'=>true]));
			}
			else{
				display(json_encode(['status'=>false]));
			}
		}
	}

    //Check Duplicate Email
    public function check_email()
    {
        $email = $this->input->post('myemail');

        $result = $this->Register_model->check_mail('users',$email);

        if ($result) 
        {
        	echo "ok::";
        }
    }
    //Check Duplicate UserName
    public function check_username()
    {
        $username = $this->input->post('u_name');

        $result = $this->Register_model->check_email('users',$username);

        if ($result) 
        {
        	echo "ok::";
        }
    }

    public function get_account(){

    }

    public function check_pending_adhesion(){
		if(!empty($_POST['email'])){
			$message = 'Désole, nous n’avons trouver aucune adhésion encours relatif à votre email';
			$found = false;
			$data = [];
			$user = $this->db->get_where('users',['email'=>$_POST['email'] , 'active'=>'0']);
			if($user->num_rows() > 0){
				$user_id = $user->row()->id;
				$details = $this->db->get_where('user_details',['user_id'=>$user_id]);
				if($details->num_rows() > 0){
					$found = true;
					$message = 'Effectuez le paiement s’il vous plait pour achever votre adhésion';
					$data['ppid'] = $details->row()->ppid;
					$data['first_name'] = $user->row()->first_name;
					$data['last_name'] = $user->row()->last_name;
				}
			}
			$response = [
			                'status'=> $found,
			                'message'=>$message,
							'data'=>$data
			            ];
			display(json_encode($response));
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
  			$dbs_data['datefin']			= date('Y-m-d H:i:s', strtotime('+1 years'));
			$dbs_data['datefinsous']		= date('Y-m-d', strtotime('+1 years'));
			$dbs_data['datesouscription']	= date('Y-m-d H:i:s');
			$dbs_data['email']     			= $_POST['email'];
			$dbs_data['relance']     		= 0;
			$dbs_data['tentative']     		= 0;
			$dbs_data['etatsous']     		= 'S';
			$dbs_data['statutsous']     	= 1;
			$dbs_data['statutsous']     	= 1;
			$dbs_data['token']     		= $charge->customer;
			$this->db->insert('souscription',$dbs_data);



			$idsous = $this->db->get_where('souscription',['email'=>$_POST['email']])->row()->id;

//			Insertion des donner relatif à l’adhésion dans la table stat_souscription
			$adhesion_data = [
				'datedebut'		=> date('Y-m-d H:i:s'),
				'datefin' 		=>date('Y-m-d H:i:s', strtotime('+1 years')),
				'date_stat' 	=>date('Y-m-d H:i:s'),
				'etatstat' 		=> 'S',
				'idoffre' 		=> $offre_adhesion->idoffre,
				'email'			=> $_POST['email'],
				'statutstat'	=>'1',
				'libelleoffre'	=> $offre_adhesion->libelle,
				'montantoffre'	=> $offre_adhesion->montant,
				'nombre_mois'	=>'12',
				'idsous'		=> $idsous,

			];
			$this->db->insert('statsouscription',$adhesion_data);


//			Insertion des donner relatif à la cotisation dans la table souscription
			$cotisation_data = [];
			$dates 		= $_POST['advance_cotisation_month_string'];
			if($_POST['advance_cotisation_month_count'] == '1'){
				$date_debut = date('Y-m-d',strtotime($dates));
				$date_fin   = date('Y-m-d',strtotime($dates));
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


			$cotisation_data['date_stat'] 	= date('Y-m-d H:i:s');
			$cotisation_data['etatstat'] 		= 'S';
			$cotisation_data['idoffre'] 		= $offre_cotisation->idoffre;
			$cotisation_data['libelleoffre'] 	= $offre_cotisation->libelle;
			$cotisation_data['idsous'] 			= $idsous;
			$cotisation_data['statutstat'] 		= '1';
			$cotisation_data['nombre_mois'] 	= (!empty($_POST['advance_cotisation_month_count']))?$_POST['advance_cotisation_month_count'] : '0';
			$cotisation_data['montantoffre'] 	= (int)$total_amount - (int)$offre_adhesion->montant;
			$this->db->insert('statsouscription' , $cotisation_data);
		}
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
