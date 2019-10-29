<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	
	public function index()
	{
		$konten = 'admin/perusahaan/Vendor';
		$this->load->view('template',compact('konten'));
	}
}
