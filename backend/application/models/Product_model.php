<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/

class Product_model extends CI_Model
{

	public function add_product($data)
	{

		$product['product_name'] = $data['name'];
		$product['product_description'] = $data['description'];
		$product['category_id'] = $data['category'];
		$product['product_image'] = $data['image'];
		$product['created_by'] = $data['user_id'];
		$product['created_at'] = date('Y-m-d H:i:s');

		$status = $this->db->insert('products', $product);

		return $status;

	}

	public function get_products()
	{
		$query = $this->db->select("p.id, p.product_name, p.product_description, p.product_image, c.category_name")
				->from('products as p')
				->join('categories as c', 'p.category_id = c.id')
				->get();

		if($query->num_rows() > 0)		
		{
			return $query->result_array();
		}

		return FALSE;

	}

}