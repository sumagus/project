<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Divisi_M','modelDivisi',true);
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
		$title = 'Divisi';
		$allData = $this->modelDivisi->getAll(); 
		$konten = 'admin_view/perusahaan/Divisi';	
	
		$this->load->view('Template_Admin',compact('konten','allData','title')); 
		
	}

	public function create()
	{
			
		$this->form_validation->set_rules('id_Divisi','ID Divisi','required|is_unique[Divisi.id_Divisi]');
		$this->form_validation->set_rules('nama_divisi','nama_Divisi','required');	
		$this->form_validation->set_error_delimiters('<p class="text-red">');
		if($this->form_validation->run() == false )
		{
			$title = 'Create Divisi';
			$konten = 'admin_view/perusahaan/formDivisi';
			$form_action = 'Admin/Divisi/create';
			$this->session->set_flashdata('dialogbox','error');
			$this->load->view('Template_Admin',compact('konten','form_action','title'));
		} else {

			$data = array(
				'id_Divisi'=>$this->input->post('id_Divisi'),
				'nama_Divisi'=>$this->input->post('nama_Divisi'),
			);
			$this->load->model('Divisi_M');
			$this->Divisi_M->buat($data);
			$this->session->set_flashdata('dialogbox','data berhasil di buat');
			redirect('Admin/Divisi/index');
		}
	}

	public function update($id = null )
	{
		
		if($this->modelDivisi->validasiUpdate() == false)
		{
			$title='Update Divisi';
			$dataId = $this->modelDivisi->getBy($id);
			$konten ='admin_view/perusahaan/updateDivisi';
			$form_action ='Admin/Divisi/Update/'.$id;
			$this->load->view('Template_Admin',compact('dataId','konten','form_action','title'));

		} else {
			$data = array(
				'id_divisi'=> $this->input->post('id_divisi'),
				'nama_divisi'=> $this->input->post('nama_divisi'),
				
			);
			 $this->modelDivisi->ubah($id,$data);
			 $this->session->set_flashdata('dialogbox',' data berhasil di ubah ');
			 redirect('Admin/Divisi');
		}

	}

	public function delete($id)
	{
		$delData = $this->modelDivisi->getBy($id);
		if($delData == false)
		{
		echo "Data Tidak ditemukan";
		} 
		$this->modelDivisi->hapus($id,$delData);
		redirect('Admin/Divisi/index');	
	}
}
