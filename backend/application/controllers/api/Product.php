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

		$this->load->model('product_model');
		$this->load->library('form_validation');
		$this->load->config('validation_rules', TRUE);
	}

	public function get()
	{

		$products = $this->product_model->get_products();

		if(!$products)
		{
			$this->response(['status' => TRUE, 'message' => 'no product found.', 'data' => [] ], 200);
		}

		$this->response(['status' => TRUE, 'message' => 'success', 'data' => $products ], 200);
			


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


			if(!isset($_FILES['myfile']['name'][0]))
		 	{
		 		$this->response(['status' => FALSE, 'error' => 'file cannot be empty.'], 422);
		 	}
		 	else
		 	{

		 		$total_files = count($_FILES['myfile']['name']);

		 		$files = $_FILES;

		 		$this->load->library('upload');

		 		for($i = 0; $i < $total_files; $i++)
		 		{

		 			$_FILES['myfile']['name']= $files['myfile']['name'][$i];
 			        $_FILES['myfile']['type']= $files['myfile']['type'][$i];
 			        $_FILES['myfile']['tmp_name']= $files['myfile']['tmp_name'][$i];
 			        $_FILES['myfile']['error']= $files['myfile']['error'][$i];
 			        $_FILES['myfile']['size']= $files['myfile']['size'][$i]; 

			 		$config['upload_path']          = './uploads/';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048000;
	                $config['max_width']            = 1024;
	                $config['max_height']           = 768;

	                $this->upload->initialize($config);

                    if ( ! $this->upload->do_upload('myfile'))
    	            {
                    	
                    	$error = array('error' => $this->upload->display_errors('',''));
                    	$this->response(['status' => FALSE, 'error' => $error ], 422);
                      
    	            }
    	            else
    	            {
    	                $uploaded_file_data = $this->upload->data();
    	            	$user_data['image'] = 'uploads/'.$uploaded_file_data['file_name'];	                
    	            }

		 		}

		 	}


		 	$user_data['user_id'] = 1;
			if(!$this->product_model->add_product($user_data))
			{
				$this->response(['status' => FALSE, 'error' => 'some internal error occured'], 500);
			}



			$this->response(['status' => TRUE, 'message' => 'success', 'data' => "product added successfully."], 200);
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