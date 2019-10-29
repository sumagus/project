<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Jabatan_M','modelJabatan',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelJabatan->getAll(); 
		$konten = 'admin/perusahaan/Jabatan';
		$this->load->view('template',compact('konten','allData'));
	}
}
