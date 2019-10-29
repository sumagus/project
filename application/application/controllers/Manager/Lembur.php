<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lembur_M','modelLembur',true);
		$this->load->helper('url','form');
	}

	
	public function index()
	{
		$dataLembur =$this->modelLembur->getAll();
		$konten = 'admin/lembur/lembur_view';
		$this->load->view('template',
		compact ('konten',
				'dataLembur'
				));
	}

	public function inputLembur()
	{	
		$konten ='admin/lembur/lembur_form';
		$this->load->view('template',compact('konten'));
	}
}
