<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Webhooks extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->module('template');

		/*if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		$this->ion_auth->get_user_group();*/
	}

	public function index()
	{
require_once('application/libraries/stripe-php/init.php');

	$payload = @file_get_contents('php://input');
	$event = null;


	try {
    		$event = \Stripe\Event::constructFrom(
        	json_decode($payload, true)
   			 );
	} catch(\UnexpectedValueException $e) {
    	// Invalid payload
    	http_response_code(400);
    	exit();
	}

	// Handle the event
echo $event->type;

	switch ($event->type) {
    case 'payment_intent.succeeded':
        $paymentIntent = $event->data->object; // contains a \Stripe\PaymentIntent

//
//view("webhooks/webhook/dashboard.php",$data);




        // Then define and call a method to handle the successful payment intent.
        // handlePaymentIntentSucceeded($paymentIntent);
        break;
    case 'payment_method.attached':
        $paymentMethod = $event->data->object; // contains a \Stripe\PaymentMethod
        // Then define and call a method to handle the successful attachment of a PaymentMethod.
        // handlePaymentMethodAttached($paymentMethod);
        break;
    	// ... handle other event types
   	 default:
        // Unexpected event type
        http_response_code(400);
        exit();
	}
var_dump($event);
	 http_response_code(200);

//view("webhook/dashboard.php",$data);
	

}
	

	public function layout_boxed()
	{
		// $data['sidebar'] = $this->template->load_sidebar();
		view('extras/layout/layout-boxed');
	}

	public function mega_menu($value='')
	{
		view("extras/layout/mega_menu");
	}

	public function layout_horizontal($value='')
	{
		view("extras/layout/layout-horizontal");
	}

	public function layout_sidebar_scroll($value='')
	{
		$data['page'] = "extras/layout/layout-sidebar-scroll";
		$this->template->template_view($data);
	}

	public function layout_static_leftbar($value='')
	{
		$data['page'] = "extras/layout/layout-static-leftbar";
		$this->template->template_view($data);
	}

	public function app_inbox()
	{
		view("extras/layout/email_template");
	}

	public function email_compose()
	{
		$data['page'] = "extras/extra/inbox_compose";
		$this->template->template_view($data);
	}

	public function userguide()
	{
		view('userguide/index');
	}
}

/* End of file Extras.php */
/* Location: ./application/controllers/Extras.php */