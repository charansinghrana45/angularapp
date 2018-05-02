<?php defined('BASEPATH') or die("no direct access allowed.");


class Procedure extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->model('procedure_model');
	}

	public function index()
	{
		$this->load->view('layouts/header.php');

		
		$data = [];

		if($products_count = $this->procedure_model->get_all_products())
		{
			$data['products_count'] = $products_count;
		}

		$this->load->view('procedure_index', $data);



		$this->load->view('layouts/footer.php');
	}
}