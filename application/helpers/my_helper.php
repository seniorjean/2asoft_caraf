<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Helper For print_r
	function pr($var = '')
	{
		echo "<pre>";
		   print_r($var);	
		echo "</pre>";
	    // die();	
	}

	//Helper For base_url()
	function bs($value = '')
	{
		// public $url = ""
		return base_url($value);
	}
	// function fa($name='',$attr='')
	// {
	// 	echo "<i class="'fa fa'.-.".$name."-".$attr""></i>";
	// }

	//Helper for $this->load->view()
	function view($value='', $data=array(), $output = false)
	{
		$CI =& get_instance();
		$CI->load->view($value,$data,$output);
	}

	//Helper For thsi->input->post()
	function post($value='')
	{
		$CI =& get_instance();
	    return $CI->input->post($value);
	}

	//helper for var_dump
    function dd($value='')
	{
		echo "<pre>";
		   var_dump($value);	
		echo "</pre>";
		die();
	}

	//Helper for last_query()
	function vd()
	{
		$CI =& get_instance();
		return $CI->db->last_query();
	}

	/**
	 * get_user_group
	 *
	 * @param get the current user group id
	 *
	 * @author Salman Iqbal
	 **/
	// function get_user_group($value='')
	// {

	// 	$CI =& get_instance();

	// 	$chk = $CI->session->userdata('group_id');

	// 	if(!isset($chk))

	// 	{
	// 		$id = $CI->session->userdata('user_id');

	// 		$result = $CI->ion_auth_model->user_group_id($id);

	// 		if ($result)  
	// 		{	
	// 			$group_id = array('group_id'   => $result->id,'group_name' => $result->name);

	// 			$CI->session->set_userdata($group_id);
	// 		}
	// 	}

	// 	$chk = $CI->session->userdata('group_id');
	// 	return $chk;
	// }

	function group_priviliges($value='')
	{
		$CI =& get_instance();

		$gp_id = $CI->session->userdata("group_id");

		$gp_result = $CI->ion_auth_model->user_gp_privilegs($gp_id);

		$gp_data = array();
		   
      	foreach($gp_result as $value)
        {
           //add all data to session
           $gp_data[] = $value->perm_name;

        }

	    return $gp_data;
	}
	


/* End of file custom_helpers.php */
/* Location: ./application/helpers/custom_helpers.php */