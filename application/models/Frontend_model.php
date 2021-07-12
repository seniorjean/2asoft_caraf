<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_model extends CI_Model {

  protected $school_id;
	protected $active_session;

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('common_helper');
		$this->school_id = 1;
		$this->active_session = active_session();
	}

  // get noticeboard
  function get_frontend_noticeboard() {
    $this->db->where('show_on_website', 1);
    $this->db->order_by('create_timestamp', 'DESC');
    $result = $this->db->get('notice_event')->result_array();
    return $result;
  }

  function get_frontend_recent_noticeboard() {
    $this->db->where('show_on_website', 1);
    $this->db->order_by('create_timestamp', 'DESC');
    $this->db->limit(4);
    $result = $this->db->get('notice_event')->result_array();
    return $result;
  }

  function get_frontend_all_events() {
    $this->db->where('status', 1);
    $this->db->order_by('timestamp', 'DESC');
    $result = $this->db->get('frontend_events')->result_array();
    return $result;
  }

  function get_frontend_upcoming_events($return_type = 'result_array') {
    $this->db->where('visible', 1);
    $this->db->where('type', 'event');
    $this->db->where('date >', time());
    $this->db->limit(4);
    $result = $this->db->get('notice_event')->$return_type();
    return $result;
  }

  function get_frontend_teachers() {
    $this->db->where('show_on_website', 1);
    $result = $this->db->get('teacher')->result_array();
    return $result;
  }

  function get_frontend_notice_by_id($notice_id) {
    $this->db->where('id', $notice_id);
    $result = $this->db->get('notice_event')->result_array();
    return $result;
  }

  // get all events
  function get_events() {
    $this->db->order_by('timestamp', "DESC");
    $events = $this->db->get('frontend_events')->result_array();
    return $events;
  }
  // add event
  function event_create() {
    $data['title']  = html_escape($this->input->post('title'));
    $data['timestamp']  = strtotime(html_escape($this->input->post('timestamp')));
    $data['status'] = html_escape($this->input->post('status'));
    $data['school_id'] = school_id();
    $data['created_by'] = $this->session->userdata('user_id');
    $this->db->insert('frontend_events', $data);

    $response = array(
			'status' => true,
			'message' => get_phrase('event_added')
		);
		return json_encode($response);
  }
  // edit event
  function event_update($event_id) {
    $data['title']  = html_escape($this->input->post('title'));
    $data['timestamp']  = strtotime(html_escape($this->input->post('timestamp')));
    $data['status'] = html_escape($this->input->post('status'));

    $this->db->where('frontend_events_id', $event_id);
    $this->db->update('frontend_events', $data);

    $response = array(
			'status' => true,
			'message' => get_phrase('event_added')
		);
		return json_encode($response);
  }
  // delete event
  function event_delete($event_id) {
    $this->db->where('frontend_events_id', $event_id);
    $this->db->delete('frontend_events');

    $response = array(
			'status' => true,
			'message' => get_phrase('event_deleted')
		);
		return json_encode($response);
  }

  // news
  function get_news() {
    $this->db->order_by('date_added', 'DESC');
    $news = $this->db->get('frontend_news')->result_array();
    return $news;
  }

  function add_news() {
    $data['title']  = html_escape($this->input->post('title'));
    $data['description']  = html_escape($this->input->post('description'));
    $data['date_added'] = strtotime(html_escape($this->input->post('date')));
    if ($_FILES['news_image']['name'] != '') {
      $data['image']  = $_FILES['news_image']['name'];
      move_uploaded_file($_FILES['news_image']['tmp_name'], 'upload/frontend/news_image/'. $_FILES['news_image']['name']);
    }
    $this->db->insert('frontend_news', $data);
  }

  function delete_news($news_id) {
    // delete the news image if exists
    $news_image = $this->db->get_where('frontend_news', array('frontend_news_id' => $news_id))->row()->image;
    if ($news_image != NULL) {
      if (file_exists('upload/frontend/news_image/'. $news_image)) {
        unlink('upload/frontend/news_image/'. $news_image);
      }
    }
    // delete the db entry
    $this->db->where('frontend_news_id', $news_id);
    $this->db->delete('frontend_news');
  }

  // gallery
  function get_gallaries() {
    $this->db->order_by('date_added', 'DESC');
    $result = $this->db->get('frontend_gallery')->result_array();
    return $result;
  }

  function get_gallery_info_by_id($gallery_id) {
    $this->db->where('frontend_gallery_id', $gallery_id);
    $result = $this->db->get('frontend_gallery')->result_array();
    return $result;
  }

  function add_frontend_gallery() {

    $data['title']            = html_escape($this->input->post('title'));
    $data['description']      = html_escape($this->input->post('description'));
    $data['show_on_website']  = $this->input->post('show_on_website');
    $data['school_id']        = $this->school_id;
    $data['date_added']       = strtotime(html_escape($this->input->post('date_added')));

    if ($_FILES['cover_image']['name'] != '') {
      $data['image']  = random(15).'.jpg';
      move_uploaded_file($_FILES['cover_image']['tmp_name'], 'upload/images/gallery_cover/'. $data['image']);
    }
    $this->db->insert('frontend_gallery', $data);
    $response = array(
			'status' => true,
			'message' => get_phrase('gallery_added')
		);
		return json_encode($response);
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

  public function delete_frontend_gallery($gallery_id = "") {
      $this->db->where('frontend_gallery_id', $gallery_id);
      $this->db->delete('frontend_gallery');

      $response = array(
  			'status' => true,
  			'message' => get_phrase('gallery_deleted')
  		);
  		return json_encode($response);
  }

  // Add Image in gallery
  public function upload_gallery_photo($gallery_id) {
    if (isset($_FILES['gallery_photo']) && !empty($_FILES['gallery_photo']['name'])) {
			$data['frontend_gallery_id'] = $gallery_id;
			$data['image'] = random(20).'.jpg';

			$image_path_info = [
			    'dir'=>'upload/images/gallery_images/' ,
                'image_name'=>$data['image']
            ];
            $this->load_image($_FILES['gallery_photo']['tmp_name'] , $image_path_info , $data);


			$response = array(
				'status' => true,
				'message' => get_phrase('gallery_image_has_been_added_successfully')
			);
		}else{
			$response = array(
				'status' => false,
				'message' => get_phrase('no_image_found')
			);
		}
		return json_encode($response);
  }

    public function upload_multiple_photo($gallery_id)
    {
        if(!empty($_FILES))
        {
            $ready_file = array();	//ready file contiendra les elements du fichier grouper ensemble

            for($i=0,$len = count($_FILES['gallery_photo']['name']); $i<$len; $i++) //le nombre de nom present determine le nombre de fichier envoyer
            {
                //reconstitution et groupage des donnees
                $ready_file['name'] =  $_FILES['gallery_photo']['name'][$i];
                $ready_file['type'] =  $_FILES['gallery_photo']['type'][$i];
                $ready_file['tmp_name'] =  $_FILES['gallery_photo']['tmp_name'][$i];
                $ready_file['error'] = $_FILES['gallery_photo']['error'][$i];
                $ready_file['size'] = $_FILES['gallery_photo']['size'][$i];

                $data['image'] = random(20).'.jpg';
                $data['frontend_gallery_id'] = $gallery_id;

                $image_path_info = [
                    'dir'=>'upload/images/gallery_images/' ,
                    'image_name'=>$data['image']
                ];
                $this->load_image($ready_file['tmp_name'],$image_path_info, $data);
            }

            $response = array(
                'status' => true,
                'message' => get_phrase('gallery_image_has_been_added_successfully')
            );
        }

        else{
            $response = array(
                'status' => false,
                'message' => get_phrase('no_image_found')
            );
        }
        return json_encode($response);

    }

    public function load_image($file_to_upload , $path_info = [] , $db_data = [])
    {
        if(empty($path_info['dir'])){
            $path_info['dir'] = 'upload/images/gallery_images/';
        }
        if(empty($path_info['image_name'])){
            $path_info['image_name'] = random(20).'.jpg';
        }

        move_uploaded_file($file_to_upload, $path_info['dir'].$path_info['image_name']);

        if(!empty($db_data)){
            $this->db->insert('frontend_gallery_image', $db_data);
        }
    }

  //DELETE PHOTO FROM GALLERY
  public function delete_gallery_photo($gallery_photo_id) {
    $gallery_photo_previous_data = $this->db->get_where('frontend_gallery_image', array('frontend_gallery_image_id' => $gallery_photo_id))->row_array();
    $this->db->where('frontend_gallery_image_id', $gallery_photo_id);
    $this->db->delete('frontend_gallery_image');
    $this->remove_image('gallery_images', $gallery_photo_previous_data['image']);
    $response = array(
      'status' => true,
      'message' => get_phrase('gallery_photo_deleted')
    );
    return json_encode($response);
  }
  function add_gallery_images($gallery_id) {
    $files = $_FILES;
    $number_of_images = count($_FILES['gallery_images']['name']);
    for ($i=0; $i < $number_of_images; $i++) {
      if ($files['gallery_images']['name'][$i] != '') {
        move_uploaded_file($files['gallery_images']['tmp_name'][$i], 'upload/frontend/gallery_images/'. $files['gallery_images']['name'][$i]);
        $data['frontend_gallery_id']  = $gallery_id;
        $data['image']  = $files['gallery_images']['name'][$i];
        $this->db->insert('frontend_gallery_image', $data);
      }
    }
  }

  function get_frontend_gallery_images_limited($gallery_id) {
    $this->db->where('frontend_gallery_id', $gallery_id);
    $this->db->order_by('frontend_gallery_image_id', 'desc');
    $this->db->limit(4);
    $result = $this->db->get('frontend_gallery_image')->result_array();
    return $result;
  }

  function delete_gallery_image($gallery_image_id) {
    $image = $this->db->get_where('frontend_gallery_image', array(
      'frontend_gallery_image_id' => $gallery_image_id
    ))->row()->image;
    if (file_exists('upload/frontend/gallery_images/'.$image)) {
      unlink('upload/frontend/gallery_images/'.$image);
    }
    $this->db->where('frontend_gallery_image_id', $gallery_image_id);
    $this->db->delete('frontend_gallery_image');
  }

  function get_gallery_images($gallery_id) {
    $this->db->where('frontend_gallery_id', $gallery_id);
    $this->db->order_by('frontend_gallery_image_id', 'desc');
    $result = $this->db->get('frontend_gallery_image')->result_array();
    return $result;
  }

  //FRONTEND GALLERY
  public function get_photos_by_gallery_id($frontend_gallery_id = "") {
    $this->db->where('frontend_gallery_id', $frontend_gallery_id);
    return $this->db->get('frontend_gallery_image')->result_array();
  }

  public function get_gallery_image($image = "") {
    if (file_exists('upload/images/gallery_images/'.$image))
    return base_url().'upload/images/gallery_images/'.$image;
    else
    return base_url().'upload/images/gallery_images/placeholder.png';
  }

  // get general settings
  function get_frontend_general_settings($type = '') {
    $result = $this->db->get_where('frontend_settings', array(
      'type' => $type
    ))->row()->description;
    return $result == null ? '' : $result;
  }

  // update terms and conditions
  function update_terms_and_conditions() {
    $data['terms_conditions']  = html_escape($this->input->post('terms_and_conditions'));
    $this->db->where('id', 1);
    $this->db->update('frontend_settings', $data);

    $response = array(
      'status' => true,
      'message' => get_phrase('updated')
    );
    return json_encode($response);
  }

  // update privacy policy
  function update_privacy_policy() {
    $data['privacy_policy']  = html_escape($this->input->post('privacy_policy'));
    $this->db->where('id', 1);
    $this->db->update('frontend_settings', $data);

    $response = array(
      'status' => true,
      'message' => get_phrase('updated')
    );
    return json_encode($response);
  }

  // update about us
  function update_about_us() {
    $data['about_us']  = html_escape($this->input->post('about_us'));
    $this->db->where('id', 1);
    $this->db->update('frontend_settings', $data);

    if ($_FILES['about_us_image']['name'] != '') {
      move_uploaded_file($_FILES['about_us_image']['tmp_name'], 'upload/images/about_us/about-us.jpg');
    }

    $response = array(
      'status' => true,
      'message' => get_phrase('updated')
    );
    return json_encode($response);
  }

  // send message from contact form
  function send_contact_message() {
    $first_name = html_escape($this->input->post('first_name'));
    $last_name = html_escape($this->input->post('last_name'));
    $email = html_escape($this->input->post('email'));
    $phone = html_escape($this->input->post('phone'));
    $address = html_escape($this->input->post('address'));
    $comment = html_escape($this->input->post('comment'));

    $receiver_email = get_settings('system_email');

    $msg = $comment."</br>";
    $msg .= $first_name." ".$last_name;
    $msg .= "Phone : ".$phone;
    $msg .= "Address : ". $address;

    $this->email_model->contact_message_email($email, $receiver_email, $msg);
  }

  // update slider images
  function update_homepage_slider() {
    $current_images_json = get_frontend_settings('slider_images');
    $current_images = json_decode($current_images_json);
    $slider = array();
    for ($i=0; $i < 3; $i++) {
      $image = $current_images[$i]->image;
      $data['title']  = html_escape($this->input->post('title_'.$i));
      $data['description']  = html_escape($this->input->post('description_'.$i));
      if ($_FILES['slider_image_'.$i]['name'] != '') {
        $data['image']  = $_FILES['slider_image_'.$i]['name'];
        move_uploaded_file($_FILES['slider_image_'.$i]['tmp_name'], 'public/siteweb/img/slides/'. $data['image']);
      } else {
        $data['image']  = $image;
      }
      array_push($slider, $data);
    }

    $slider_data['slider_images']  = json_encode($slider);
    $this->db->where('id', 1);
    $this->db->update('frontend_settings', $slider_data);

    $response = array(
      'status' => true,
      'message' => get_phrase('updated')
    );
    return json_encode($response);
  }

  // update general settings
  function update_frontend_general_settings() {
    $links = array();
    $social['facebook'] = html_escape($this->input->post('facebook_link'));
    $social['twitter'] = html_escape($this->input->post('twitter_link'));
    $social['linkedin'] = html_escape($this->input->post('linkedin_link'));
    $social['google'] = html_escape($this->input->post('google_link'));
    $social['youtube'] = html_escape($this->input->post('youtube_link'));
    $social['instagram'] = html_escape($this->input->post('instagram_link'));
    array_push($links, $social);

    $data['social_links'] = json_encode($links);
    $data['website_title'] = $this->input->post('website_title');
    $data['homepage_note_title'] = $this->input->post('homepage_note_title');
    $data['homepage_note_description'] = $this->input->post('homepage_note_description');
    $data['copyright_text'] = $this->input->post('copyright_text');
    $this->db->where('id', 1);
    $this->db->update('frontend_settings', $data);

    if ($_FILES['header_logo']['name'] != '') {
      move_uploaded_file($_FILES['header_logo']['tmp_name'], 'public/siteweb/img/resources/logo_caraf.png');
    }

    if ($_FILES['footer_logo']['name'] != '') {
      move_uploaded_file($_FILES['footer_logo']['tmp_name'], 'public/siteweb/img/resources/logo_footer_caraf.png');
    }

    if ($_FILES['tv_bg']['name'] != '') {
      move_uploaded_file($_FILES['tv_bg']['tmp_name'], 'public/siteweb/img/resources/testi-bg.jpg');
    }

    $response = array(
			'status' => true,
			'message' => get_phrase('general_settings_updated')
		);
		return json_encode($response);
  }


  // MY CODE STARTS FROM HERE

  //GET ATIVE SCHOOL ID
  public function get_active_school_id() {
    if (addon_status('multi-school')) {
      if ($this->session->userdata('active_school_id') > 0) {
        return $this->session->userdata('active_school_id');
      }else{
        $active_school_id = get_settings('school_id');
        $this->session->set_userdata('active_school_id', $active_school_id);
        return $this->session->userdata('active_school_id');
      }
    }else{
      $active_school_id = get_settings('school_id');
      $this->session->set_userdata('active_school_id', $active_school_id);
      return $this->session->userdata('active_school_id');
    }
  }
  // GET HEADER LOGO
  public function get_header_logo() {
    return base_url('public/siteweb/img/resources/logo_caraf.png');
  }
  // GET FOOTER LOGO
  public function get_footer_logo() {
      return base_url('public/siteweb/img/resources/logo_footer_caraf.png');
  }

  //GET ABOUT IMAGE
  public function get_about_image() {
    return base_url('public/siteweb/img/resources/about-us.jpg');
  }

  public function get_le_pays_image() {
    return base_url('public/siteweb/img/resources/le_pays.jpg');
  }

  //GET SLIDER IMAGE
  public function get_slider_image($image) {
    return base_url('public/siteweb/img/slides/'.$image);
  }

  public function remove_image($type = "", $photo = "") {
		$path = 'upload/images/'.$type.'/'.$photo;
		if(file_exists($path)){
			unlink($path);
		}
	}
}
