<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = [];

		$data['query'] = [];

		$this->lang->load('error_message_lang');

		$this->load->view('welcome_message', $data);
	}

	public function guest()
	{
		$this->load->view('welcome_guest');
	}

	public function flex()
	{
		$this->load->view('welcome_flex');
	}

	public function sidebar()
	{
		$this->load->view('welcome_sidebar');
	}

	public function animation()
	{
		$this->load->view('welcome_animation');
	}
}
