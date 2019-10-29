<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen_M extends CI_Model {

	public function getAll()
	{
		$query = $this->db->order_by('nama_departemen','asc')
						  ->get('departemen');
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_departemen',$id)
						  ->limit(1)
						  ->get('departemen');
		if ($query->num_rows()> 0)
		{
			return $query->row();
		} else {
			return array();
		}

	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_departemen',$id)
						->update('departemen',$data);
	}

	public function hapus($id)
	{
		return $this->db->where('id_departemen',$id)
						->delete('departemen');
	}

	public function buat($data)
	{
		$query = $this->db->insert('departemen',$data);
		return $query;
	}

	public function rulesUpdate()
	{
		return[
			[
				'field'=>'id_departemen',
				'label'=>'id_departemen',
				'rules'=>'required'
			],
			[
				'field'=>'nama_departemen',
				'label'=>'nama_departemen',
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

	public function searchData($query)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('nama_departemen',$query);
		$query = $this->db->get();
		return $query;

	}

}


