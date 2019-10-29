<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_M extends CI_Model {

	public function getAll()
	{
		$query = $this->db->order_by('level','asc')
						  ->get('User');
		return $query->result();
	}

	public function getSelect()
	{
		$this->db->select('*');
		$this->db->order_by('level','asc');
		$this->db->not_like('level','1');
		$this->db->from('user');
		$query = $this->db->get();
		return $query ;
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_user',$id)
						  ->limit(1)
						  ->get('user');
		if ($query->num_rows()> 0)
		{
			return $query->row();
		} else {
			return array();
		}
	}

	public function buat($data)
	{
		return $this->db->insert('User',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_User',$id)
						->update('User',$data);
	}

	public function hapus($id)
	{
		$query = $this->db->where('id_user',$id)
						  ->delete('user');
						return $query;
	}

	public function defaultForm()
	{

		// Mengemblikan nilai default dari form //
		// karena memakai form yang sama 		//
		// 										//
		return [
			'id_user'=>'',
			'username'=>'',
			'nama'=>'',
			'email'=>'',
			'level'=>'',
			'status'=>'',

		];
	}

	public function formRules()
	{
		// Membuat rule form di tampung pada (function/variable) formRUles
		
		return
		[
			['field'=>'id_user',	'label'=>'ID',			'rules'=>'trim|required|is_unique[user.id_user]',array('is_unique'=>'id telah terdaftar')],
			['field'=>'username',	'label'=>'Username',	'rules'=>'trim|required|is_unique[user.username]',array('is_unique'=>'username telah terdaftar')],
			['field'=>'nama',		'label'=>'Nama',		'rules'=>'trim|required'],
			['field'=>'email',		'label'=>'Email',		'rules'=>'trim|required|valid_emails',array('valid_emails'=>'alamat email tidak valid')],
			['field'=>'password',	'label'=>'Password', 	'rules'=>'trim|required|min_length[4]'],
			['field'=>'level',		'label'=>'Level',		'rules'=>'trim|required'],
			['field'=>'status',		'label'=>'Status',		'rules'=>'trim|required'],

		];
	}

	public function validasi()
	{
		//Mengatur dan memanggil validasi form dari helper
		$this->load->library('form_validation');
		$rules = $this->formRules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class= "text-red">');
		return $this->form_validation->run();

	}

	public function formRulesUpdate()
	{
		// Membuat rule form di tampung pada (function/variable) formRUles
		
		return
		[
			['field'=>'id_user',	'label'=>'ID',			'rules'=>'trim|required'],
			['field'=>'username',	'label'=>'Username',	'rules'=>'trim|required'],
			['field'=>'nama',		'label'=>'Nama',		'rules'=>'trim|required'],
			['field'=>'email',		'label'=>'Email',		'rules'=>'trim|required|valid_emails',array('valid_emails'=>'alamat email tidak valid')],
			['field'=>'password',	'label'=>'Password', 	'rules'=>'trim|required|min_length[4]'],
			['field'=>'level',		'label'=>'Level',		'rules'=>'trim|required'],
			['field'=>'status',		'label'=>'Status',		'rules'=>'trim|required'],

		];
	}

	public function validasiUpdate()
	{
		//Mengatur dan memanggil validasi form dari helper
		$this->load->library('form_validation');
		$rules = $this->formRulesUpdate();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class= "text-red">');
		return $this->form_validation->run();

	}


	public function selectLevel()
	{
		$query = $this->db->order_by('level','asc')
	 					  ->get('user');
	 	 return $query->result();
	}

}
