<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Penggajian_M','modelPenggajian',true);
		$this->load->helper('url','form');
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
		
	}

	

	
	

	
} //END OF CLASS
