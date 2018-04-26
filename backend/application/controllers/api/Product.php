<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

//		$this->load->model('product');
		$this->load->library('form_validation');
		$this->load->config('validation_rules', TRUE);
	}

	public function get()
	{

		$user_data = $this->input->post();

		$this->form_validation->set_error_delimiters('','');

		$this->form_validation->set_data($user_data);
		
		$this->form_validation->set_rules($this->config->item('upload_image', 'validation_rules'));


		if($this->form_validation->run() === FALSE)
		{
			$this->response(['status' => FALSE, 'error' => $this->form_validation->error_array()], 422);
		}
		else
		{
			if(!isset($_FILES['myfile']['name']))
			$this->response(['status' => FALSE, 'error' => 'file is required.'], 422);


			$this->response(['status' => TRUE, 'message' => 'success', 'data'], 200);
		}

	}

	public function add()
	{

		$user_data = $this->input->post();

		$this->form_validation->set_error_delimiters('','');

		$this->form_validation->set_data($user_data);
		
		$this->form_validation->set_rules($this->config->item('product_add', 'validation_rules'));


		if($this->form_validation->run() === FALSE)
		{
			$this->response(['status' => FALSE, 'error' => $this->form_validation->error_array()], 422);
		}
		else
		{
			
			$this->response(['status' => TRUE, 'message' => 'success', 'data' => $user_data['category']], 200);
		}

	}

	public function response($response = '', $code = 200) 
	{

		$this->output
		        ->set_status_header($code)
		        ->set_content_type('application/json', 'utf-8')
		        ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
		        ->set_header('Access-Control-Allow-Origin: http://localhost:4200')
		        ->set_header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token , Authorization')
		        ->set_header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS')
		        ->_display();
		exit;
	}

}