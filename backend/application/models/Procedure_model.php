<?php defined('BASEPATH') or die('no direct access allowed.');


/**
* 
*/
class Procedure_model extends CI_Model
{
	
	public function get_all_products()
	{

		
	   if(mysqli_multi_query($this->db->conn_id,"CALL `get_data`();"))
		{

		  do {

           

			$result = mysqli_store_result($this->db->conn_id);

			
		
			while($row = $result->fetch_assoc())
            {
			echo "<pre>";
			
			print_r($row);
			}
		    

		
			var_dump(mysqli_next_result($this->db->conn_id));
			mysqli_free_result($result);	

		}while(mysqli_more_results($this->db->conn_id));

		}	

            exit;

		return FALSE;
	}

}