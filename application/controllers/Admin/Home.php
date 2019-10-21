<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session','form_validation');
		if(!$this->session->userdata('username','level'))
		{
			redirect('login');
		} else
		{
			$username = $this->session->userdata('username');
			$level = $this->session->userdata('level');
		}
	}
	public function index()
	{
		if(!$this->session->userdata('username','level'))
		{
			redirect('login');
		} else {

		$username = $this->session->userdata('username');
		$title = 'Dashboard';
		$konten = 'admin_view/home';
		$this->load->view('template_admin',compact('konten','username','title'));
		}// end of function if session 
	
	}// end of function index
}
