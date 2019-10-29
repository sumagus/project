<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Cabang_M','modelCabang',true);
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
		$title ='Cabang';
		$allData = $this->modelCabang->getAll(); 
		$konten = 'admin_view/perusahaan/Cabang';
		$this->load->view('Template_Admin',compact('konten','allData','title'));
	}

	public function create()
	{
			
		$this->form_validation->set_rules('id_cabang','id_cabang','required|is_unique[cabang.id_cabang]');
		$this->form_validation->set_rules('nama_cabang','nama_cabang','required');	
		$this->form_validation->set_rules('alamat_cabang','alamat_cabang','required|trim');
		$this->form_validation->set_rules('kota','kota','required|trim');
		$this->form_validation->set_error_delimiters('<p class="text-red">');
		if($this->form_validation->run() == false )
		{
			$title = 'Create Cabang';
			$konten = 'admin_view/perusahaan/formcabang';
			$form_action = 'admin/cabang/create';
			$this->session->set_flashdata('dialogbox','error');
			$this->load->view('Template_Admin',compact('konten','form_action','title'));
		} else {

			$data = array(
				'id_cabang'=>$this->input->post('id_cabang',true),
				'nama_cabang'=>$this->input->post('nama_cabang',true),
				'alamat_cabang'=>$this->input->post('alamat_cabang',true),
				'kota'=>$this->input->post('kota',true),
			);
			$this->load->model('cabang_M');
			$this->cabang_M->buat($data);
			$this->session->set_flashdata('dialogbox','Cabang berhasil di buat');
			redirect('Admin/Cabang/Index');
		}
	}

	public function update($id = null )
	{
		
		if($this->modelCabang->validasiUpdate() == false)
		{
			$title = 'Update Cabang';
			$dataId = $this->modelCabang->getBy($id);
			$konten ='admin_view/perusahaan/updateCabang';
			$form_action ='admin/cabang/update/'.$id;
			$this->load->view('Template_Admin',compact('dataId','konten','form_action','title'));

		} else {
			$data = array(
				'id_cabang'=> $this->input->post('id_cabang',true),
				'nama_cabang'=> $this->input->post('nama_cabang',true),
				'alamat_cabang'=>$this->input->post('alamat_cabang',true),
				'kota'=> $this->input->post('kota',true)
				
			);
			 $this->modelCabang->ubah($id,$data);
			 $this->session->set_flashdata('dialogbox',' data berhasil di ubah ');
			 redirect('Admin/Cabang');
		}
	}

	public function delete($id)
	{
		$delData = $this->modelCabang->getBy($id);
		if($delData == false)
		{
		echo "Data Tidak ditemukan";
		} 
		$this->modelCabang->hapus($id,$delData);
		redirect('Admin/Cabang/Index');	
	}


}
