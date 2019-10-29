<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi_M extends CI_Model {

	public function getAll()
	{
		$query = $this->db->order_by('nama_divisi','asc')
						->get('Divisi');
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_divisi',$id)
						->get('divisi');
						if($query->num_rows() > 0)
						{
							return $query->row();
						} else {
							return array();
						}
	}
	public function buat($data)
	{
		return $this->db->insert('Divisi',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_Divisi',$id)
						->update('Divisi',$data);
	}

	public function hapus($id)
	{
		$query = $this->db->where('id_divisi',$id)
						->delete('divisi');
						return $query;
	}

	public function rules()
	{
		return [
			[
				'field'=>'id_divisi',
				'label'=>'ID',
				'rules'=>'required'
			],
			[
				'field'=>'nama_divisi',
				'label'=>'nama',
				'rules'=>'required'
			],
		];
	}

	public function validasiUpdate()
	{
		$rules = $this->rules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		return $this->form_validation->run();

	}
}


