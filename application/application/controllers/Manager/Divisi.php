<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Divisi_M','modelDivisi',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelDivisi->getAll(); 
		$konten = 'admin/perusahaan/Divisi';
		$this->load->view('template',compact('konten','allData'));
	}
}
