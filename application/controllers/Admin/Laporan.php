<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Hitung_M','modelHitung',true);
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

		$emp_no =$this->input->get('emp_no');
		$start = $this->input->get('start');
		$end =$this->input->get('end');
		$title = 'Hitung Gaji Pegawai ';
		$konten = 'Admin_View/Gapok/Hitung_Gaji';
		$gapok = $this->modelHitung->getGapok();
		$uang_makan =$this->modelHitung->getUangMakan();
		$lembur = $this->modelHitung->getLembur($start,$end);
		$tunjangan = $this->modelHitung->getTunjangan();
		$potongan = $this->modelHitung->getPotongan($start,$end);
		$pilihNama = $this->modelHitung->selectNama();
		$this->load->view('Template_Admin',compact('konten','title','start','end','emp_no','pilihNama','gapok','lembur','tunjangan','potongan','uang_makan')); 	
		
	}

	



}// END OF CLASS GAPOK 
