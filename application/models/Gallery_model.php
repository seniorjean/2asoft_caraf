<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function GET_DATA($table,$where = array(),$order='id')
    {
        $request = $this->db->where($where)
            ->order_by($order,'desc')
            ->get($table);
        return $request;

    }

    public function INSERT($table , $data = array())
    {
        if(!empty($table) AND !empty($data))
        {
            $this->db->insert($table,$data);
        }
        else{
            $this->session->set_flashdata('error_message','Invalid data');
            return false;
        }
    }

    public function DELETE($table , $where = array())
    {
       if(!empty($table))
       {
           $this->db->where($where)
               ->delete($table);
       }
    }

    public function empty_table($table_name)
    {
        if(!empty($table_name))
        {
            $sql = 'truncate table '.$table_name.';';
            $this->db->query($sql);
        }
    }

    public function add_item_to_gallery($table_name,$item_name = '' ,$galleries_id = '')
    {
        $table_name = (empty($table_name)) ? 'gallery' : $table_name;
        if(!empty($item_name))
        {
            if(!empty($galleries_id)){
                $this->db->set('galleries_id',$galleries_id);
            }
            $this->db->set('user_id',$this->session->userdata('user_id'))
                ->set('picture_name',$item_name)
                ->set('posted_at','NOW()',false)
                ->set('type','background_image')
                ->insert($table_name);

            return "";
        }
    }

    public function del_gallery_item($table = 'gallery',$where = array())
    {
        $table = (empty($table)) ? 'gallery' : $table;
        $this->db->where($where)
            ->delete($table);

        return "";
    }

}
