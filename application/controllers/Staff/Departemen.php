<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Departemen_M','modelDepartemen',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelDepartemen->getAll(); 
		$konten = 'admin/perusahaan/departemen';
		$this->load->view('template',compact('konten','allData'));
	}
}
