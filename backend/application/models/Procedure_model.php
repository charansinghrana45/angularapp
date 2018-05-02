<?php defined('BASEPATH') or die('no direct access allowed.');


/**
* 
*/
class Procedure_model extends CI_Model
{
	
	public function get_all_products()
	{

		$this->db->trans_start();
		$query = $this->db->query("set @count = 0;");
		$query = $this->db->query("set @inc = 1;");
		$query = $this->db->query("call set_counter(@count,1);");
		$query = $this->db->query("call set_counter(@count,1);");
		$this->db->trans_complete();

		$query = $this->db->query("select @count as final_count");

		if ($this->db->trans_status() === TRUE)
		{
		       if($query->num_rows() > 0)
		       		{
		       			echo "<pre>";
		       			
		       			print_r($query->result_array());
		       			exit;
		       		}
		}


		return FALSE;
	}

}