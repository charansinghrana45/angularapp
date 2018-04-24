<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Model
{
	
	public function validate_login($data)
	{
		$query = $this->db->select('id, firstname, lastname, email')->from('users')
		->where(['email' => $data['email'], 'password' => $data['password']])
		->get();

		return $result = $query->result_array();

	}

}