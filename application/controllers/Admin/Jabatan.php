<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jabatan extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('jabatan_M','modeljabatan',true);
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
		$title ='jabatan';
		$allData = $this->modeljabatan->getAll(); 
		$konten = 'admin_view/perusahaan/jabatan';
		$this->load->view('template_admin',compact('konten','allData','title'));
	}

	public function create()
	{
			
		$this->form_validation->set_rules('id_jabatan','id_jabatan','required|is_unique[jabatan.id_jabatan]');
		$this->form_validation->set_rules('jabatan','jabatan','required');	
		$this->form_validation->set_error_delimiters('<p class="text-red">');
		if($this->form_validation->run() == false )
		{
			$title = 'Create Jabatan';
			$konten = 'admin_view/perusahaan/formjabatan';
			$form_action = 'admin/jabatan/create';
			$this->session->set_flashdata('dialogbox','error');
			$this->load->view('template_admin',compact('konten','form_action','title'));
		} else {

			$data = array(
				'id_jabatan'=>$this->input->post('id_jabatan',true),
				'jabatan'=>$this->input->post('jabatan',true),
			);
			$this->load->model('jabatan_M');
			$this->jabatan_M->buat($data);
			$this->session->set_flashdata('dialogbox','jabatan berhasil di buat');
			redirect('admin/jabatan/index');
		}
	}

	public function update($id = null )
	{
		
		if($this->modeljabatan->validasiUpdate() == false)
		{
			$title = 'Update Jabatan';
			$dataId = $this->modeljabatan->getBy($id);
			$konten ='admin_view/perusahaan/updatejabatan';
			$form_action ='admin/jabatan/update/'.$id;
			$this->load->view('template_admin',compact('dataId','konten','form_action','title'));

		} else {
			$data = array(
				'id_jabatan'=> $this->input->post('id_jabatan',true),
				'jabatan'=> $this->input->post('jabatan',true),
			);
			 $this->modeljabatan->ubah($id,$data);
			 $this->session->set_flashdata('dialogbox',' data berhasil di ubah ');
			 redirect('admin/jabatan');
		}
	}

	public function delete($id)
	{
		$delData = $this->modeljabatan->getBy($id);
		if($delData == false)
		{
		echo "Data Tidak ditemukan";
		} 
		$this->modeljabatan->hapus($id,$delData);
		redirect('admin/jabatan/index');	
	}


}
