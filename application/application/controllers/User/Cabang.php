<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Cabang_M','modelCabang',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelCabang->getAll(); 
		$konten = 'admin/perusahaan/Cabang';
		$this->load->view('template',compact('konten','allData'));
	}
}
