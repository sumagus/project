<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('bpjs_M','modelBpjs',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelBpjs->getAll(); 
		$konten = 'admin_view/bpjs/bpjs_view';
		$title = 'Data Bpjs Karyawan';
		$this->load->view('template_admin',compact('konten','allData','title'));
	}

	public function create()
	{
		$title ='Create BPJS';
		$konten ='admin_view/bpjs/bpjs_form';
		$this->load->view('template_admin',
				compact('konten','title'));
		if(!$_POST)
		{
			$input = $this->modelBpjs->defaultForm();
		} else {
			$this->form_validation->set_rules('jenis','jenis','required|trim');
			$this->form_validation->set_rules('nama','nama','required|trim');
			$this->form_validation->set_rules('persentase','persentase','required|trim');
			$this->form_validation->set_rules('perusahaan','perusahaan','required|trim');
			$this->form_validation->set_rules('pegawai','pegawai','required|trim');
			$this->form_validation->set_error_delimiters('<p class="text-red">');

			if($this->form_validation->run())
			{
				$data = array(
					'jenis'=>$this->input->post('jenis',true),
					'nama'=>$this->input->post('nama',true),
					'persentase'=>$this->input->post('persentase',true),
					'perusahaan'=>$this->input->post('perusahaan',true),
					'pegawai'=>$this->input->post('pegawai',true),

				);

				$this->modelBpjs->buat($data);
				$this->session->set_flashdata('dialogbox','Data berhasil di tambahkan');
				redirect('admin/bpjs/index');
			} else {
				echo validation_errors();
			}

		} 

	}// End Of Class Create BPJS

	public function update($id = null)
	{
		$dataId = $this->modelBpjs->getBy($id);
		$title  = 'Update BPJS';
		$konten ='admin_view/bpjs/bpjs_update';
		$this->load->view('template_admin',
					compact('konten','title','dataId'));

		$this->form_validation->set_rules('jenis','jenis','required|trim');
		$this->form_validation->set_rules('nama','nama','required|trim');
		$this->form_validation->set_rules('persentase','persentase','required|trim');
		$this->form_validation->set_rules('perusahaan','perusahaan','required|trim');
		$this->form_validation->set_rules('pegawai','pegawai','required|trim');
		$this->form_validation->set_error_delimiters('<p class="text-red">');

		if($this->form_validation->run() == true)
		{
			$data= array(
				'jenis'=>$this->input->post('jenis',true),
				'nama'=>$this->input->post('nama',true),
				'persentase'=>$this->input->post('persentase',true),
				'perusahaan'=>$this->input->post('perusahaan',true),
				'pegawai'=>$this->input->post('pegawai',true),
			);

			$this->modelBpjs->ubah($id,$data);
			$this->session->set_flashdata('dialogbox','Data Berhasil di Ubah');
			redirect('admin/bpjs/index');
		
		}
	} //END OF FUNCTION UPDATE 

	public function delete($id)
	{
		$delData = $this->modelBpjs->getBy($id);
		if($delData == false )
		{
			echo "window.alert('Data Tidak Di Temukan') ";
			redirect('admin/bpjs/index');
		} else {
			$this->modelBpjs->hapus($id,$Deldata);
			redirect('admin/bpjs/index');
		}

	} // end of function delete 


	public function generate()
	{
		$pilihNama = $this->modelBpjs->selectNama();
		$form_action = 'admin/bpjs/generate';
		$title = 'Input Gaji Bpjs';
		$konten = 'admin_view/bpjs/form_gajibpjs';
		$this->load->view('template_admin',compact('title','konten','form_action','pilihNama'));

		$this->form_validation->set_rules('emp_no','Nama Karyawan','required|is_unique[gajibpjs.emp_no]');
		$this->form_validation->set_rules('gaji_bpjs','gaji bpjs','required|numeric');
		$this->form_validation->set_error_delimiters('<p class="text-red">');

		if($this->form_validation->run())
		{
			$data = array(

					'emp_no'=>$this->input->post('emp_no',true),
					'gaji_bpjs'=>$this->input->post('gaji_bpjs',true),
			);
			$this->modelBpjs->buatGajiBpjs($data);
			redirect('admin/bpjs/getGenerate');
			
		} else {
			echo validation_errors(); 
		}

	} // end of function generate bpjs 

	public function getGenerate()
	
	{
		$title = 'Daftar Gaji Bpjs ';
		$konten = 'admin_view/bpjs/list_generate';
		$dataGenerate = $this->modelBpjs->hitungBpjs();
		$this->load->view('template_admin',compact('title','konten','dataGenerate'));

	} // end of function generate

	public function cetak()
	{
		$title = 'Rincian Data Bpjs';
		$konten = 'admin_view/bpjs/cetak_generate';
		$dataGenerate = $this->modelBpjs->hitungBpjs();
		$this->load->view('template_admin',compact('title','konten','dataGenerate'));
	}

}
