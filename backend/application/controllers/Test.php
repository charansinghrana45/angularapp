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

	public function token()
	{

		//to generate token php7 option1
		echo $token = bin2hex(random_bytes(16));


		echo "<br />";
		//to generate token php7 option2
		echo $this->getToken(64);
	}

	public function getToken($length) 
	{
	     $token = "";
	     $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	     $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
	     $codeAlphabet.= "0123456789";
	     $max = strlen($codeAlphabet);// edited
	     $codeAlphabet = str_split($codeAlphabet);

	    for ($i=0; $i < $length; $i++) {
	       $token .= $codeAlphabet[random_int(0, $max-1)];
	    }

	    return $token;
	}

	//to generate token php version < php 7

	// function crypto_rand_secure($min, $max)
	// {
	//     $range = $max - $min;
	//     if ($range < 1) return $min; // not so random...
	//     $log = ceil(log($range, 2));
	//     $bytes = (int) ($log / 8) + 1; // length in bytes
	//     $bits = (int) $log + 1; // length in bits
	//     $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
	//     do {
	//         $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
	//         $rnd = $rnd & $filter; // discard irrelevant bits
	//     } while ($rnd > $range);
	//     return $min + $rnd;
	// }

	// function getToken($length)
	// {
	//     $token = "";
	//     $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//     $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
	//     $codeAlphabet.= "0123456789";
	//     $max = strlen($codeAlphabet); // edited

	//     for ($i=0; $i < $length; $i++) {
	//         $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
	//     }

	//     return $token;
	// }


	//to generate token php verison < php7


}