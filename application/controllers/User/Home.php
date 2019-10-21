<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$konten = 'home';
		$username = $this->session->userdata('username');
		$email = $this->session->userdata('level');
		$this->load->view('template',compact('konten','username','email'));
	}
}
