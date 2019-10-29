<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gapok extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Gapok_M','modelGapok',true);
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
		$title = 'Data Gaji Pegawai ';
		$konten = 'admin_view/gapok/gapok_view';
		$dataGaji = $this->modelGapok->getAll();	
		$this->load->view('template_admin',compact('konten','title','dataGaji')); 
		
	}

	public function create()
	{
		if(!$_POST)
		{
			$title = 'Form Data Gaji Karyawan';
			$konten = 'admin_view/gapok/gapok_form';
			$pilihDepartemen = $this->modelGapok->selectdepartemen();
			$pilihJabatan =  $this->modelGapok->selectJabatan();
			$pilihDivisi =  $this->modelGapok->selectDivisi();
			$pilihCabang =  $this->modelGapok->selectCabang();
			$pilihNama = $this->modelGapok->selectNama();
		//	$pilihPtkp= $this->modelGapok->selectPtkp();
			$this->load->view('template_admin',compact('title','konten','pilihDepartemen','pilihCabang','pilihDivisi','pilihJabatan','pilihNama'));

		} else {

			$this->form_validation->set_rules('emp_no','emp_no','required');
			$this->form_validation->set_rules('id_departemen','departemen','required');
			$this->form_validation->set_rules('id_divisi','divisi','required');
			$this->form_validation->set_rules('id_cabang','cabang','required');
			$this->form_validation->set_rules('id_jabatan','jabatan','required');
			$this->form_validation->set_rules('gapok','gapok','required|numeric');
			$this->form_validation->set_rules('uang_makan','uang makan','required|numeric');
			//$this->form_validation->set_rules('gaji_harian','gaji harian','required|numeric');
		//	$this->form_validation->set_rules('id_ptkp','id_ptkp','required');
			$this->form_validation->set_error_delimiters('<p class ="text-red">');

			if($this->form_validation->run()){
				$data = array(
					'emp_no'=>$this->input->post('emp_no',true),
					'id_departemen'=>$this->input->post('id_departemen',true),
					'id_divisi'=>$this->input->post('id_divisi',true),
					'id_cabang'=>$this->input->post('id_cabang',true),
					'id_jabatan'=>$this->input->post('id_jabatan',true),
					'gapok'=>$this->input->post('gapok',true),
					'uang_makan'=>$this->input->post('uang_makan',true),
				//	'gaji_harian'=>$this->input->post('gaji_harian',true),
				//	'id_ptkp'=>$this->input->post('id_ptkp',true),
				);
				$this->modelGapok->buat($data);
				$this->session->set_flashdata('dialogbox','Data Berhasil Di Tambahkan');
				redirect('admin/gapok/index');
			} else {

				echo validation_errors();
			}
			

		}
	} // END OF FUNCTION CREATE 

	public function update($id = null)
	{
		
			$title = 'Form Update Gaji Karyawan';
			$konten = 'admin_view/gapok/gapok_update';
			$dataId = $this->modelGapok->getId($id);
			$pilihDepartemen = $this->modelGapok->selectdepartemen();
			$pilihJabatan =  $this->modelGapok->selectJabatan();
			$pilihDivisi =  $this->modelGapok->selectDivisi();
			$pilihCabang =  $this->modelGapok->selectCabang();
			$pilihNama = $this->modelGapok->selectNama();
			$dataGaji = $this->modelGapok->getDataGaji();
			$this->load->view('template_admin',compact('title','konten','pilihDepartemen','pilihCabang','pilihDivisi','pilihJabatan','pilihNama','dataGaji','dataId'));

		

			$this->form_validation->set_rules('id_karyawan','id_karyawan','required');
			$this->form_validation->set_rules('id_departemen','departemen','required');
			$this->form_validation->set_rules('id_divisi','divisi','required');
			$this->form_validation->set_rules('id_cabang','cabang','required');
			$this->form_validation->set_rules('id_jabatan','jabatan','required');
			$this->form_validation->set_rules('gapok','gapok','required|numeric');
			$this->form_validation->set_rules('uang_makan','uang makan','required|numeric');
		//	$this->form_validation->set_rules('gaji_harian','gaji harian','required|numeric');
			$this->form_validation->set_error_delimiters('<p class ="text-red">');

			if($this->form_validation->run()){
				$data = array(
					'id_karyawan'=>$this->input->post('id_karyawan',true),
					'id_departemen'=>$this->input->post('id_departemen',true),
					'id_divisi'=>$this->input->post('id_divisi',true),
					'id_cabang'=>$this->input->post('id_cabang',true),
					'id_jabatan'=>$this->input->post('id_jabatan',true),
					'gapok'=>$this->input->post('gapok',true),
					'uang_makan'=>$this->input->post('uang_makan',true),
					'gaji_harian'=>$this->input->post('gaji_harian',true),
				);
				$this->modelGapok->ubah($id,$data);
				$this->session->set_flashdata('dialogbox','Data Berhasil Di Tambahkan');
				redirect('admin/gapok/index');
			} else {

				echo validation_errors();
			}

	}


}// END OF CLASS GAPOK 
