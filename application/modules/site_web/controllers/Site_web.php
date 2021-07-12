<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_web extends MY_Controller 
{
    protected $slide_dir = 'public/siteweb/img/slides/';
    public function __construct()
	{
		parent::__construct();
		$this->load->module('template');
		$this->load->model('common_model');
        $this->load->model('settings_model');
        $this->load->model('frontend_model');
        $this->load->helper('common_helper');
	}

	private function frontend_render($view = '' , $data = []){

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
	    $this->load->view('templates/header',$data);
	    $this->load->view($view,$data);
	    $this->load->view('templates/footer',$data);
    }

	public function  index()
    {
        $sess_id = $this->session->userdata('user_id');

        if (!empty($sess_id)) {
            if (isset($_SESSION)) {
                if (isset($_SESSION) AND $_SESSION['user_id'] == 1) {
                    redirect('users/auth/', 'refresh');
                    //var_dump($this->session->userdata);
                }
            }

        }

        $data['liste_alaune'] = $this->common_model->alaune_liste('categories');
        $data['alaune']       = $this->common_model->alaune_text('100', 'categories');
        $data['art_activite'] = $this->common_model->get_3_p_activit('15', 'article');
        $data['slides'] = $this->db->order_by('id','DESC')->get_where('slides',['visible'=>'1'])->result();
        $data['rubriques'] = $this->db->order_by('id','DESC')->get_where('slides',['rubrique'=>'1'])->result();
        $data['annonces'] = $this->db->order_by('id','DESC')->get_where('annonces',['visibility'=>'1'])->result();
        $this->frontend_render("siteweb/index", $data);
    }

	public function  about() {

		$data['page_about'] = $this->common_model->page('about','t_page');

        $this->frontend_render("siteweb/about",$data);
	}

    public function  details($slide_id = '' , $item = '') {
        if(!empty($slide_id) and !empty($item)){
           $slide = $this->db->get_where('slides',['id'=>$slide_id])->row_array();
            $data['image'] = $slide[$item.'_img'];
            $data['annonce_title'] = $slide[$item.'_title'];
            $data['content'] = $slide[$item.'_content'];
            $data['category'] = $slide[$item.'_category'];
            $data['img_dir'] = $this->slide_dir;
            $data['slide'] = $slide;

            $data['others'] = $this->db->where(['id != '=>$slide_id])->limit('8','0')->get('slides')->result();

            $this->frontend_render("siteweb/details",$data);
        }

    }

	public function  lepays() {
		$data['page_lepays'] = $this->common_model->page('lepays','t_page');
		$data['title'] = 'Le Pays AKYE';
		$this->frontend_render("siteweb/lepays",$data);
	}

	public function  projets($type = 'durables') {
	    $pr_id = '1';
	    switch ($type){
            case 'durables' :$pr_id = '2'; break;
            case 'petits'   :$pr_id = '2'; break;
        }
		$data['all_projets_durable'] = $this->common_model->projets($pr_id,'projets');
        $data['title'] = 'Les Projets '.$type;

        $this->frontend_render("siteweb/projets",$data);
	}

	public function  detailsprojet($id) {
		$data['projets_by_id'] = $this->common_model->projets_by_id($id,'projets');

		$title = $this->common_model->projets_by_id($id,'projets')->title;
		$page = $this->load->view("siteweb/details_projets",$data,true);

		$response = [
		    'page'=>$page,
            'title'=>$title
        ];

		display(json_encode($response));

	}

	public function  details_article($id) {
		$data['article_by_id'] = $this->common_model->projets_by_id($id,'article');
        $data['title'] = 'Le Pays AKYE';
        $this->frontend_render("siteweb/details_articles",$data);
	}

	public function  msante() {
		$data['all_article_sante'] = $this->common_model->projets('11','article');
        $data['title'] = 'Santé';
        $this->frontend_render("siteweb/event_sante",$data);
	}

	public function  urbani() {
		$data['all_article_urbani'] = $this->common_model->projets('12','article');
		$data['title'] = 'URBANISATION';
		$this->frontend_render("siteweb/event_urbani",$data);
	}

	public function  necrolo() {
		$data['all_article_necro'] = $this->common_model->projets('13','article');
		$data['title'] = 'NECROLOGIE';
		$this->frontend_render("siteweb/event_necrolo",$data);
	}

	public function  alaune($id="") {
		$data['all_article_sante'] = $this->common_model->projets($id,'article');
        $this->frontend_render("siteweb/event_sante",$data);
	}

    public function  contact() {
        $this->frontend_render("siteweb/contact");

		if($this->input->post())
		{
			$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
			$data = array(
				//'name' => $this->input->post('name'),
				'nom_prenoms'  => $this->input->post('name'),
				'tel'   => $this->input->post('phone'),
				'email'      => $this->input->post('email'),
				'message'    => $this->input->post('message'),
				'pays'=> $getloc->country,
			);
             $table="message_contact";
			$insert_data_contact = $this->common_model->add_page($table,$data);

			if ($insert_data_contact)
			{
				$to = "abeufrederic@gmail.com";

				$subject = "FORMULAIRE DE DEMANDE D'INFORMATION";

				$message = '<html><body>';

				$message .= '<img src="http://actionmedicale.com/demo/images/logoactm.png" alt="" />';

				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

				$message .= "<tr style='background: #eee;'><td><strong>Nom :</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";


				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
				$message .= "<tr><td><strong>Contact:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
				$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";
				$cleanedFrom = trim(strip_tags($_POST['email']));
				$headers = "From: info@sweet-comm.com\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				if (mail($to, $subject, $message, $headers)) {

					echo "<SCRIPT> //not showing me this
                            alert('MESSAGE ENVOYE MERCI');                        
                            window.location.replace('./');
                        </SCRIPT>";

				}
			}

            else {
                echo "<SCRIPT> //not showing me this
                        alert('MESSAGE  NON ENVOYER MERCI DE REPRENDRE ');
                        window.location.replace('http://actionmedicale.com/demo/');
                     </SCRIPT>";
            }
		}
	}

	public function  monagenda() {
		if (!$this->ion_auth->logged_in())
        {
            redirect('users/auth', 'refresh');
        }

		 $sess_id = $this->session->userdata('user_id');

		if (!empty($sess_id)) {
			$this->frontend_render("siteweb/monagenda");
		} else {
			view("siteweb/index");
		}

				
		}

	public function  yafeca() {



		view("siteweb/yafeca/accueil");


		if($this->input->post())
		{



			$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
			$data = array(
				//'name' => $this->input->post('name'),
				'nom_prenoms'  => $this->input->post('name'),
				'tel'   => $this->input->post('phone'),
				'email'      => $this->input->post('email'),
				'message'    => $this->input->post('message'),
				'type'    => $this->input->post('typeuser'),
				'pays'=> $getloc->country,
			);
			$table="message_contact";
			$insert_data_contact = $this->common_model->add_page($table,$data);

			if ($insert_data_contact)
			{

				echo "<SCRIPT> //not showing me this
							alert('MESSAGE ENVOYE MERCI');
							window.location.replace('./');
						 </SCRIPT>";
			}
		}


	}

	public function dashboard($value='')
	{
		$data['sidebar'] = $this->template->load_sidebar();
		view('extra/dashboard',$data);
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
