<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_M extends CI_Model {

	public function getAll()
	{
		$query = $this->db->order_by('jabatan','asc')
						->get('Jabatan');
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_jabatan',$id)
						  ->limit(1)
						  ->get('jabatan');
		if ($query->num_rows()> 0)
		{
			return $query->row();
		} else {
			return array();
		}

	}

	public function buat($data)
	{
		return $this->db->insert('Jabatan',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_Jabatan',$id)
						->update('Jabatan',$data);
	}

	public function hapus($id)
	{
		return $this->db->where('id_jabatan',$id)
						->delete('Jabatan');
	}

	public function rulesUpdate()
	{
		return[
			[
				'field'=>'id_jabatan',
				'label'=>'id_jabatan',
				'rules'=>'required'
			],
			[
				'field'=>'jabatan',
				'label'=>'jabatan',
				'rules'=>'required'
			],
		];
	}

	public function validasiUpdate()
	{
		$this->load->library('form_validation');
		$rules = $this->rulesUpdate();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class="text-red">');
		return $this->form_validation->run();
	}
}


