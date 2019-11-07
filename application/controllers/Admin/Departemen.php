<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Departemen_M','modelDepartemen',true);
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
		$title='Departemen';
		$allData = $this->modelDepartemen->getAll(); 
		$konten = 'Admin_View/Perusahaan/Departemen';	
		if(!$_POST)
		{ $this->load->view('Template_Admin',compact('konten','allData','title')); }
		else {
			$this->create();
		}
	}

	public function create()
	{
			
		$this->form_validation->set_rules('id_departemen','ID','required|is_unique[departemen.id_departemen]');
		$this->form_validation->set_rules('nama_departemen','Nama Departemen','required');	
		$this->form_validation->set_error_delimiters('<p class="text-red">');
		if($this->form_validation->run() == false )
		{
			$title = 'Create Departemen';
			$konten = 'Admin_View/Perusahaan/FormDepartemen';
			$form_action = 'Admin/Departemen/create';
			$this->session->set_flashdata('dialogbox','Tidak Berhasil Memasukan Atau Mengupdate Data, Silahkan Periksa Kembali');
			$this->load->view('Template_Admin',compact('konten','form_action','title'));
		} else {

			$data = array(
				'id_departemen'=>$this->input->post('id_departemen',true),
				'nama_departemen'=>$this->input->post('nama_departemen',true),
			);
			$this->load->model('Departemen_M');
			$this->Departemen_M->buat($data);
			$this->session->set_flashdata('dialogbox','Data Berhasil di buat');
			redirect('Admin/Departemen/');
		}
	}

	public function update($id = null )
	{
		
		if($this->modelDepartemen->validasiUpdate() == false)
		{
			$title = 'Update Departemen';
			$dataId = $this->modelDepartemen->getBy($id);
			$konten ='Admin_View/Perusahaan/UpdateDepartemen';
			$form_action ='Admin/Departemen/update/'.$id;
			$this->load->view('Template_Admin',compact('dataId','konten','form_action','title'));

		} else {
			$data = array(
				'id_departemen'=> $this->input->post('id_departemen'),
				'nama_departemen'=> $this->input->post('nama_departemen'),
				
			);
			 $this->modelDepartemen->ubah($id,$data);
			 $this->session->set_flashdata('dialogbox',' data berhasil di ubah ');
			 redirect('Admin/Departemen');
		}


	}

	public function delete($id)
	{
		$delData = $this->modelDepartemen->getBy($id);
		if($delData == false)
		{
		echo "Data Tidak ditemukan";
		} 
		$this->modelDepartemen->hapus($id,$data);
		redirect('Admin/Departemen/Index');	
	}

	public function search()
	{
		$this->form_validation->set_rules('query','query','required');
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		if($this->form_validation->run() )
		{
			$query = $this->input->post('query');
			$allData = $this->modelDepartemen->serchData($query);
			$this->load->view('Template_Admin',compact('query','allData'));
		}
		else
		{
			return $this->index();
		}
	}
}
