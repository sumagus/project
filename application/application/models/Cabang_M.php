<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_M extends CI_Model {

	public function getAll()
	{
		$query = $this->db->order_by('kota','asc')
						->get('Cabang');
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_cabang',$id)
						  ->limit(1)
						  ->get('cabang');
		if ($query->num_rows()> 0)
		{
			return $query->row();
		} else {
			return array();
		}
	}

	public function buat($data)
	{
		return $this->db->insert('Cabang',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_Cabang',$id)
						->update('Cabang',$data);
	}

	public function hapus($id)
	{
		return $this->db->where('id_cabang',$id)
						->delete('Cabang');
	}

	public function rulesUpdate()
	{
		return[
			[
				'field'=>'id_cabang',
				'label'=>'id_cabang',
				'rules'=>'required|trim'
			],
			[
				'field'=>'nama_cabang',
				'label'=>'nama_cabang',
				'rules'=>'required|trim'
			],
			[
				'field'=>'alamat_cabang',
				'label'=>'alamat_cabang',
				'rules'=>'required|trim'
			],
			[
				'field'=>'kota',
				'label'=>'kota',
				'rules'=>'required|trim'
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


