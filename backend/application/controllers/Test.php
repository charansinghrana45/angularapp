<?php defined('BASEPATH') or die("no direct access allowed.");

class Test extends CI_Controller implements My_interface2
{

	use Application\traits\Mytrait;

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


	public function mail()
	{

		$this->load->library('email');

		$this->config->load('app_settings', true);

		$config = $this->config->item('mail', 'app_settings');

		$this->email->initialize($config);

		$this->email->from('charan.singh.icreon@gmail.com', 'Charan Singh Icreon');
		$this->email->to('charan.singh@icreon.com');
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test 4');
		$this->email->message('Testing email message.Testing email message.');

		//$this->email->attach(base_url().'uploads/pdf-sample.pdf', 'attachment', 'holiday.pdf');

		if($this->email->send(FALSE))
		{
			echo "sent.";
		}
		else 
		{
			echo "<pre>";
			print_r( $this->email->print_debugger(array('body')) );
			echo "</pre>";
		}

	}

	public function other()
	{
		echo "hi";
	}


	public function token_all_version()
	{

		echo $this->randomToken();
		echo "<br />";
		echo $this->salt();

	}

	//to create token
	public function randomToken($length = 32){
	    if(!isset($length) || intval($length) <= 8 ){
	      $length = 32;
	    }
	    
	    if (function_exists('random_bytes')) {
	    	random_bytes($length);
	        return bin2hex(random_bytes($length));
	    } 
	    
	    if (function_exists('openssl_random_pseudo_bytes')) {
	        return bin2hex(openssl_random_pseudo_bytes($length));
	    }
	}

	//to create salt 
	public function salt(){
	    
	    return substr(strtr(base64_encode(hex2bin($this->randomToken(32))), '+', '.'), 0, 44);
	}


	public function make_strong_password()
	{

		$password = "mygreatPassword";
		$salt = sha1(md5($password));
		$password_to_store = md5($password.$salt);

		//password to store in database
		echo $password_to_store;

		echo "<br />";
		echo $password;
		echo "<br />";

		//password to match in dtatabase
		echo md5($password.sha1(md5($password)));

	}

	public function ui()
	{
		$this->load->view('test_ui');
	}


}