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

		$start =$this->input->get('start');
		$end = $this->input->get('end');
		$emp_no = $this->input->get('emp_no');
		$dataLembur =$this->modelLembur->getAll($start,$end,$emp_no);
		$konten = 'admin_view/lembur/lembur_view';
		$title = 'Data Lembur Karyawan';
		$pilihNama = $this->modelLembur->selectNama();
		$this->load->view('Template_Admin',
		compact ('konten',
				'dataLembur',
				'title',
				'pilihNama',
				'start',
				'end',
				'emp_no'
				));
	}


	public function inputLembur()
	{	
		if(!$_POST)
		{
		$konten ='admin_view/lembur/lembur_form';
		$title = 'Input Data Lembur Karyawan';
		$pilihNama = $this->modelLembur->selectNama();
		$this->load->view('Template_Admin',compact('konten','title','dataId','pilihNama'));
		} else {
		if($this->modelLembur->validasi())
		{
			$data = array
			(
				'emp_no'=>$this->input->post('emp_no',true),
				'tanggal'=>date('Y-m-d',strtotime($this->input->post('tanggal',true))),
				'keterangan'=>$this->input->post('keterangan',true),
				'uang_lembur'=>$this->input->post('uang_lembur',true)

			);
			$this->modelLembur->buat($data);
			$this->session->set_flashdata('dialogbox','Data Lembur Sukses Di Tambahkan');
			redirect('Admin/Lembur/index');

		} else {
			echo validation_errors();
		}

		}
		
	} // end of class input lembur 

	public function update($id)
	{	
		if(!$_POST)
		{
		$konten ='admin_view/lembur/lembur_update';
		$title = 'Input Data Lembur Karyawan';
		$pilihNama = $this->modelLembur->selectnama();
		$this->load->view('Template_Admin',compact('konten','title','dataId','pilihNama'));
		} else {
		if($this->modelLembur->validasi())
		{
			$data = array
			(
				'id_karyawan'=>$this->input->post('id_karyawan',true),
				'tanggal'=>date('Y-m-d',strtotime($this->input->post('tanggal',true))),
				'keterangan'=>$this->input->post('keterangan',true),
				'uang_lembur'=>$this->input->post('uang_lembur',true)

			);
			$this->modelLembur->ubah($id,$data);
			$this->session->set_flashdata('dialogbox','Data Lembur Sukses Di Tambahkan');
			redirect('Admin/Lembur/index');

		} else {
			echo validation_errors();
		}

		}
		
	} // end of class update lembur 

	public function delete($id)
	{
		$delData = $this->modelLembur->getBy($id);
		if($delData == false)
		{
			echo " Data tidak Di temukan ";
		} else {
			$this->modelLembur->hapus($id,$delData);
			$this->session->set_flashdata('dialogbox','Data Telah Terhapus');
			redirect('Admin/Lembur/index');
		}
	}

}
