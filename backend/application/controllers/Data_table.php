<?php defined('BASEPATH') or die("no direct script access allowed");

class Data_table extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->model('data_table_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		

		$data = [];

		$page = $this->uri->segment(4);

		$per_page = 2;

		$products = $this->data_table_model->get_all_products();

		if($products)
		{
			$data['products'] = $products;
		}
		else
		{
			$data['products'] = [];
		}
		
		$this->load->view('data_table_index', ['data' => $data]);

	}

	public function get_data()
	{

		$response = [];

		$search = $this->input->get('search[value]');

		$order_by_column = $this->input->get('order[0][column]');
		$order_by_value = $this->input->get('order[0][dir]');

		$start = $this->input->get('start');
		$limit = $this->input->get('length');

		
		$products = $this->data_table_model->get_all_products($search, $start, $limit, $order_by_column, $order_by_value);

		$response["draw"] = intval($this->input->get('draw'));
		$response['recordsTotal'] = $this->data_table_model->get_products_count();	
		$response['recordsFiltered'] = $this->data_table_model->get_filtered_products_count($search);
		
		
		$response['data'] = $products;

		echo json_encode($response);

	}


}