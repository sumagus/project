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

	public function cetak()
	{

		$emp_no =$this->input->get('emp_no');
		$start = $this->input->get('start');
		$end =$this->input->get('end');
		$title = 'Hitung Gaji Pegawai ';
		$konten = 'Admin_View/Gapok/Slip_Gaji';
		$gapok = $this->modelHitung->getFilterGapok($emp_no);
		$uang_makan =$this->modelHitung->getFIlterUangMakan($emp_no);
		$lembur = $this->modelHitung->getFilterLembur($emp_no,$start,$end);
		$tunjangan = $this->modelHitung->getFilterTunjangan($emp_no);
		$potongan = $this->modelHitung->getFilterPotongan($start,$end);
		$JHTperusahaan = $this->modelHitung->getJHTperusahaan();
		$JHTkaryawan =$this->modelHitung->getJHtkaryawan();
		$JKperusahaan = $this->modelHitung->getJKperusahaan();
		$JKKperusahaan = $this->modelHitung->getJKKperusahaan();
		$pilihNama = $this->modelHitung->selectNama();
		$this->load->view('template_admin',compact(
			'emp_no',
			'start',
			'end',
			'title',
			'konten',
			'gapok',
			'uang_makan',
			'lembur',
			'tunjangan',
			'potongan',
			'pilihNama',
			'JHTperusahaan',
			'JHTkaryawan',
			'JKKperusahaan',
			'JKperusahaan'));

	}

	

	



}// END OF CLASS GAPOK 
