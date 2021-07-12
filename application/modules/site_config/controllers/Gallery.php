<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

    private $counter = 1;
    public function __construct()
    {
        parent::__construct();
        $this->load->module('template');
        $this->load->model('gallery_model');
        $this->load->library('upload_image');
    }

	public function index()
	{
        $this->galleries();
	}

	public function gallery($galleries_id = '')
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else {
            $where = ['galleries_id'=>$galleries_id];
            $data['gallery_items'] = $this->gallery_model->GET_DATA('gallery',$where,'g_item_id')->result();
            $data['total_item'] = count($data['gallery_items']);
            $data['galleries_id'] = $galleries_id;

            $data['page'] = "site_config/gallery/images";
            $this->template->template_view($data);
        }
	}

	public function galleries(){
        $data['galleries'] = $this->db->get('galleries')->result();
        $data['total_item'] = count($data['galleries']);
        $data['page'] = "site_config/gallery/index";
        $this->template->template_view($data);
    }

    public function load_multiple_file()
    {
        $errors = array();
        $data['load_image_error'] = '';
        if(!empty($_FILES))
        {
            $ready_file = array();	//ready file contiendra les element du fichier grouper ensemble

            for($i=0,$len = count($_FILES['user_file']['name']); $i<$len; $i++) //le nombre de nom present determine le nombre de fichier envoyer
            {
                //reconstitution et groupage des donnees
                $ready_file['name'] =  $_FILES['user_file']['name'][$i];
                $ready_file['type'] =  $_FILES['user_file']['type'][$i];
                $ready_file['tmp_name'] =  $_FILES['user_file']['tmp_name'][$i];
                $ready_file['error'] = $_FILES['user_file']['error'][$i];
                $ready_file['size'] = $_FILES['user_file']['size'][$i];

                $result = $this->load_image($ready_file,'uploads/gallery');
                if(!empty($result))
                {
                    array_push($errors,$result);
                }

            }
        }

        //if the upload was successfull
        if(empty($errors))
        {
            $this->session->set_flashdata('message','Image(s) successfuly Uploaded');
        }
        else
        {
            //cree un message d'erreur

            foreach($errors as $error)
            {
                $data['load_image_error'].= $error.'<br>';
            }
            $this->session->set_flashdata('error_message',$data['load_image_error']);

        }

        go_to('site_config/gallery/gallery/'.$_POST['galleries_id']);
    }

    public function del_gallery_item()
    {
        $gallery_item_id = $_POST['gallery_item_id'];
        $picture_name = $_POST['picture_name'];
        if(!empty($gallery_item_id) AND !empty($picture_name))
        {
            //delete the item that has the id passed in args
            $where = ['g_item_id' => $gallery_item_id];
            //check if the image is not related to any item
            //in case the image is alrady associated to an item
            //block the delete operation
            //if the image is associated to an item
            $this->gallery_model->del_gallery_item('gallery',$where);
            $this->session->set_flashdata('message','Image successfuly deleted');
            $this->delete_file(ROOTPATH('uploads/gallery/'.$picture_name));


        }

        redirect('site_config/gallery');
    }

    public function load_image($file_to_upload , $dir = 'upload')
    {
        //getting image_name
        //$item_name = $this->gallery_model->get_new_item_name($this->session->userdata('user_id'));
        //setting image configuration for the library (upload_image)
        //generate a random number for the gallery item name
        $item_name = $time = NOW().rand(1,99).rand(99,1000).rand(1001,1500)+$this->counter++;
        $config['image_path'] =  ROOTPATH($dir.'/');
        $config['file_extension'] = 'png';
        $config['image_file'] = $file_to_upload;
        $config['image_name'] = $item_name;
        $config['extension'] = ['JPG','jpg', 'PNG', 'png', 'JPEG', 'jpeg', 'webp'];

        //the load_image function of the upload_image library returns a String
        /*
        |that can be eather an error message or the name of the file uploaded
        |In case there is no error , the name of the file uploaded is return
        |otherwise  , an error message is returned
        */

        //Store the returned value of the load_image function inside the variable result
        $result = $this->upload_image->load_image($config);

        //create the loaded image name by concatenating the image name with the
        //variable in  the extenssion
        $loaded_image_name = $item_name.'.'.$config['file_extension'];

        $this->session->set_userdata('loaded_image',$loaded_image_name);

        //if the upload was successful
        if($result == $loaded_image_name)
        {
            //insert the uploaded image data into the database
            $this->gallery_model->add_item_to_gallery('gallery',$result,$_POST['galleries_id']);
            return "";
        }
        //if the upload was unsuccessful
        else
        {
            return $result;
        }
    }

    public function empty_gallery()
    {
      if(!empty($gallery_id)){

      }
    }

    public function delete_file($file_name)
    {
        if(!empty($file_name))
        {
            if(file_exists($file_name)){
                unlink($file_name);
            }
        }
    }

    public function delete_all_by_extention($dir , $extenssion)
    {
        if(!empty($dir) and !empty($extenssion))
        {
            array_map('unlink',glob($dir.'/*'.$extenssion));
        }
    }

    public function create_gallery(){
        $response = [
            'status'=>false,
            'message'=>'An error occurred please try again'
        ];
        if(!empty($_POST)){
            $image_name = 'cover_'.random_id().'.png';
            $data = [
                'title'=>$_POST['title'],
                'description'=>$_POST['description'],
                'cover_picture'=>$image_name,
                'created_at'=>time(),
            ];

            if(!empty($_FILES['cover_picture']['name'])){
                move_uploaded_file($_FILES['cover_picture']['tmp_name'], 'uploads/gallery/'.$image_name);

                sleep(1);

                if(file_exists('uploads/gallery/'.$image_name)){
                    $this->db->insert('galleries' , $data);
                    $response = [
                        'status'=>true,
                        'message'=>'Gallery successfully Created'
                    ];
                }
                else{
                    $response = [
                        'status'=>false,
                        'message'=>'Failed to upload the cover image. Please try another one',
                    ];
                }


            }



        }
        display(json_encode($response));
    }

    public function delete_gallery(){
	    if(!empty($_POST['id'])){
	        $where_gallery_images = ['galleries_id'=>$_POST['id']];
	        $where_gallery = $_POST;
	        $images = $this->db->get_where('gallery',$where_gallery_images)->result();
            $cover_image = $this->db->get_where('galleries',$where_gallery)->row()->cover_picture;
	        foreach($images as $image){
	            $this->delete_file('uploads/gallery/'.$image->picture_name);
            }
            $this->delete_file('uploads/gallery/'.$cover_image);

            $this->db->where($where_gallery)->delete('galleries');
            $this->db->where($where_gallery_images)->delete('gallery');
        }
    }

    public function edit_gallery(){
        if(!empty($_POST['id'])){
            $response = $this->db->get_where('galleries' , $_POST)->row_array();
            display(json_encode($response));
        }

        if(!empty($_POST['gallery_id'])){
            if(!empty($_FILES['cover_picture']['name'])) {
                move_uploaded_file($_FILES['cover_picture']['tmp_name'], 'uploads/gallery/' . $_POST['cover_picture_name']);
            }

            $data = [
                'title'=>$_POST['title'],
                'description'=>$_POST['description'],
            ];
            $this->db->where(['id'=>$_POST['gallery_id']])->update('galleries',$data);

            display(json_encode([
                'status'=>true,
                'message'=>'Gallery successfully Updated'
            ]));
        }
    }

}
