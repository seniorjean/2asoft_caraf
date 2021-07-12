<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Stripe extends MY_Controller {
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');

        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html','language','form','country'));
        $this->load->model('Users_modal');
        $this->load->model('common_model');
        $this->load->model('stripe_model');

        if (!$this->ion_auth->logged_in())
        {
            redirect('users/auth', 'refresh');
        }
    }





/**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {

        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        // list the users
        $data['users'] = $this->ion_auth->users()->result();
        foreach ($data['users'] as $k => $user)
        {
            $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
        }

        $this->session->set_flashdata('message', $this->ion_auth->messages());

        $data['page'] = "stripe/my_stripe";
        $this->template->template_view($data);
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function stripePost()
    {

        $user_id = array('id' => $this->session->userdata('user_id'));

        // get user profile data
        $user_profile = $this->common_model->update_data($user_id,'users');

        require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));


        //add customer to stripe


        /*$customer = \Stripe\Customer::create(array(
            'email' => $email,
            'source'  => $token
        ));*/
        $charge=  \Stripe\Charge::create ([
                "amount" => 5*100,
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Paiement de cotisation de la CARAF."
        ]);
        $chargeJson = $charge->jsonSerialize();

        if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
            //order details
            $amount = $chargeJson['amount']/100;
            $balance_transaction = $chargeJson['balance_transaction'];
            $currency = $chargeJson['currency'];
            $status = $chargeJson['status'];
            $date = date("Y-m-d H:i:s");
            $itemPrice=$amount;
            $email=$user_profile->email;
            $card_num="";
            $card_cvc="";
            $card_exp_month="";
            $card_exp_year="";
            $itemName="";
            $itemNumber="";

           // var_dump($user_profile);

            echo $amount;
            $name=$user_profile->first_name." - ".$user_profile->last_name;
            $user_id=$user_profile->id;
            $inser_data = $this->stripe_model->insert_paiement($user_id,$name,$email,$card_num,$card_cvc,$card_exp_month,$card_exp_year,$itemName,$itemNumber,
                $itemPrice,$currency,$amount,$currency,$balance_transaction,$status,$date,$date);
        }




            $this->session->set_flashdata('success', 'Payment made successfully.');
             
        redirect('/stripe', 'refresh');
    }

    public  function liste_user_cot(){
        //$user_id = array('id' => $this->session->userdata('user_id'))
        $user_id = array('id' => $this->session->userdata('user_id'));

        // get user profile data
        $user_profile = $this->common_model->update_data($user_id,'users');
        $user_id=$user_profile->id;
        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        // list the users

        $data['cotis'] = $this->stripe_model->user_cotisation_paye($user_id);

        /*foreach ($data['users'] as $k => $user)
        {
            $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
        }*/

        $this->session->set_flashdata('message', $this->ion_auth->messages());

        $data['page'] = "stripe/liste_user_coti";
        $this->template->template_view($data);
    }
}