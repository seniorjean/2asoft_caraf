<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
Author Salman Iqbal
Created on 20/1/2017
Company Parexons
*/

class Slide_builder extends MY_Controller
{
    protected $slide_dir = 'public/siteweb/img/slides/';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file', 'html');
        $this->load->module('template');
        $this->load->model('slide_builder_model');
        $this->load->helper('common_helper');

        if (!$this->ion_auth->logged_in()) {
            redirect('users/auth', 'refresh');
        }
        $this->ion_auth->get_user_group();
    }

    public function index()
    {
        $this->builder();
    }

    public function builder()
    {

        $data['page_content'] = 'Slide Builder';
        $data['page'] = "slide_builder/builder/index";
        $this->template->template_view($data);
    }

    public function add(){
        if(!empty($_POST)){
            $response = $this->slide_builder_model->add_slide($_POST);
            display($response);
        }
    }

    public function slides(){
        $data['page_content'] = 'Slides';
        $data['page'] = "slide_builder/slides/index";
        $data['slides'] = $this->db->get('slides')->result();
        $this->template->template_view($data);
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

    public function editor($data = [] , $data2 = [] , $view = 'slide_builder/builder/editor'){
        $data['texte']            = (!empty($data['texte']))?$data['texte'] : '';
        $data['form_action']      = (!empty($data['form_action']))?$data['form_action'] : '';
        $data['action']           = (!empty($data['action']))?$data['action'] : 'update';
        $data['upload_image']     = (!empty($data['upload_image']))?$data['upload_image'] : false;
        $data['image_dir']        = (!empty($data['image_dir']))?$data['image_dir'] : '';
        $data['upload_btn_text']  = (!empty($data['upload_btn_text']))?$data['upload_btn_text'] : 'Upload';
        $data['back_page']        = (!empty($data['back_page']))?$data['back_page'] : '##';
        $data['page_title']        = (!empty($data['page_title']))?$data['page_title'] : '';

        foreach ($data2 as $k=>$v){
            $data[$k] = $v;
        }

        $data['page'] = $view;
        $this->template->template_view($data);
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
