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

	public function update_data($id,$table)
	{
		$this->db->where($id);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function getUserProfile($id)
	{
		$this->db->where($id);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function getMemberProfile($id)
	{

		return $this->db->select('* , villages.name as village_name , communes.name as commune_name')
						->join('user_details' , 'users.id = user_details.user_id')
						->join('associations' , 'associations.id = user_details.association_id','left')
						->join('villages' , 	'villages.id = associations.village','left')
						->join('communes' , 	'communes.id = villages.commune_id','left')
						->where(['users.id'=>$id])
						->get('users')->row();
	}

	public function update($id,$data,$table)
	{
		if (empty($id)) return FALSE;

		$this->db->update($table, $data, array('id' => $id));

		return TRUE;
	}


	public function update_article_image($id,$image,$table)
	{
		if (empty($id)) return FALSE;


		$sql = "UPDATE $table SET image='$image' WHERE id= $id";
		$this->db->query($sql);

		return TRUE;
	}





	public function t_article($table)
	{

		$this->db->select('*');
		$this->db->from($table);
		//$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();

	}

	public function t_article_alim($cat,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();

	}
	



	public function t_page($table)
	{

		$this->db->select('*');
		$this->db->from($table);
		//$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();

	}

	public function t_page_by_cat($cat,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();

	}
	public function t_categorie_by_cat($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		//$this->db->where('cat', $cat);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}



	public function t_page_by_id($id,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->row();

	}



	public function t_article_by_id($id,$table)
	{

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		$this->db->order_by('creation_date','desc');
		//$this->db->limit(3);
		$query = $this->db->get();
		return $query->row();

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
