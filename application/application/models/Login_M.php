<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

	public function cekUser($username,$password)
	{
		$query = $this->db->where(['username'=>$username,'password'=>$password])
				 ->limit(1)
				 ->get('user');
		$result = $query->row();
		return $result;	

	}

	public function setRules()
	{
		return [
			['field'=>'username',
			 'label'=>'username',
			 'rules'=>'trim|required',
			],
			['field'=>'password',
			 'label'=>'passwprd',
			 'rules'=>'trim|required',
			],
		];
	}

	public function validasi()
	{
		$ruleForm = $this->setRules();
		$this->form_validation->set_rules($ruleForm);
		$this->form_validation->set_error_delimiters('<p class= "text-red"></p>');
		return $this->form_validation->run();
	}

	
}


