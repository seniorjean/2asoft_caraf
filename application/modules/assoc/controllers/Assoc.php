<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Assoc extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file', 'html');
        $this->load->module('template');
        $this->load->model('assoc_model');
        $this->load->helper('common_helper');

        if (!$this->ion_auth->logged_in()) {
            redirect('users/auth', 'refresh');
        }
        $this->ion_auth->get_user_group();
    }

    public function index()
    {
        $this->associations();
    }

    public function associations($action = '')
    {
		if(!empty($action)){
			if($action == 'add'){
				$this->db->insert('associations',[
//					'name'=>$_POST['name'],
					'president'=>$_POST['president'],
					'secretaire'=>$_POST['secretaire'],
					'sigle'=>$_POST['sigle'],
					'village'=>$_POST['village_id'],
					'telephone'=>$_POST['telephone'],
				]);

				display(json_encode([
					'status'=>true,
					'message'=>'Association ajouter avec success',
				]));
				return true;
			}
		}

		else{
			$data['communes'] = $this->db->get('communes')->result();
			$data['villages'] = $this->db->query('SELECT *FROM villages WHERE id NOT IN (select village from associations)')->result();
			$data['associations'] = $this->db->select('a.* , v.name as village_name')->join('villages as v','v.id = a.village')->get('associations as a')->result();
			$data['page_content'] = 'Associations';
			$data['page'] = "assoc/associations/index";
			$this->template->template_view($data);
		}
    }

    public function add(){
        if(!empty($_POST)){
            $response = $this->slide_builder_model->add_slide($_POST);
            display($response);
        }
    }

    public function communes($action = ''){
    	if(!empty($action)){

    		if($action == 'add'){
    			$this->db->insert('communes' , [
    				'name'=>$_POST['name'],
					'description'=>$_POST['description']
				]);

    			display(json_encode([
    				'status'=>true,
					'message'=>'Commune ajouter avec success',
				]));
    			return true;
			}

		}
    	else{
			$data['page_content'] = 'Communes';
			$data['page'] = "assoc/communes/index";
			$data['communes'] = $this->db->get('communes')->result();
			$this->template->template_view($data);
		}


    }

    public function edit($id = ''){
        if(!empty($_POST)){
            $response = $this->slide_builder_model->edit_slide($_POST);
            display($response);
        }
        if(!empty($id)){
            $data['slide'] = $this->db->get_where('slides',['id'=>$id])->row();
            if(empty($data['slide'])){
                redirect('slide_builder/slides');
            }
            $data['page_content'] = 'Edit Slide';
            $data['page'] = "slide_builder/builder/edit";
            $this->template->template_view($data);
        }

    }

    public function delete(){
        if(!empty($_POST['slide_id'])){
            $response = $this->slide_builder_model->delete_slide($_POST['slide_id']);
            display($response);
        }
    }

    public function edit_text($slide_id){
        if(!empty($slide_id)){
            $slide = $this->db->get_where('slides',['id'=>$slide_id])->row_array();
            $this->editor(
                [
                    'texte'=> $slide['i1_content'],
                    'form_action'=>base_url('slide_builder/save_text'),
                    'action'=>'update',
                    'back_page'=>base_url('slide_builder/slides'),
                    'upload_image'=>true,
                    'image_dir'=>$this->slide_dir,
                    'upload_btn_text'=> get_phrase('upload_about_us_image'),
                    'page_title'=>'Edit Slide Text',
                ],
                $slide
            );
        }
    }

    public function villages($action = ''){
    	if(!empty($action)){
    		if($action == 'add'){
    			$this->db->insert('villages',[
    				'name'=>$_POST['name'],
					'description'=>$_POST['description'],
					'commune_id'=>$_POST['commune_id'],
				]);

				display(json_encode([
					'status'=>true,
					'message'=>'Village ajouter avec success',
				]));
				return true;
			}
		}

    	else{
			$data['page_content'] = 'Village';
			$data['page'] = 'assoc/villages/index';
			$data['communes'] = $this->db->get('communes')->result();
			$data['villages'] = $this->db->select('v.* , c.name as commune_name')->join('communes as c','c.id = v.commune_id')->get('villages as v')->result();
			$this->template->template_view($data);
		}
    }

    public function save_text(){
        if(!empty($_POST['slide_id'])){
            $db_data = [];
            if(!empty($_POST['i1_content'])){$db_data['i1_content'] = $_POST['i1_content'];}
            if(!empty($_POST['i2_content'])){$db_data['i2_content'] = $_POST['i2_content'];}
            if(!empty($_POST['i3_content'])){$db_data['i3_content'] = $_POST['i3_content'];}

            $this->db->where(['id'=>$_POST['slide_id']])->update('slides',$db_data);

            $response = [
                            'status'=>true,
                            'message'=>'Slide text successfully updated'
                        ];

            display(json_encode($response));
        }
    }

    public function change_visibility(){
        if(!empty($_POST)){
            $this->db->where(['id'=>$_POST['slide_id']])->update('slides',['visible'=>$_POST['visible']]);
        }
    }

    public function change_rubrique(){
        if(!empty($_POST)){
            $this->db->where(['rubrique'=>'1'])->update('slides',['rubrique'=>'0']);
            $this->db->where(['id'=>$_POST['slide_id']])->update('slides',['rubrique'=>$_POST['rubrique']]);
        }
    }

    public function annonces($action = ''){
        if(!empty($_POST)){
            if($action == 'add'){
                $_POST = trim_form_data($_POST);
                $db_data = [
                    'title'=>$_POST['title'],
                    'sub_title'=>$_POST['sub_title'],
                    'visibility'=>'1',
                    'status'=>'1'
                ];
                $this->db->insert('annonces',$db_data);
                $response = [
                    'status'=>true,
                    'message'=>'Annonce crée avec succès'
                ];
                display(json_encode($response));
            }

            if($action == 'change_visibility'){
                if(!empty($_POST['annonce_id'])){
                    $this->db->where(['id'=>$_POST['annonce_id']])->update('annonces',['visibility'=>$_POST['visibility']]);
                }
            }

            if($action == 'delete'){
                if(!empty($_POST['annonce_id'])){
                    $this->db->where(['id'=>$_POST['annonce_id']])->delete('annonces');
                }
            }

            if($action == 'edit'){
                $_POST = trim_form_data($_POST);
                $db_data = [
                    'title'=>$_POST['title'],
                    'sub_title'=>$_POST['sub_title'],
                ];
                $this->db->where(['id'=>$_POST['annonce_id']])->update('annonces',$db_data);
                $response = [
                    'status'=>true,
                    'message'=>'Annonce modifié avec succès'
                ];
                display(json_encode($response));
            }

            if($action == 'save_text'){
                $db_data = ['content'=>$_POST['content']];
                $this->db->where(['id'=>$_POST['annonce_id']])->update('annonces',$db_data);

                $response = [
                    'status'=>true,
                    'message'=>'Contenue modifié avec succès'
                ];

                display(json_encode($response));
            }

        }
        else{
            $data['page_content'] = 'Texte';
            $data['page'] = "slide_builder/annonces/index";
            $data['annonces'] = $this->db->get('annonces')->result();
            $this->template->template_view($data);
        }

    }

    public function edit_annonce_text($annonce_id = ''){
        if(!empty($annonce_id)){
            $annonce = $this->db->get_where('annonces',['id'=>$annonce_id])->row_array();
            $this->editor(
                [
                    'texte'=> $annonce['content'],
                    'form_action'=>base_url('slide_builder/annonces/save_text'),
                    'action'=>'update',
                    'back_page'=>base_url('slide_builder/annonces'),
                    'upload_image'=>false,
                    'upload_btn_text'=> get_phrase('upload_about_us_image'),
                    'page_title'=>'Modifier contenue de l’annonce',
                ],
                $annonce,
                'slide_builder/annonces/editor'
            );
        }
    }

}
