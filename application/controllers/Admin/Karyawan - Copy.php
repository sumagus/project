<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {


	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_M','modelKaryawan',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
		if(!$this->session->userdata('is_login'))
		{
			redirect('login');
		} else {
			$username = $this->session->userdata('username');
			$level = $this->session->userdata('level');
		}
	}

	
	public function index()
	{	
		$title = 'Data Karyawan';
		$dataIdentitas = $this->modelKaryawan->getAllIdentitas();
		$konten = 'Admin_View/Karyawan/Karyawan_View';
		$this->load->view('Template_Admin',compact('konten','dataIdentitas','title'));
	}

	public function createIdentitas()
	{
		
		if($this->modelKaryawan->validasiIdentitas() == false)
		{	
			$title = 'Create Identitas Karyawan';	
			$konten ='Admin_View/Karyawan/Karyawan_Form';
			$form_action ='Admin/Karyawan/createIdentitas';
			$this->load->view('Template_Admin',compact('konten','form_action','title'));
		} else {
				
			$identitasKaryawan = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'ktp'=>$this->input->post('ktp',true),
				'nama_karyawan'=>$this->input->post('nama_karyawan',true),
				'gender'=>$this->input->post('gender',true),

			);

			$personal = [
				    'emp_no' => $this->input->post('emp_no'),
				];	

			$this->modelKaryawan->buatIdentitasKaryawan($identitasKaryawan);
			$this->modelKaryawan->buatPersonal($personal);
			$this->session->set_flashdata('dialogbox','karyawan berhasil di tambahkan');
			redirect('Admin/Karyawan/Index');
		}
		
	}// END OF FUNCTION CREATE


	public function detail($id)
	{	
		$title = 'Detail Karyawan';
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$emp_no = $dataId->emp_no;
 		$konten = 'Admin_View/Karyawan/Karyawan_Detail';
		$this->load->view('Template_Admin',compact('konten','dataId','personal','title','emp_no'));
	}

	public function convertdate($EXCEL_DATE)
  	{
	    $year = substr($EXCEL_DATE,6,4);
	    $month = substr($EXCEL_DATE,3,2);
	    $day = substr($EXCEL_DATE,0,2);
	    $actualdate = $year.'-'.$month.'-'.$day;
	    return $actualdate; 
  	}

	public function Personal($id)
	{	
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$title = 'Data Personal ';
		$konten = 'Admin_View/Karyawan/Personal';
		$this->load->view('Template_Admin',compact('dataId','emp_no','dataPersonal','nama','title','konten'));
		
	}

	public function createPersonal($id)
	{
	
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('marital_status','marital_status','required');
		$this->form_validation->set_rules('agama','agama','required');
		$this->form_validation->set_error_delimiters('<p class ="text-red">');

		if($this->form_validation->run() && $this->upload->do_upload('profile'))
		{	
			$tesUpload = $this->upload->data();
			$path = base_url("upload/gambar/".$tesUpload['raw_name'].$tesUpload['file_ext']);
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'profile'=>$path,
				'tempat_lahir'=>$this->input->post('tempat_lahir',true),
				'tanggal_lahir'=>$this->convertdate($this->input->post('tanggal_lahir',true)),
				'marital_status'=>$this->input->post('marital_status',true),
				'agama'=>$this->input->post('agama',true),
				
			);			
			
			$this->modelKaryawan->buatPersonal($data);
			$this->session->set_flashdata('dialogbox','Data berhasil di tambahkan ');
			// redirect('Admin/Karyawan/Personal/'.$id);
		} else {
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$title = 'Create Personal';
		$konten = 'Admin_View/Karyawan/CreatePersonal';
		$this->load->view('Template_Admin',compact('konten','title','emp_no','data_personal','nama','dataId'));
	
			
		}
	} // end of function Create Personal 

	public function updatePersonal($id)
	{

		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('marital_status','marital_status','required');
		$this->form_validation->set_rules('agama','agama','required');
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		if ($this->form_validation->run()) {
			$data = [
			    'tempat_lahir' 		=> $this->input->post('tempat_lahir'),
			    'tanggal_lahir' 	=> date('Y-m-d',strtotime($this->input->post('tanggal_lahir'))),
			    'agama' 			=> $this->input->post('agama'),
			    'marital_status' 	=> $this->input->post('marital_status'),
			];
			
			$config['upload_path'] = './upload/gambar/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite']  = true;
			$config['file_name']  = $this->input->post('emp_no');
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('profile')){
				$data['profile'] = $this->upload->data()['file_name'];
			}

			$emp_no = $this->input->post('emp_no');
			$cekKAryawan = $this->modelKaryawan->getPersonal($emp_no);
			if (isset($cekKAryawan->emp_no)) {
				$update = $this->modelKaryawan->ubahPersonal($emp_no,$data);
				if ($update) {
					redirect('admin/karyawan/updatePersonal/'.$emp_no,'refresh');
				}
			} else {
				$data['emp_no'] = $emp_no;
				$insert = $this->modelKaryawan->buatPersonal($data);
				if ($insert) {
					redirect('admin/karyawan/updatePersonal/'.$emp_no,'refresh');
				}
			}
		} else {
			$dataId 		= $this->modelKaryawan->getIdentitas($id);
			$dataPersonal 	= $this->modelKaryawan->getPersonal($id);
			$emp_no 		= $dataId->emp_no;
			$nama 			= $dataId->nama_karyawan;
			$title 			= 'Create Personal';
			$konten 		= 'Admin_View/Karyawan/CreatePersonal';
			$data = [
			    'dataId' 		=> $dataId,
			    'dataPersonal' 	=> $dataPersonal,
			    'emp_no' 		=> $emp_no,
			    'nama' 			=> $nama,
			    'title' 		=> $title,
			    'konten' 		=> $konten,
			];
			$this->load->view('Template_Admin',$data);
	
		}

	} // END OF FUNCTION UPDATE PERSONAL 

	public function kontak($id)
	{	
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$dataKontak = $this->modelKaryawan->getKontak($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$title = 'Data Kontak ';
		$konten = 'Admin_View/Karyawan/Kontak';
		$this->load->view('Template_Admin',compact('dataId','emp_no','dataKontak','dataPersonal','nama','title','konten'));
		
	}

	public function createKontak($id)
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKontak = $this->modelKaryawan->getKontak($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$title = 'Create Kontak';
		$konten = 'Admin_View/Karyawan/CreateKontak';
	
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('email','email','required|valid_emails|is_unique[kontak_karyawan.email]',array('is_unique'=>" alamat email sudah terdaftar"));
		$this->form_validation->set_rules('no_telp','no_telp','required|numeric');
		$this->form_validation->set_rules('mobile','mobile','required|numeric');
		$this->form_validation->set_rules('alamat_tinggal','alamat_tinggal');
		$this->form_validation->set_rules('alamat_ktp','alamat_ktp','required');
		$this->form_validation->set_rules('kota','kota','required');
		$this->form_validation->set_rules('provinsi','provinsi','required');
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'email'=>$this->input->post('email',true),
				'no_telp'=>$this->input->post('no_telp',true),
				'mobile'=>$this->input->post('mobile',true),
				'alamat_tinggal'=>$this->input->post('alamat_tinggal',true),
				'alamat_ktp'=>$this->input->post('alamat_ktp',true),
				'kota'=>$this->input->post('kota',true),
				'provinsi'=>$this->input->post('provinsi',true),
			);
			$this->modelKaryawan->buatKontak($data);
			$this->session->set_flashdata('dialogbox','Data berhasil di tambahkan ');
			redirect('Admin/Karyawan/kontak/'.$id);
		} else {
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKontak = $this->modelKaryawan->getkontak($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$title = 'Create Kontak';
		$konten = 'Admin_View/Karyawan/CreateKontak';
		$this->load->view('Template_Admin',compact('konten','title','emp_no','dataKontak','nama','dataId','dataPersonal'));
			
		}
	} // END OF FUNCTION CREATE KONTAK

	public function updateKontak($id)
	{
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('email','email','required|valid_emails');
		$this->form_validation->set_rules('no_telp','no_telp','required|numeric');
		$this->form_validation->set_rules('mobile','mobile','required|numeric');
		$this->form_validation->set_rules('alamat_tinggal','alamat_tinggal');
		$this->form_validation->set_rules('alamat_ktp','alamat_ktp','required');
		$this->form_validation->set_rules('kota','kota','required');
		$this->form_validation->set_rules('provinsi','provinsi','required');
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'email'=>$this->input->post('email',true),
				'no_telp'=>$this->input->post('no_telp',true),
				'mobile'=>$this->input->post('mobile',true),
				'alamat_tinggal'=>$this->input->post('alamat_tinggal',true),
				'alamat_ktp'=>$this->input->post('alamat_ktp',true),
				'kota'=>$this->input->post('kota',true),
				'provinsi'=>$this->input->post('provinsi',true),
			);
			$this->modelKaryawan->ubahKontak($id,$data);
			$this->session->set_flashdata('dialogbox','Data berhasil di perbaharui ');
			redirect('Admin/Karyawan/kontak/'.$id);
		} else {
		$this->session->set_flashdata('dialogbox','Gagal Memperbaharui Data');
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKontak = $this->modelKaryawan->getkontak($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$title = 'Update Kontak';
		$konten = 'Admin_View/Karyawan/EditKontak';
		$this->load->view('Template_Admin',compact('konten','title','emp_no','dataKontak','nama','dataId','dataPersonal'));
		}


	} // END OF FUNCTION UPDATE KONTAK

	public function Pengalaman($id)
	{
		$title = 'Data Pengalaman';
		$konten = 'Admin_View/Karyawan/Pengalaman';
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPengalaman = $this->modelKaryawan->getAllPengalaman($id);
		// $dataPengalamanBy =$this->modelKaryawan->getPengalamanBy($id);
		// $dataIdPengalaman = $this->modelKaryawan->getIdPengalaman($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		if(!empty($dataPengalaman)){
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPengalaman','dataPersonal'));
		} else {
			redirect("Admin/Karyawan/createPengalaman/".$id);
		}
		
	}

	public function createPengalaman($id)
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		//$dataPengalaman = $this->modelKaryawan->getPengalaman($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$title = 'Create Pengalaman';
		$konten = 'Admin_View/Karyawan/CreatePengalaman';
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPersonal'));
		
		//rules form 
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('posisi','posisi','required');
		$this->form_validation->set_rules('gaji','gaji','required|numeric');
		$this->form_validation->set_rules('perusahaan','perusahaan','required');
		$this->form_validation->set_rules('thn_masuk','thn_masuk','required');
		$this->form_validation->set_rules('thn_keluar','thn_keluar','required');
		$this->form_validation->set_rules('alasan','alasan','required');
		$this->form_validation->set_error_delimiters('<p class = "text-red">');

		if($this->form_validation->run())
		{
			$data= array(
				'emp_no'=>$this->input->post('emp_no',true),
				'posisi'=>$this->input->post('posisi',true),
				'gaji'=>$this->input->post('gaji',true),
				'perusahaan'=>$this->input->post('perusahaan',true),
				'thn_masuk'=>$this->convertdate($this->input->post('thn_masuk',true)),
				'thn_keluar'=>$this->convertdate($this->input->post('thn_keluar',true)),
				'alasan' =>$this->input->post('alasan',true),
			);
				$this->modelKaryawan->buatPengalaman($data);
				$this->session->set_flashdata('dialogbox','Data berhasil di masukan');
				redirect('Admin/Karyawan/Pengalaman/'.$id);
		}	else {
			
			echo validation_errors();
			
		}
	} // end of function create pengalaman 

	public function updatePengalaman($id,$id_pengalaman)
	{
		
		//rules form 
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('posisi','posisi','required');
		$this->form_validation->set_rules('gaji','gaji','required|numeric');
		$this->form_validation->set_rules('perusahaan','perusahaan','required');
		$this->form_validation->set_rules('thn_masuk','thn_masuk','required');
		$this->form_validation->set_rules('thn_keluar','thn_keluar','required');
		$this->form_validation->set_rules('alasan','alasan','required');
		$this->form_validation->set_error_delimiters('<p class = "text-red">');

		if($this->form_validation->run())
		{
			$data= array(
				'emp_no'=>$this->input->post('emp_no',true),
				'posisi'=>$this->input->post('posisi',true),
				'gaji'=>$this->input->post('gaji',true),
				'perusahaan'=>$this->input->post('perusahaan',true),
				'thn_masuk'=>$this->convertdate($this->input->post('thn_masuk',true)),
				'thn_keluar'=>$this->convertdate($this->input->post('thn_keluar',true)),
				'alasan' =>$this->input->post('alasan',true),
			);
				$this->modelKaryawan->ubahPengalaman($id,$id_pengalaman,$data);
				$this->session->set_flashdata('dialogbox','Data berhasil di masukan');
				redirect('Admin/Karyawan/pengalaman/'.$id);
		}	else {
			
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPengalaman =$this->modelKaryawan->getPengalamanBy($id,$id_pengalaman);
		// $dataPengalamanBy = $this->modelKaryawan->getPengalamanBy($id,$p);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$title = 'Update Pengalaman';
		$konten = 'Admin_View/Karyawan/EditPengalaman';
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPengalaman','dataPersonal'));
			
		}
	} // end of function create pengalaman 




	public function pendidikan($id)
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPendidikan = $this->modelKaryawan->getPendidikan($id);
		$title = 'Data Pendidikan';
		$konten = 'Admin_View/Karyawan/pendidikan';
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		if(!empty($dataPendidikan))
		{
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPendidikan','dataPersonal'));
		} else 
		{
			redirect('Admin/Karyawan/CreatePendidikan/'.$id);
		}
	}

	public function createPendidikan($id,$id_pendidikan )
	{
		$title ='Create Pendidikan ';
		$konten = 'Admin_View/Karyawan/CreatePendidikan';
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPendidikan = $this->modelKaryawan->getPendidikan($id,$id_pendidikan); 
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$pilihPendidikan =$this->modelKaryawan->selectPendidikan();
		
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPendidikan','selectPendidikan','dataPersonal'));

		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('jenjang','jenjang','required');
		$this->form_validation->set_rules('thn_masuk','thn_masuk','required');
		$this->form_validation->set_rules('thn_lulus','thn_lulus','required');
		$this->form_validation->set_rules('institusi','institusi','required');
		$this->form_validation->set_rules('jurusan','jurusan','trim');
		$this->form_validation->set_rules('fakultas','fakultas','trim');
		$this->form_validation->set_rules('nilai','nilai','trim');
		$this->form_validation->set_error_delimiters('<p class="text-red">');

		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'jenjang'=>$this->input->post('jenjang',true),
				'thn_masuk'=>$this->convertdate($this->input->post('thn_masuk',true)),
				'thn_lulus'=>$this->convertdate($this->input->post('thn_lulus',true)),
				'institusi'=>$this->input->post('institusi',true),
				'jurusan'=>$this->input->post('jurusan',true),
				'fakultas'=>$this->input->post('fakultas',true),
				'nilai'=>$this->input->post('nilai',true),
			);
			$this->modelKaryawan->buatPendidikan($data);
			$this->session->set_flashdata('dialogbox','Data berhasil di tambahkan');
			redirect('Admin/Karyawan/pendidikan/'.$id);
		} else {
			echo validation_errors();
		}
	}

	public function keluarga($id)
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKeluarga = $this->modelKaryawan->getKeluarga($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$title = 'Data Keluarga';
		$konten = 'admin_view/karyawan/keluarga';
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKeluarga = $this->modelKaryawan->getKeluarga($id);
		if (!empty($dataKeluarga)){
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataKeluarga','dataPersonal'));
		} else {
			redirect('admin/karyawan/createKeluarga/'.$id);
		}
	}

	public function createKeluarga($id)
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKeluarga = $this->modelKaryawan->getKeluarga($id);
		$title = 'Data Keluarga';
		$konten = 'admin_view/karyawan/createKeluarga';
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataKeluarga','dataPersonal'));
	
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('pendidikan','pendidikan','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('kontak','kontak','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan');

		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'nama'=>$this->input->post('nama',true),
				'status'=>$this->input->post('status',true),
				'gender'=>$this->input->post('gender',true),
				'pendidikan'=>$this->input->post('pendidikan',true),
				'alamat'=>$this->input->post('alamat',true),
				'kontak'=>$this->input->post('kontak',true),
				'pekerjaan'=>$this->input->post('pekerjaan',true),
			);

			$this->modelKaryawan->buatKeluarga($data);
			$this->session->set_flashdata('dialogbox','Data Berhasill Disimpan ');
			redirect('admin/karyawan/keluarga/'.$id);

		} else {
			echo validation_errors();
		}

	}//end of function of keluarga 


	public function pajak($id)
	{
		$title	='Data Pajak Karyawan';
		$konten = 'admin_view/gapok/pajak_view';
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPajak = $this->modelKaryawan->getPajak($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$nama = $dataId->nama_karyawan;
		$emp_no = $dataId->emp_no;
		if (!empty($dataPajak)){
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPajak','dataPersonal','nama','emp_no'));
		} else {
			redirect('admin/karyawan/createPajak/'.$id);
		}	
	}

	public function createPajak($id)
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKeluarga = $this->modelKaryawan->getPajak($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$nama = $dataId->nama_karyawan;
		$emp_no =$dataId->emp_no;
		$title = 'Data Pajak';
		$konten = 'admin_view/gapok/createPajak';
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataPajak','dataPersonal','nama','emp_no'));
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('npwp','NPWP','required|trim|numeric');
		$this->form_validation->set_rules('ptkp','ptkp','required');

		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'npwp'=>$this->input->post('npwp',true),
				'ptkp'=>$this->input->post('ptkp',true),
			);

			$this->modelKaryawan->buatPajak($data);
			$this->session->set_flashdata('dialogbox','Data Berhasil Disimpan ');
			redirect('admin/karyawan/pajak/'.$id);

		} else {
			echo validation_errors();
			
		}

	} // end of function create pajak

	public function updatePajak($id)
	{
		$this->form_validation->set_rules('emp_no','emp_no','required|trim');
		$this->form_validation->set_rules('npwp','npwp','required|trim');
		$this->form_validation->set_rules('ptkp','ptkp','required|trim');
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'npwp'=>$this->input->post('npwp',true),
				'ptkp'=>$this->input->post('ptkp',true),
				
			);
			$this->modelKaryawan->ubahPajak($id,$data);
			$this->session->set_flashdata('dialogbox','Data berhasil di perbaharui ');
			redirect('admin/karyawan/pajak/'.$id);
		} else {
		$this->session->set_flashdata('dialogbox','Gagal Memperbaharui Data');
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataPajak = $this->modelKaryawan->getPajak($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$emp_no = $dataId->emp_no;
		$nama = $dataId->nama_karyawan;
		$npwp = $dataPajak->npwp;
		$title = 'Update Data Pajak pegawai';
		$konten = 'admin_view/gapok/updatePajak';
		$this->load->view('Template_Admin',compact('konten','title','emp_no','dataPajak','dataPersonal','nama','dataId','npwp'));
		}
	}
 

	public function delete($id)
	{
		$delData= $this->modelKaryawan->getby();
		if($delData == false)
			{
			echo "Data Tidak ditemukan";
			}  
		$this->modelKaryawan->hapusIdentitas($id,$delData);
		$this->session->set_flashdata('dialogbox','data berhasil di hapus');
				redirect('admin/karyawan/index');

	}//END OF FUNCTION DELETE

	public function tunjangan($id)
	{
		$title = 'Data Tunjangan Karyawan' ; 
		$konten ='admin_view/gapok/tunjangan_view';
		$dataId =$this->modelKaryawan->getIdentitas($id);
		$dataTunjangan = $this->modelKaryawan->getTunjangan($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		if(empty($dataTunjangna))
		{
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataTunjangan','dataPersonal'));
		} else {
			redirect('admin/karyawan/createTunjangan/'.$id);
		}
		
	} // end of function tunjangan 

	public function createTunjangan($id)
	
	{
		$dataId = $this->modelKaryawan->getIdentitas($id);
		$dataKeluarga = $this->modelKaryawan->getTunjangan($id);
		$dataPersonal = $this->modelKaryawan->getPersonal($id);
		$nama = $dataId->nama_karyawan;
		$emp_no =$dataId->emp_no;
		$title = 'Data Tunjangan';
		$konten = 'admin_view/gapok/tunjangan_form';
		$this->load->view('Template_Admin',compact('title','konten','dataId','dataTunjangan','dataPersonal','nama','emp_no'));
		$this->form_validation->set_rules('emp_no','emp_no','required');
		$this->form_validation->set_rules('jumlah','jumlah','required|trim|numeric');
		$this->form_validation->set_rules('jenis_tunjangan','jenis tunjangan','required');

		if($this->form_validation->run())
		{
			$data = array(
				'emp_no'=>$this->input->post('emp_no',true),
				'jenis_tunjangan'=>$this->input->post('jenis_tunjangan',true),
				'jumlah'=>$this->input->post('jumlah',true),
			);

			$this->modelKaryawan->buatTunjangan($data);
			$this->session->set_flashdata('dialogbox','Data Berhasil Disimpan ');
			redirect('admin/karyawan/tunjangan/'.$id);

		} else {
			echo validation_errors();
			
		}

	} //  end of function tunjangan 


}
