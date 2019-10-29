<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('User_M','modelUser',true);
		$this->load->helper('url','form');
		$this->load->library('session','form_validation');
	}

	public function index()
	{		
		$allData = $this->modelUser->getAll(); 
		$konten = 'admin/user/userview';
		
		$this->load->view('template',compact('konten','allData'));
	}

	public function create()
	{

		if($this->modelUser->validasi() == false)
		{
			$form_action = 'user/create ';
			$konten = 'admin/user/userform';

			$this->load->view('template',compact('konten','form_action'));
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
			redirect('user');
		}
		/*if($_POST == false)
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
			$dataId = $this->modelUser->getBy($id);
			$konten ='admin/user/formUpdate';
			$form_action ='user/update/'.$id;
			$this->load->view('template',compact('dataId','konten','form_action'));

		} else {
			$data = array(
				'id_user'=> $this->input->post('id_user'),
				'username'=> $this->input->post('username'),
				'nama'=> $this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'email'=> $this->input->post('email'),
				'level'=>$this->input->post('level'),
				'status'=>$this->input->post('status')
			);
			 $this->modelUser->ubah($id,$data);
			 $this->session->set_flashdata('dialogbox',' data berhasil di ubah ');
			 redirect('user');
		}
	}// END OF FUNCTION UPDATE USER

	public function delete($id)
	{
		$delData = $this->modelUser->getBy();
		if($delData == false)
			{
			echo "Data Tidak ditemukan";
			} 
				$this->modelUser->hapus($id,$data);
				$this->session->set_flashdata('dialogbox','<script>window.alert("yakin anda ingin menghapus user ?")</script>?');
				redirect('user');
	}
}
