<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Auther : Salman Iqbal
* IDE    : Sublime
* Date   : 2/5/2017
*/
class Common_model extends CI_Model
{
	public function add($table,$data)
	{
		$query = $this->db->insert($table,$data);
		return TRUE;
	}

	public function select($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_3_p_activit($cat,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();

	}
	public function alaune_text($cat,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();

	}

	public function page($cat,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('page', $cat);
		$this->db->order_by('creation_date','desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();

	}
	public function projets($cat,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();

	}

	public function projets_by_id($id,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		$this->db->order_by('creation_date','desc');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->row();

	}



	public function alaune_liste($table)
	{
		$query = $this->db->query( "SELECT  a.title as titre_cat, a.cat, b.*  from categories a , article b WHERE b.cat = a.id  and a.cat!=15 GROUP BY a.id ");
		/*$this->db->select('*');
		$this->db->from($table);
		$this->db->where('cat!=', 100);
		$this->db->order_by('cat','asc');
		$this->db->limit(4);
		$query = $this->db->get();*/
		return $query->result();

	}


	public function update_data($id,$table)
	{
		$this->db->where($id);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function update($id,$data,$table)
	{
		if (empty($id)) return FALSE;

		$this->db->update($table, $data, array('id' => $id));

		return TRUE;
	}




	public function add_page($table,$data)
	{
		//if (empty($id)) return FALSE;

		$query = $this->db->insert($table,$data);
		return TRUE;
	}
	public function delete($id,$table)
	{
		$this->db->where($id);
		$this->db->delete($table);
		return TRUE;
	}
}