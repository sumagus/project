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

	public function index($id ='' )
	{		
		$allData = $this->modelBpjs->getAll(); 
		$konten = 'Admin_View/Bpjs/Bpjs_View';
		$title = 'Data Bpjs Karyawan';
		$BpjsPerusahaan = $this->modelBpjs->getBpjs($id);
		$this->load->view('Template_Admin',compact('konten','allData','title'));
		echo var_dump($BpjsPerusahaan);
	}

	public function create()
	{
		$title ='Create BPJS';
		$konten ='Admin_View/Bpjs/Bpjs_Form';
		$this->load->view('Template_Admin',
				compact('konten','title'));
		if(!$_POST)
		{
			$input = $this->modelBpjs->defaultForm();
		} else {
			$this->form_validation->set_rules('jenis','Jenis BPJS','required|trim');
			$this->form_validation->set_rules('nama','Nama BPJS','required|trim');
			$this->form_validation->set_rules('persentase','Total Persentase','required|trim');
			$this->form_validation->set_rules('perusahaan','Persentase Untuk Perusahaan','required|trim');
			$this->form_validation->set_rules('pegawai','Persentase Untuk Pegawai','required|trim');
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
				redirect('Admin/Bpjs/index');
			} else {
				echo validation_errors();
			}

		} 

	}// End Of Class Create BPJS

	public function update($id = null)
	{
		$dataId = $this->modelBpjs->getBy($id);
		$title  = 'Update BPJS';
		$konten ='Admin_View/Bpjs/Bpjs_Update';
		$this->load->view('Template_Admin',
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
			redirect('Admin/Bpjs/index');
		
		}
	} //END OF FUNCTION UPDATE 

	public function delete($id)
	{
		$delData = $this->modelBpjs->getBy($id);
		if($delData == false )
		{
			echo "window.alert('Data Tidak Di Temukan') ";
			redirect('Admin/Bpjs/index');
		} else {
			$this->modelBpjs->hapus($id,$Deldata);
			redirect('Admin/Bpjs/index');
		}

	} // end of function delete 


	public function generate()
	{
		$pilihNama = $this->modelBpjs->selectNama();
		$form_action = 'Admin/Bpjs/generate';
		$title = 'Input Gaji Bpjs';
		$konten = 'Admin_View/Bpjs/Form_Gajibpjs';
		$this->load->view('Template_Admin',compact('title','konten','form_action','pilihNama'));

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
			redirect('Admin/Bpjs/getGenerate');
			
		} else {
			echo validation_errors(); 
		}

	} // end of function generate bpjs 

	public function getGenerate()
	
	{
		$title = 'Daftar Gaji Bpjs ';
		$konten = 'Admin_View/Bpjs/List_Generate';
		$dataGenerate = $this->modelBpjs->hitungBpjs();
		$this->load->view('Template_Admin',compact('title','konten','dataGenerate'));

	} // end of function generate

	public function cetak()
	{
		$title = 'Rincian Data Bpjs';
		$konten = 'Admin_View/Bpjs/Cetak_Generate';
		$dataGenerate = $this->modelBpjs->hitungBpjs();
		$this->load->view('Template_Admin',compact('title','konten','dataGenerate'));
	}

}
