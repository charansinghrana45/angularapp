<?php defined('BASEPATH') or die("no direct access allowed.");


class Test extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->model('test_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		

		$data = [];

		$page = $this->uri->segment(4);

		$per_page = 2;

		$products = $this->test_model->get_products($page, $per_page);

		if($products)
		{
			$data['products'] = $products;
		}
		else
		{
			$data['products'] = [];
		}

		//set paging configuration
		$config['base_url'] = base_url('test/index/page/');
		
		$config['total_rows'] = $this->test_model->get_products_count();
		$config['use_page_numbers'] = TRUE;
		//$config['num_links'] = $this->test_model->get_products_count();
		$config['per_page'] = $per_page;
		$config['uri_segment'] = 4;
		
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tagl_close'] = "</li>";

		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tagl_close'] = "</li>";


		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['attributes'] = array('class' => 'page-link');


		$this->pagination->initialize($config);

		
		$this->load->view('test_index', ['data' => $data]);

	}
}