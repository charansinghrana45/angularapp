<?php defined('BASEPATH') or die('no direct script access allowed');

class Test_model extends CI_Model
{

	public function get_products($page = 0, $per_page = 2)
	{

		$this->db->select('p.*, c.category_name')
				->from('products as p')
				->join('categories as c', 'p.category_id = c.id');

		if($page > 1)
		{
			$limit = $page * ($per_page - 1);
		}
		else
		{
			$limit = 0;
		}

		$this->db->limit($per_page, $limit);
		

		$query = $this->db->get();

		if($query->num_rows() > 0)
		{

			return $query->result_object();
		}

		return FALSE;

	}

	public function get_products_count()
	{

		$query = $this->db->select('count(*) as total')
				->from('products as p')
				->join('categories as c', 'p.category_id = c.id')
				->get();

		if($query->num_rows() > 0)
		{

			$result = $query->row_array();

			return $result['total'];
		}

		return 0;

	}

}