<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('User_M','modelUser',true);
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
		$title = 'User';
		$allData = $this->modelUser->getAll(); 
		$konten = 'Admin_View/User/Userview';
		$level = $this->session->userdata('level');
		$this->load->view('Template_Admin',compact('konten','allData','title'));
	}

	public function create()
	{
		if($this->modelUser->validasi() == false)
		{
			$title = 'Create User';
			$form_action = 'Admin/User/create ';
			$konten = 'Admin_View/User/UserForm';
			$this->load->view('Template_Admin',compact('konten','form_action','title'));
		} else {
			$data = array (
				'id_user'=>$this->input->post('id_user',true),
				'username' => $this->input->post('username',true),
				'nama'=>$this->input->post('nama',true),
				'email'=>$this->input->post('email',true),
				'password'=> $this->input->post('password',true),
				'level'=>$this->input->post('level',true),
				'status'=>$this->input->post('status',true)
			);
			$this->modelUser->buat($data);
			$this->session->set_flashdata('dialogbox','user berhasil di tambahkan');
			redirect('Admin/User');
		}
		/*if($_POST == false) // cara ke 2 
		{
			$input = $this->modelUser->defaultForm();
		}
		$input = $this->input->post(null,true);
		if($this->modelUser->validasi() == false)
		{
			$konten = 'admin/userform';
			$form_action ='user/create';
			$pilihLevel= $this->modelUser->selectLevel();
			$this->load->view('template',compact('konten','pilihLevel','form_action','input'));
			return;
		} else 
		{	
			$input->password = md5($input->password);
			$this->modelUser->buat($input);
			$this->session->set_flashdata('dialogbox','user berhasil di tambahkan');
			redirect('user');
		} */
	} // END  OF FUNCTION CREATE USER 

	public function update($id = null )
	{
		if($this->modelUser->validasiUpdate() == false)
		{
			$title = 'Update User';
			$dataId = $this->modelUser->getBy($id);
			$konten ='Admin_View/User/FormUpdate';
			$form_action ='Admin/User/Update/'.$id;
			$this->load->view('Template_Admin',compact('dataId','konten','form_action','title'));

		} else {
			$data = array(
				'id_user'=> $this->input->post('id_user',true),
				'username'=> $this->input->post('username',true),
				'nama'=> $this->input->post('nama',true),
				'password'=>$this->input->post('password',true),
				'email'=> $this->input->post('email',true),
				'level'=>$this->input->post('level',true),
				'status'=>$this->input->post('status',true)
			);
			 $this->modelUser->ubah($id,$data);
			 $this->session->set_flashdata('dialogbox',' data berhasil di ubah ');
			 redirect('Admin/User');
		}
	}// END OF FUNCTION UPDATE USER

	public function delete($id)
	{
		$delData = $this->modelUser->getBy($id);
		if($delData == false)
			{
			echo "Data Tidak ditemukan";
			} 
				$this->modelUser->hapus($id,$delData);
				//$this->session->set_flashdata('dialogbox','<script>window.alert("yakin anda ingin menghapus user ?")</script>?');
				redirect('Admin/User');
	}
	
}
