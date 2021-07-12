<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preferences_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_interface($table)
    {
        if($table != 'public_preferences')
        {
            $query = $this->db->where(['user_id'=>$this->session->userdata('user_id')])
                ->get($table);
        }
        else{
            $query = $this->db->get($table);
        }


        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            // if the interface is does not exist then we create it
            $data = ['user_id' => $this->session->userdata('user_id')];

            $this->db->insert($table,$data);

            $this->get_interface($table);
        }
    }


    public function update_interfaces($table, $data)
    {
        $where = "id = 1";

        return $this->db->update($table, $data, $where);
    }

}
