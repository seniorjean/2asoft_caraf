	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stripe_model extends CI_Model {

	public function check_mail($table,$email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get($table);
		if ($query->num_rows() > 0)
		{
          return true;
        }
        else
        {
          return false;
        }
	}

	public function check_username($table,$username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get($table);
		if ($query->num_rows() > 0)
		{
          return true;
        }
        else
        {
          return false;
        }
	}
	public function user_cotisation_paye($user_email)
	{

		$this->db->select('*')
			->from('statsouscription')
			->where('email',$user_email);
		$query = $this->db->get()->result();
		return $query;
		/*$this->db->where('user_id', '135');
		$query = $this->db->get('orders');
		if ($query->num_rows() > 0)
		{
			return $query;
		}*/
	}





	public function insert_paiement($user_id,$name,$email,$card_num,$card_cvc,$card_exp_month,$card_exp_year,$itemName,$itemNumber,
									$itemPrice,$currency,$amount,$balance_transaction,$status,$date)
	{
echo "ooo";
		/*//$sql = "INSERT INTO orders(id_activity,id_cont) VALUES (".implode(',',$elements)."); ";*/
		$sql = "INSERT INTO orders(user_id,name,email,card_num,card_cvc,card_exp_month,card_exp_year,item_name,item_number,item_price,item_price_currency,
paid_amount,paid_amount_currency,txn_id,payment_status)
 VALUES('".$user_id."','".$name."','".$email."','".$card_num."','".$card_cvc."','".$card_exp_month."','".$card_exp_year."','".$itemName."','".$itemNumber."',
 '".$itemPrice."','".$currency."','".$amount."','".$currency."','".$balance_transaction."','".$status."')";
		//$insert = $this->db->query($sql);

		if (!$this->db->query($sql)) {
			echo "FALSE";
		}
		else {
			echo "TRUE";
		}
		/*echo $this->db->last_query();
		$query = $this->db->insert_oders($table, $data);
		return $this->db->query($query);*/
	}

}

/* End of file Register_moded.php */
/* Location: ./application/models/Register_moded.php */