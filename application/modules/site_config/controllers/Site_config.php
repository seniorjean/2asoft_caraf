<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Site_config extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file', 'html');
        $this->load->module('template');
        $this->load->model('common_model');
        $this->load->model('preferences_model');
        $this->load->model('settings_model');
        $this->load->model('frontend_model');
        $this->load->helper('common_helper');

        if (!$this->ion_auth->logged_in()) {
            redirect('users/auth', 'refresh');
        }
        $this->ion_auth->get_user_group();
    }

    public function index()
    {
        $this->general_settings();
    }

    public function general_settings($param1 = '', $param2 = '', $param3 = '')
    {

        if ($param1 == 'events') {
            $data['page_content'] = 'events';
        }
        if ($param1 == 'gallery') {
            $data['page_content'] = 'gallery';
        }
        if ($param1 == 'privacy_policy') {
            $data['page_content'] = 'privacy_policy';
        }
        if ($param1 == 'about_us') {
            $data['page_content'] = 'about_us';
        }
        if ($param1 == 'terms_and_conditions') {
            $data['page_content'] = 'terms_and_conditions';
        }
        if ($param1 == 'homepage_slider') {
            $data['page_content'] = 'homepage_slider';
        }
        if ($param1 == 'gallery_image') {
            $data['page_content'] = 'gallery_image';
            $data['gallery_id'] = $param2;
        }
        if (empty($param1) || $param1 == 'general_settings') {
            $data['page_content'] = 'general_settings';
        }

//        $data['reg_status'] = $this->common_model->select('settings');
        $data['page'] = "site_config/configuration/config";
        $this->template->template_view($data);
    }

    public function website(){

        $this->templates->admin_render('prefs/website/index', $this->data);
    }

    public function website_update($param1 = ""){
        $response = 'no data';
        if ($param1 == 'general_settings') {
            $response = $this->frontend_model->update_frontend_general_settings();
        }
        display($response);
    }

    public function homepage_slider($param1 = ''){
        if ($param1 == 'update') {
            $response = $this->frontend_model->update_homepage_slider();
            display($response);
        } else {
            $data['page'] = "site_config/configuration/homepage_slider";
            $this->template->template_view($data);
        }
    }

    public function system_settings($param1 = "", $param2 = "") {
        if ($param1 == 'update') {
            $response = $this->settings_model->update_system_settings();
            display($response);
        }

        if ($param1 == 'logo_update') {
            $response = $this->settings_model->update_system_logo();
            display($response);
        }
        // showing the System Settings file
        if(empty($param1)){
            $data['page'] = "site_config/configuration/system_settings";
            $this->template->template_view($data);
        }
    }

    public function save_text($text){
        if(!empty($_POST['text'])){
            $data[$text]  = $this->input->post('text');
            $this->db->where('id', 1)->update('frontend_settings', $data);
//
            if(!empty($_FILES)){
                if ($_FILES['image_file']['name'] != '') {
                    move_uploaded_file($_FILES['image_file']['tmp_name'], str_replace(base_url() ,'',$_POST['image_src']));
                }
            }
        }
    }

    public function editor($data = []){
        $data['texte']            = (!empty($data['texte']))?$data['texte'] : '';
        $data['form_action']      = (!empty($data['form_action']))?$data['form_action'] : '';
        $data['action']           = (!empty($data['action']))?$data['action'] : 'update';
        $data['upload_image']     = (!empty($data['upload_image']))?$data['upload_image'] : false;
        $data['image_src']        = (!empty($data['image_src']))?$data['image_src'] : '';
        $data['image_dir']        = (!empty($data['image_dir']))?$data['image_dir'] : '';
        $data['upload_btn_text']  = (!empty($data['upload_btn_text']))?$data['upload_btn_text'] : 'Upload';
        $data['back_page']        = (!empty($data['back_page']))?$data['back_page'] : '##';
        $data['page_title']        = (!empty($data['page_title']))?$data['page_title'] : '';

        $data['page'] = "site_config/configuration/editor";
        $this->template->template_view($data);
    }

    public function about_us(){
        $this->editor(
            [
                'texte'=>get_frontend_settings('about_us'),
                'form_action'=>base_url('site_config/save_text/about_us'),
                'action'=>'update',
//                'back_page'=>base_url('admin/prefs'),
                'upload_image'=>true,
                'image_src'=>$this->frontend_model->get_about_image(),
                'image_dir'=>'public/siteweb/img/resources/',
                'upload_btn_text'=> get_phrase('upload_about_us_image'),
                'page_title'=>'About Us Settings',
            ]
        );
    }

    public function le_pays(){
        $this->editor(
            [
                'texte'=>get_frontend_settings('le_pays'),
                'form_action'=>base_url('site_config/save_text/le_pays'),
                'action'=>'update',
//                'back_page'=>base_url('admin/prefs'),
                'upload_image'=>true,
                'image_src'=>$this->frontend_model->get_le_pays_image(),
                'image_dir'=>'public/siteweb/img/resources/',
                'upload_btn_text'=> get_phrase('upload_le_pays_image'),
                'page_title'=>'Le pays Settings',
            ]
        );
    }

    public function terms_conditions(){
        $this->editor(
            [
                'texte'=>get_frontend_settings('terms_conditions'),
                'form_action'=>base_url('site_config/save_text/terms_conditions'),
                'action'=>'update',
//                'back_page'=>base_url('admin/prefs'),
                'upload_btn_text'=> get_phrase('update_settings'),
                'page_title'=>get_phrase('terms_and_conditions_settings'),
            ]
        );
    }

    public function privacy_policy(){
        $this->editor(
            [
                'texte'=>get_frontend_settings('privacy_policy'),
                'form_action'=>base_url('site_config/save_text/privacy_policy'),
                'action'=>'update',
//                'back_page'=>base_url('admin/prefs'),
                'upload_btn_text'=> get_phrase('update_settings'),
                'page_title'=>get_phrase('privacy_policy_settings'),
            ]
        );
    }

    //login system set up
    public function Set_up()
    {
        if (isset($_POST)) {

            $site_name = $this->input->post("site_name");
            $admin_email = $this->input->post("admin_email");
            $login_id = $this->input->post("login_id");
            $min_pass = $this->input->post("min_pass");
            $max_pass = $this->input->post("max_pass");
            $login_atmpt = $this->input->post("login_atmpt");
            $user_expire = $this->input->post("user_expire");
            $lock_time = $this->input->post("lock_time");

            if (empty($site_name)) {
                $site_name = "Login System";
            }
            if (empty($admin_email)) {
                $admin_email = "admin@gmail.com";
            }
            if (empty($login_id)) {
                $login_id = "email";
            }
            if (empty($min_pass)) {
                $min_pass = 8;
            }
            if (empty($max_pass)) {
                $max_pass = 20;
            }
            if (empty($login_atmpt)) {
                $login_atmpt = 3;
            }
            if (empty($user_expire)) {
                $user_expire = 86500;
            }
            if (empty($lock_time)) {
                $lock_time = 600;
            }

            //Config path
            $config_path = "./application/config/config_ion_auth.php";
            $replace_path = "./application/config/ion_auth.php";

            // Open the file
            $ion_auth_replace = file_get_contents($config_path);

            $new = str_replace("%SITE_TITLE%", $site_name, $ion_auth_replace);
            $new = str_replace("%ADMIN_EMAIL%", $admin_email, $new);
            $new = str_replace("%IDENTITY%", $login_id, $new);
            $new = str_replace("%MIN_PASS_LENGTH%", $min_pass, $new);
            $new = str_replace("%MAX_PASS_LENGTH%", $max_pass, $new);
            $new = str_replace("%USER_EXPIRE%", $user_expire, $new);
            $new = str_replace("%MAX_LOGIN_ATTEMPT%", $login_atmpt, $new);
            $new = str_replace("%LOCK_TIME%", $lock_time, $new);

            // Write the new ion_auth.php file
            $handle = fopen($replace_path, 'w+');

            // Chmod the file, in case the user forgot
            @chmod($replace_path, 0777);

            // Verify file permissions
            if (is_writable($replace_path)) {

                // Write the file
                if (fwrite($handle, $new)) {
                    $msg = "Configuration Completed!";
                    $this->session->set_flashdata('success', $msg);
                    redirect('site_config', 'refresh');
                } else {
                    $msg = "Error please contact with administrator!";
                    $this->session->set_flashdata('error', $msg);
                    redirect('site_config', 'refresh');
                }

            } else {
                $msg = "Error please contact with administrator!";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config', 'refresh');
            }

        }
    }

    public function backup()
    {
        $data['page'] = "site_config/configuration/backup";
        $this->template->template_view($data);
        // $this->load->view('dashboard',$data);
    }

    // Export Users list
    public function export_users()
    {
        $this->load->dbutil();

        $this->load->helper('file');

        $this->load->helper('download');

        $query = $this->db->query("SELECT * FROM users");

        $delimiter = ",";

        $nuline = "\r\n";

        force_download($query . '.csv', $this->dbutil->csv_from_result($query, $delimiter, $nuline));
    }

    // Database Backup
    public function backup_db()
    {

        // Load the DB utility class
        $this->load->dbutil();

        // Backup your entire database and assign it to a variable
        $backup = $this->dbutil->backup();

        // Load the file helper and write the file to your server
        $this->load->helper('file');

        write_file('Downloads.sql', $backup);

        // Load the download helper and send the file to your desktop
        $this->load->helper('download');

        force_download('backup.zip', $backup);
    }

    //facebook configuration
    public function fb_config($value = '')
    {
        if ($_POST) {
            $app_id = post('app_id');
            $apps_secret = post('app_secret');
            $redirect_url = post('url');

            $path_to_file = APPPATH . "config/social_auth_config.php";

            // Open the file
            $file_contents = file_get_contents($path_to_file);

            $new = str_replace("1304570809649783", $app_id, $file_contents, $count);
            $new = str_replace("2be58a38fc9deb0c84cb30d29591699b", $apps_secret, $new, $count);
            $new = str_replace("social_login/facebook_login", $redirect_url, $new, $count);

            if ($count == 0) {
                $msg = "Setup have been already done,If you want to change it again then try manually.";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/fb_config', 'refresh');
            }

            $replace_path = file_put_contents($path_to_file, $new);

            // Chmod the file, in case the user forgot
            @chmod($path_to_file, 0777);

            // Verify file permissions
            if (is_writable($path_to_file)) {

                $msg = "Facebook Setup Completed";
                $this->session->set_flashdata('success', $msg);
                redirect('site_config/fb_config', 'refresh');

            } else {
                $msg = "Error please contact with administrator!";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config', 'refresh');
            }
        } else {
            $data['page'] = "site_config/social_login_config/fb_login";
            $this->template->template_view($data);
        }

    }

    //Twitter configuration
    public function twitter_config($value = '')
    {
        if ($_POST) {
            $app_id = post('app_id');
            $apps_secret = post('app_secret');
            $redirect_url = post('url');

            $path_to_file = APPPATH . "config/social_auth_config.php";

            // Open the file
            $file_contents = file_get_contents($path_to_file);

            $new = str_replace("Ps0HSs9mBruaZHrj5T7FgNG25", $app_id, $file_contents, $count);
            $new = str_replace("lH4GT1LxYyLtAeXL5rb8q1tblLDpTjYhROGB3cRmg3SmXNaVBy", $apps_secret, $new, $count);
            $new = str_replace("social_login/twitter_login/", $redirect_url, $new, $count);

            if ($count == 0) {
                $msg = "Setup have been already done,If you want to change it again then try manually.";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/twitter_config', 'refresh');
            }

            $replace_path = file_put_contents($path_to_file, $new);

            // Chmod the file, in case the user forgot
            @chmod($path_to_file, 0777);

            // Verify file permissions
            if (is_writable($path_to_file)) {

                $msg = "Twitter Setup Completed";
                $this->session->set_flashdata('success', $msg);
                redirect('site_config/twitter_config', 'refresh');

            } else {
                $msg = "Error: Your File is Not Writable, Please on Permission 777";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/twitter_config', 'refresh');
            }
        } else {
            $data['page'] = "site_config/social_login_config/twitter_login";
            $this->template->template_view($data);
        }

    }

    //google configuration
    public function google_config($value = '')
    {
        if ($_POST) {
            $app_id = post('app_id');
            $apps_secret = post('app_secret');
            $redirect_url = post('url');

            $path_to_file = APPPATH . "config/social_auth_config.php";

            // Open the file
            $file_contents = file_get_contents($path_to_file);

            $new = str_replace("554815054343-mrip66a0c4a9r4tmse3ohidmfk5d7pt8.apps.googleusercontent.com", $app_id, $file_contents, $count);
            $new = str_replace("m-9HZQDEuNhphErNkNXveh3J", $apps_secret, $new, $count);
            $new = str_replace("social_login/google_login/", $redirect_url, $new, $count);

            if ($count == 0) {
                $msg = "Setup have been already done,If you want to change it again then try manually.";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/google_config', 'refresh');
            }

            $replace_path = file_put_contents($path_to_file, $new);

            // Chmod the file, in case the user forgot
            @chmod($path_to_file, 0777);

            // Verify file permissions
            if (is_writable($path_to_file)) {

                $msg = "Google Setup Completed";
                $this->session->set_flashdata('success', $msg);
                redirect('site_config/google_config', 'refresh');

            } else {
                $msg = "Error: Your File is Not Writable, Please on Permission 777";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/google_config', 'refresh');
            }
        } else {
            $data['page'] = "site_config/social_login_config/google_login";
            $this->template->template_view($data);
        }

    }

    //facebook configuration
    public function insta_config($value = '')
    {
        if ($_POST) {
            $app_id = post('app_id');
            $apps_secret = post('app_secret');
            $redirect_url = post('url');

            $path_to_file = APPPATH . "config/social_auth_config.php";

            // Open the file
            $file_contents = file_get_contents($path_to_file);

            $new = str_replace("cc0c6e3ffad5457eb811cf3bd99f0524", $app_id, $file_contents, $count);
            $new = str_replace("8abce035a6f741edb739dbdff8a4fe84", $apps_secret, $new, $count);
            $new = str_replace("Social_login/instagram_login", $redirect_url, $new, $count);

            if ($count == 0) {
                $msg = "Setup have been already done,If you want to change it again then try manually.";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/insta_config', 'refresh');
            }

            $replace_path = file_put_contents($path_to_file, $new);

            // Chmod the file, in case the user forgot
            @chmod($path_to_file, 0777);

            // Verify file permissions
            if (is_writable($path_to_file)) {

                $msg = "Instagram Setup Completed";
                $this->session->set_flashdata('success', $msg);
                redirect('site_config/insta_config', 'refresh');

            } else {
                $msg = "Error: Your File is Not Writable, Please on Permission 777";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/insta_config', 'refresh');
            }
        } else {
            $data['page'] = "site_config/social_login_config/insta_login";
            $this->template->template_view($data);
        }

    }

    //linkendin configuration
    public function linkedin_config($value = '')
    {
        if ($_POST) {
            $app_id = post('app_id');
            $apps_secret = post('app_secret');
            $redirect_url = post('url');

            $path_to_file = APPPATH . "config/social_auth_config.php";

            // Open the file
            $file_contents = file_get_contents($path_to_file);

            $new = str_replace("81uy3lt801lccs", $app_id, $file_contents, $count);
            $new = str_replace("v3XvcLVh2200Lr27", $apps_secret, $new, $count);
            $new = str_replace("social_login/linkedin_data", $redirect_url, $new, $count);

            if ($count == 0) {
                $msg = "Setup have been already done,If you want to change it again then try manually.";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/linkedin_config', 'refresh');
            }

            $replace_path = file_put_contents($path_to_file, $new);

            // Chmod the file, in case the user forgot
            @chmod($path_to_file, 0777);

            // Verify file permissions
            if (is_writable($path_to_file)) {

                $msg = "LinkedIn Setup Completed";
                $this->session->set_flashdata('success', $msg);
                redirect('site_config/linkedin_config', 'refresh');

            } else {
                $msg = "Error: Your File is Not Writable, Please on Permission 777";
                $this->session->set_flashdata('error', $msg);
                redirect('site_config/linkedin_config', 'refresh');
            }
        } else {
            $data['page'] = "site_config/social_login_config/linkedin_login";
            $this->template->template_view($data);
        }

    }

    public function reg_status($value = '')
    {
        $status = post('status');

        $data = array('registration_status' => $status);

        $user_id = $this->session->userdata('user_id');

        $result = $this->common_model->update($user_id, $data, 'settings');

        if ($result) {
            echo "success";
        } else {
            echo "failed";
        }

    }

}

/* End of file Site_config.php */
/* Location: ./application/controllers/Site_config.php */