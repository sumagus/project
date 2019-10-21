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
		//$start =$this->input->get('start');
		//$end = $this->input->get('end');
		$dataLembur =$this->modelLembur->getAll();
		$konten = 'admin_view/lembur/lembur_view';
		$title = 'Data Lembur Karyawan';
		$pilihNama = $this->modelLembur->selectNama();
		$this->load->view('template_admin',
		compact ('konten',
				'dataLembur',
				'title',
				'pilihNama'
				));
	}

	public function inputLembur()
	{	
		if(!$_POST)
		{
		$konten ='admin_view/lembur/lembur_form';
		$title = 'Input Data Lembur Karyawan';
		$pilihNama = $this->modelLembur->selectNama();
		$this->load->view('template_admin',compact('konten','title','dataId','pilihNama'));
		} else {
		if($this->modelLembur->validasi())
		{
			$data = array
			(
				'emp_no'=>$this->input->post('emp_no',true),
				'tanggal'=>$this->input->post('tanggal',true),
				'keterangan'=>$this->input->post('keterangan',true),
				'uang_lembur'=>$this->input->post('uang_lembur',true)

			);
			$this->modelLembur->buat($data);
			$this->session->set_flashdata('dialogbox','Data Lembur Sukses Di Tambahkan');
			redirect('admin/lembur/index');

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
		$this->load->view('template_admin',compact('konten','title','dataId','pilihNama'));
		} else {
		if($this->modelLembur->validasi())
		{
			$data = array
			(
				'id_karyawan'=>$this->input->post('id_karyawan',true),
				'tanggal'=>$this->input->post('tanggal',true),
				'keterangan'=>$this->input->post('keterangan',true),
				'uang_lembur'=>$this->input->post('uang_lembur',true)

			);
			$this->modelLembur->ubah($id,$data);
			$this->session->set_flashdata('dialogbox','Data Lembur Sukses Di Tambahkan');
			redirect('admin/lembur/index');

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
			redirect('admin/lembur/index');
		}
	}

	public function cekid()
	{
			
		$konten = 'admin_view/lembur/tes_Filter';
		$title = 'data lembur karyawan';
		$pilihNama =$this->modelLembur->selectnama();
		$dataFilter = $this->modelLembur->filterBy();
		$jumlahLembur =$this->modelLembur->jumlahLembur();
		
		$this->load->view('template_admin',compact('konten','title','pilihNama','dataFilter','jumlahLembur'));

	}


	public function formCek()
	{
		$konten = 'admin_view/lembur/form_cek';
		$title = 'Data Lembur Karyawan';
		$pilihNama = $this->modelLembur->selectnama();
		$this->load->view('template_admin',compact('konten','title','pilihNama'));
	}

	public function getFilter()
	{

			$this->form_validation->set_rules('emp_no','Nama Karyawan','required');
			$this->form_validation->set_rules('start','Tanggal Awal','required');
			$this->form_validation->set_rules('end','Tanggal Akhir','required');
			$this->form_validation->set_error_delimiters('<p class="text-red">');

			if($this->form_validation->run())
			{
				
				$id = $this->input->get('emp_no',true);
				$start = $this->input->get('start',true);
				$end = $this->input->get('end',true);

				$data = array(
					'emp_no'=>$id,
					'start'=>$start,
					'end'=>$end,
				);
				$konten = 'admin_view/lembur/tes_Filter';
				$dataFilter = $this->modelLembur->filterBy($id,$start,$end);
				$this->load->view('template_admin',compact('konten','title','pilihNama','id','start','end','dataFilter'));
			}
	}
}
