<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function template_view($data = NULL)
	{
        /* Any mobile device (phones or tablets) */
        if ($this->mobile_detect->isMobile()) {
            $data['mobile'] = TRUE;

            if ($this->mobile_detect->isiOS()) {
                $data['Z'] = TRUE;
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

		$this->load->view('dashboard',$data);
	}
	public function load_sidebar($data = '')
	{
		$this->load->view('template/sidebar');
	}

}

/* End of file Template.php */
/* Location: ./application/modules/template/controllers/Template.php */

/* End of file Template.php */
/* Location: ./application/modules/template/controllers/Template.php */