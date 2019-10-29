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
		$gapok = $this->modelHitung->getGapok($emp_no);
		$gapok_bpjs =$this->modelHitung->getGajiBpjs($emp_no);
		$uang_makan =$this->modelHitung->getUangMakan();
		$lembur = $this->modelHitung->getLembur($start,$end,$emp_no);
		$tunjangan = $this->modelHitung->getTunjangan($emp_no);
		$potongan = $this->modelHitung->getPotongan($start,$end);
		$JHTperusahaan = $this->modelHitung->getJHTperusahaan();
		$JHTkaryawan =$this->modelHitung->getJHtkaryawan();
		$JKperusahaan = $this->modelHitung->getJKperusahaan();
		$JKKperusahaan = $this->modelHitung->getJKKperusahaan();
		$pilihNama = $this->modelHitung->selectNama();
		
		$this->load->view('Template_Admin',compact( 'konten',
													'title',		
													'start',
													'end',
													'emp_no',
													'pilihNama',
													'gapok',
													'lembur',
													'tunjangan',
													'potongan',
													'uang_makan',
													'gapok_bpjs',
													'JHTperusahaan',
													'JHTkaryawan',
													'JKKperusahaan',
													'JKperusahaan'
												)); 	
		
	}

	public function cetak($id)
	{

		$emp_no =$this->input->get('emp_no');
		$start = $this->input->get('start');
		$end =$this->input->get('end');
		$title = 'Hitung Gaji Pegawai ';
		$konten = 'Admin_View/Gapok/Hitung_Gaji';
		$gapok = $this->modelHitung->getGapok($id);
		$uang_makan =$this->modelHitung->getUangMakan($id);
		$lembur = $this->modelHitung->getLembur($start,$end);
		$tunjangan = $this->modelHitung->getTunjangan($id);
		$potongan = $this->modelHitung->getPotongan($start,$end);
		$pilihNama = $this->modelHitung->selectNama();
		$this->load->view('template_admin',compact('emp_no','start','end','title','konten','gapok','uang_makan','lembur','tunjangan','potongan','pilihNama'));


	}

	

	



}// END OF CLASS GAPOK 
