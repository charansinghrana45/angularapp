<?php defined('BASEPATH') or die("no direct script access allowed");

class Design extends CI_Controller
{

	public function index()
	{
		$this->load->view('design_home');
	}
	
}