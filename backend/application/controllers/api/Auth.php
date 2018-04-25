<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/

use \Firebase\JWT\JWT;

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('user');

		$this->load->library('form_validation');
	}

	public function login() 
	{
		
		$key = "12345";


		$requestMethod = $this->input->server('REQUEST_METHOD');


		if(strtoupper($requestMethod) == 'POST')
		{
			$user_data = json_decode($this->input->raw_input_stream, TRUE);

			$email = $user_data['email'];
			$password = $user_data['password'];	

			if($this->user->validate_login(['email' => $email, 'password' => $password]))
			{

				$token = array(
				    "iss" => base_url()."api/auth/login",
				    "aud" => "http://localhost:4200",
				    "iat" => time(),
				    "exp" => time() + 60*60,
				    "id"  => 1,
				    "email" => $email
				);

				$jwt = JWT::encode($token, $key);


				$data = ['email' => $email, 'id' => 1];

				$this->response(['status' => TRUE, 'message' => 'logged in successfully.', 'data' => $data, 'token' => $jwt], 200);
			}	
			else
			{
				$this->response(['status' => FALSE, 'error' => 'invalid login details.'], 401);
			}		
		}
		else
		{
			if($requestMethod == 'OPTIONS')
			{
				$this->response(['status' => TRUE, 'message' => '', 'data' => ''], 200);
			}
			else
			{
				$this->response(['status' => FALSE, 'error' => 'Method not allowed.'], 405);		
			}
		}
		
	}

	public  function signup()
	{

		$key = "12345";


		$requestMethod = $this->input->server('REQUEST_METHOD');


		if(strtoupper($requestMethod) == 'POST')
		{
			$user_data = json_decode($this->input->raw_input_stream, TRUE);

			$firstname = $user_data['firstname'];
			$lastname = $user_data['lastname'];
			$email = $user_data['email'];
			$password = $user_data['password'];	
			$confirm_password = $user_data['confirmPassword'];

			if($user_id = $this->user->create_user(['firstname' => $firstname, 'lastname' => $lastname,
			 'email' => $email, 'password' => $password]))
			{

				$token = array(
				    "iss" => base_url().'api/auth/signup',
				    "aud" => "http://localhost:4200",
				    "iat" => time(),
				    "exp" => time() + 60*60,
				    "id"  => $user_id,
				    "email" => $email
				);

				$jwt = JWT::encode($token, $key);


				$data = ['email' => $email, 'id' => 1];

				$this->response(['status' => TRUE, 'message' => 'sign up successfully.', 'data' => $data, 'token' => $jwt], 200);
			}	
			else
			{
				$this->response(['status' => FALSE, 'error' => 'some error occured. please try again.'], 401);
			}		
		}
		else
		{
			if($requestMethod == 'OPTIONS')
			{
				$this->response(['status' => TRUE, 'message' => '', 'data' => ''], 200);
			}
			else
			{
				$this->response(['status' => FALSE, 'error' => 'Method not allowed.'], 405);		
			}
		}
	}

	public function sendPasswordResetLink() 
	{
		$user_data = json_decode($this->input->raw_input_stream, TRUE);

		$requestMethod = $this->input->server('REQUEST_METHOD', TRUE);

		if(strtoupper($requestMethod) == 'POST')
		{
			if($this->user->validate_email($user_data['email'])) 
			{
				$this->response(['status' => TRUE, 'message' => 'email successfully sent.', 'data' => $user_data['email']], 200);
			}
			else
			{
				$this->response(['status' => FALSE, 'error' => 'Invalid email'], 401);
			}
		}
		else
		{
			if($requestMethod == 'OPTIONS')
			{
				$this->response(['status' => TRUE, 'message' => '', 'data' => ''], 200);
			}
			else
			{
				$this->response(['status' => FALSE, 'error' => 'Method not allowed.'], 405);		
			}
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