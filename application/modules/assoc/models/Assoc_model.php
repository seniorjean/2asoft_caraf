<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Assoc_model extends CI_Model
{

    protected $slide_dir = 'public/siteweb/img/slides/';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('common_helper');
        $this->school_id = 1;
        $this->active_session = active_session();
    }


    public function add_slide($data = [])
    {
        if (!empty($data)) {
            $db_data = [];
            if (isset($_FILES['i1_img']) && !empty($_FILES['i1_img']['name'])) {
                $data['i1_img'] = random(20) . '.jpg';
                $image_path_info = [
                    'dir' => $this->slide_dir,
                    'image_name' => $data['i1_img']
                ];
                $db_data['i1_category'] = $data['i1_category'];
                $db_data['i1_title'] = $data['i1_title'];
                $db_data['i1_img'] = $data['i1_img'];

                $this->load_image($_FILES['i1_img']['tmp_name'], $image_path_info);
            }

            if (isset($_FILES['i2_img']) && !empty($_FILES['i2_img']['name'])) {
                $data['i2_img'] = random(20) . '.jpg';
                $image_path_info = [
                    'dir' => $this->slide_dir,
                    'image_name' => $data['i2_img']
                ];
                $db_data['i2_category'] = $data['i2_category'];
                $db_data['i2_title'] = $data['i2_title'];
                $db_data['i2_img'] = $data['i2_img'];

                $this->load_image($_FILES['i2_img']['tmp_name'], $image_path_info);
            }

            if (isset($_FILES['i3_img']) && !empty($_FILES['i3_img']['name'])) {
                $data['i3_img'] = random(20) . '.jpg';
                $image_path_info = [
                    'dir' => $this->slide_dir,
                    'image_name' => $data['i3_img']
                ];
                $db_data['i3_category'] = $data['i3_category'];
                $db_data['i3_title'] = $data['i3_title'];
                $db_data['i3_img'] = $data['i3_img'];
                $this->load_image($_FILES['i3_img']['tmp_name'], $image_path_info);
            }
            $db_data['model'] = $data['model'];
            $this->db->insert('slides', $db_data);


            $response = array(
                'status' => true,
                'message' => get_phrase('slide_has_been_added_successfully')
            );

        } else {
            $response = array(
                'status' => false,
                'message' => get_phrase('no_data_found')
            );
        }
        return json_encode($response);
    }

    public function edit_slide($data = [])
    {
        if (!empty($data)) {
            $db_data = [];
            $slide = $this->db->get_where('slides',['id'=>$data['slide_id']])->row();

            if (isset($_FILES['i1_img']) && !empty($_FILES['i1_img']['name'])) {
                $data['i1_img'] = $slide->i1_img;
                $image_path_info = [
                    'dir' => $this->slide_dir,
                    'image_name' => $data['i1_img']
                ];
                $this->load_image($_FILES['i1_img']['tmp_name'], $image_path_info);
            }
            if(!empty($data['i1_category'])){$db_data['i1_category'] = $data['i1_category'];}
            if(!empty($data['i1_title'])){$db_data['i1_title'] = $data['i1_title'];}
            if(!empty($data['i1_img'])){$db_data['i1_img'] = $data['i1_img'];}

            if (isset($_FILES['i2_img']) && !empty($_FILES['i2_img']['name'])) {
                $data['i2_img'] = (!empty($slide->i2_img))?$slide->i2_img:random(20) . '.jpg';
                $image_path_info = [
                    'dir' => $this->slide_dir,
                    'image_name' => $data['i2_img']
                ];
                $this->load_image($_FILES['i2_img']['tmp_name'], $image_path_info);
            }
            if(!empty($data['i2_category'])){$db_data['i2_category'] = $data['i2_category'];}
            if(!empty($data['i2_title'])){$db_data['i2_title'] = $data['i2_title'];}
            if(!empty($data['i2_img'])){$db_data['i2_img'] = $data['i2_img'];}

            if (isset($_FILES['i3_img']) && !empty($_FILES['i3_img']['name'])) {
                $data['i3_img'] = (!empty($slide->i3_img))?$slide->i3_img:random(20) . '.jpg';
                $image_path_info = [
                    'dir' => $this->slide_dir,
                    'image_name' => $data['i3_img']
                ];
                $this->load_image($_FILES['i3_img']['tmp_name'], $image_path_info);
            }
            if(!empty($data['i3_category'])){$db_data['i3_category'] = $data['i3_category'];}
            if(!empty($data['i3_title'])){$db_data['i3_title'] = $data['i3_title'];}
            if(!empty($data['i3_img'])){$db_data['i3_img'] = $data['i3_img'];}

            $db_data['model'] = $data['model'];
            $this->db->where(['id'=>$data['slide_id']])->update('slides', $db_data);


            $response = array(
                'status' => true,
                'message' => get_phrase('slide_has_been_updated_successfully')
            );

        } else {
            $response = array(
                'status' => false,
                'message' => get_phrase('no_data_found')
            );
        }
        return json_encode($response);
    }

    public function upload_multiple_photo($gallery_id)
    {
        if (!empty($_FILES)) {
            $ready_file = array();    //ready file contiendra les elements du fichier grouper ensemble

            for ($i = 0, $len = count($_FILES['gallery_photo']['name']); $i < $len; $i++) //le nombre de nom present determine le nombre de fichier envoyer
            {
                //reconstitution et groupage des donnees
                $ready_file['name'] = $_FILES['gallery_photo']['name'][$i];
                $ready_file['type'] = $_FILES['gallery_photo']['type'][$i];
                $ready_file['tmp_name'] = $_FILES['gallery_photo']['tmp_name'][$i];
                $ready_file['error'] = $_FILES['gallery_photo']['error'][$i];
                $ready_file['size'] = $_FILES['gallery_photo']['size'][$i];

                $data['image'] = random(20) . '.jpg';
                $data['frontend_gallery_id'] = $gallery_id;

                $image_path_info = [
                    'dir' => 'upload/images/gallery_images/',
                    'image_name' => $data['image']
                ];
                $this->load_image($ready_file['tmp_name'], $image_path_info, $data);
            }

            $response = array(
                'status' => true,
                'message' => get_phrase('gallery_image_has_been_added_successfully')
            );
        } else {
            $response = array(
                'status' => false,
                'message' => get_phrase('no_image_found')
            );
        }
        return json_encode($response);

    }

    public function load_image($file_to_upload, $path_info = [])
    {
        if (empty($path_info['dir'])) {
            $path_info['dir'] = $this->slide_dir;
        }
        if (empty($path_info['image_name'])) {
            $path_info['image_name'] = random(20) . '.jpg';
        }

        move_uploaded_file($file_to_upload, $path_info['dir'] . $path_info['image_name']);

    }

    function update_frontend_gallery($gallery_id) {
        $data['title']            = html_escape($this->input->post('title'));
        $data['description']      = html_escape($this->input->post('description'));
        $data['show_on_website']  = $this->input->post('show_on_website');

        if ($_FILES['cover_image']['name'] != '') {
            $data['image']  = random(15).'.jpg';
            move_uploaded_file($_FILES['cover_image']['tmp_name'], 'upload/images/gallery_cover/'. $data['image']);
        }
        $this->db->where('frontend_gallery_id', $gallery_id);
        $this->db->update('frontend_gallery', $data);
        $response = array(
            'status' => true,
            'message' => get_phrase('gallery_updated')
        );
        return json_encode($response);
    }

    public function delete_slide($slide_id = '')
    {
        if(!empty($slide_id)){
            $slide = $this->db->get_where('slides',['id'=>$slide_id])->row();

            if(!empty($slide->i1_img)){$this->remove_image($slide->i1_img);}
            if(!empty($slide->i2_img)){$this->remove_image($slide->i2_img);}
            if(!empty($slide->i3_img)){$this->remove_image($slide->i3_img);}

            $this->db->where(['id'=>$slide_id])->delete('slides');

            $response = array(
                'status' => true,
                'message' => get_phrase('slide_successfully_deleted')
            );
            return json_encode($response);
        }

        else {
            $response = array(
                'status' => false,
                'message' => get_phrase('item_not_found')
            );
            return json_encode($response);
        }

    }

    function upload_many($gallery_id)
    {
        $files = $_FILES;
        $number_of_images = count($_FILES['gallery_images']['name']);
        for ($i = 0; $i < $number_of_images; $i++) {
            if ($files['gallery_images']['name'][$i] != '') {
                move_uploaded_file($files['gallery_images']['tmp_name'][$i], 'upload/frontend/gallery_images/' . $files['gallery_images']['name'][$i]);
                $data['frontend_gallery_id'] = $gallery_id;
                $data['image'] = $files['gallery_images']['name'][$i];
                $this->db->insert('frontend_gallery_image', $data);
            }
        }
    }

    public function remove_image($photo = "")
    {
        $path = $this->slide_dir . $photo;
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
