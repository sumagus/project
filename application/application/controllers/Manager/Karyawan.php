<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {


	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_M','modelKaryawan',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	
	public function index()
	{	
		$allData = $this->modelKaryawan->getall();
		$konten = 'admin/karyawan/karyawan_view';
		$this->load->view('template',compact('konten','allData'));
	}

	public function create()
	{
		
		if($this->modelKaryawan->validasi() == false)
		{		

			$pilihJabatan= $this->modelKaryawan->selectJabatan();
			$konten ='admin/karyawan/karyawan_form';
			$form_action ='karyawan/create';
			$this->load->view('template',compact('konten','form_action','pilihJabatan'));
		} else {
				$tgl_masuk = date('Y-m-d',strtotime($this->input->post('tgl_masuk')));
				$dataKaryawan = array(
				'id_karyawan'=>$this->input->post('id_karyawan',true),
				'nik'=>$this->input->post('nik',true),
				'nama'=>$this->input->post('nama',true),
				'alamat'=>$this->input->post('alamat',true),
				'tgl_masuk'=>$tgl_masuk,
				'id_jabatan'=>$this->input->post('id_jabatan',true),
				'marital_status'=>$this->input->post('marital_status',true),
			);

			$this->modelKaryawan->buatKaryawan($dataKaryawan);
			$this->session->set_flashdata('dialogbox','karyawan berhasil di tambahkan');
			redirect('karyawan');
		}
		
	}// END OF FUNCTION CREATE

	public function detail()
	{	
		$form_action ="karyawan/detail";
		$konten = 'admin/karyawan/karyawan_detail';
		$this->load->view('template',compact('konten','form_action'));
	}

	public function delete($id)
	{
		$delData= $this->modelKaryawan->getby();
		if($delData == false)
			{
			echo "Data Tidak ditemukan";
			}  
		$this->modelKaryawan->hapus($id,$delData);
		$this->session->set_flashdata('dialogbox','<script>window.alert("yakin anda ingin menghapus karyawan ?")</script>?');
				redirect('karyawan');

	}//END OF FUNCTION DELETE


}
