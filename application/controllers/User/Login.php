<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_M','modelLogin',true);
		$this->load->helper('url','form');
		$this->load->library('form_validation','session');
	}

	

	public function index()
	{
	
		$konten = 'login_view';
		$this->load->view('template_login',compact('konten'));
		
	} // end of function index

	public function proses()
	{
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_error_delimiters('<p class = "text-red"></p>');
		if($this->form_validation->run()==false)
		{
			redirect('login');
		} else {
		$username  = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->modelLogin->cekUser($username,$password);

		if (count($user)> 0)
				{
					$sess_data = array(
						'username'=>$user->username,
						'level'=>$user->level,
						'is_login'=>true,
						'status'=>$user->status,
						'nama'=>$user->nama,
						'email'=>$user->email
					);
					$this->session->set_userdata($sess_data);
					if($this->session->userdata('level') =='1' && $this->session->userdata('status') == 'Y')
					{
						redirect('admin/home');
					} elseif ($this->session->userdata('level') =='2' && $this->session->userdata('status') == 'Y') {
						redirect('manager/home');
					} elseif ($this->session->userdata('level') =='3' && $this->session->userdata('status') == 'Y') {
						redirect('staff/home');
					} elseif ($this->session->userdata('level') =='4' && $this->session->userdata('status') == 'Y') {
						redirect('karyawan/home');
					} else{
						$this->session->set_flashdata('errorLog','maaf akun anda tidak terdaftar atau belum di aktifasi, silahkan hubungi admin');
						redirect('login');
					}

				}// end of case user 
		}// end of validasi case 
	} // end of function proses

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	} 


}
