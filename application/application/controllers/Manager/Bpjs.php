<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('bpjs_M','modelbpjs',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelbpjs->getAll(); 
		$konten = 'admin/bpjs/bpjs_view';;
		$this->load->view('template',compact('konten','allData'));
	}

	public function set()
	{
		$konten ='admin/bpjs/bpjs_masterform';
		$this->load->view('template',
					compact('konten'));
	}

	public function generate()
	{
		$konten ='admin/bpjs/bpjs_form';
		$this->load->view('template',
					compact('konten'));
	}
}
