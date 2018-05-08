<?php defined('BASEPATH') or die('no direct script access allowed');

class Data_table_model extends CI_Model
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

	public function get_all_products($search = null, $start = null, $limit = null, $order_by_column = null, $order_by_value = null)
	{

		$this->db->select('p.id, p.product_name, p.product_description, p.product_image, c.category_name')
				->from('products as p')
				->join('categories as c', 'p.category_id = c.id');

		if($search)
		{
			$this->db->like('p.product_name', $search);
		}

		if($order_by_column == 0)
		{
			$this->db->order_by('p.product_name', $order_by_value);
		}
	    else if($order_by_column == 3)
		{
			$this->db->order_by('c.category_name', $order_by_value);
		}
		
		
		$this->db->limit($limit, $start);

	

		$query = $this->db->get();

		if($query->num_rows() > 0)
		{

			return $query->result_array();
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


	public function get_filtered_products_count($search = null)
	{

		$this->db->select('count(*) as total')
				->from('products as p')
				->join('categories as c', 'p.category_id = c.id');

		if($search)
		{
			$this->db->like('p.product_name', $search);
		}

		$query = $this->db->get();


		if($query->num_rows() > 0)
		{

			$result = $query->row_array();

			return $result['total'];
		}

		return 0;

	}

}