<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('user');
	}

	public function login() 
	{
		
		$requestMethod = $this->input->server('REQUEST_METHOD');


		if(strtoupper($requestMethod) == 'POST')
		{

			$email = $this->input->input_stream('email', true);
			$password = $this->input->input_stream('password', true);	

			if($this->user->validate_login() == TRUE)
			{
				$data = ['email' => $email, 'id' => 1];

				$this->output->set_output(json_encode(['status' => TRUE, 'code'=> 200, 'data' => $data]))
				->set_header('content-type : application/json')
				->set_header('Access-Control-Allow-Origin: http://localhost:4200')
				->set_header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token , Authorization')
				->set_header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');	
			}
			else
			{
				$this->output->set_output(json_encode(['status' => TRUE, 'code'=> 200, 'data' => 'email or password is not valid.']))
				->set_header('content-type : application/json')
				->set_header('Access-Control-Allow-Origin: http://localhost:4200')
				->set_header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token , Authorization')
				->set_header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');		
			}
			
		}
		else
		{
			if($requestMethod == 'OPTIONS')
			{
				$this->output->set_output(json_encode(['status' => TRUE, 'code'=> 200, 'data' => ""]))
				->set_header('content-type : application/json')
				->set_header('Access-Control-Allow-Origin: http://localhost:4200')
				->set_header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token , Authorization')
				->set_header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');		
			}
			else
			{
				$this->output->set_output(json_encode(['status' => TRUE, 'code'=> 405, 'data' => "Method not allowed"]))
				->set_header('content-type : application/json')
				->set_header('Access-Control-Allow-Origin: http://localhost:4200')
				->set_header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token , Authorization')
				->set_header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');			
			}
		}
		
	}
}