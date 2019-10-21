<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembur_M extends CI_Model {

	public function getAll() //menampilkan semua data lembur karyawan 
	{
		$sql = " SELECT lembur.id_lembur,lembur.emp_no,identitas_karyawan.nama_karyawan,lembur.tanggal,lembur.keterangan,.lembur.uang_lembur
		from lembur
		inner join identitas_karyawan on  identitas_karyawan.emp_no = lembur.emp_no";

		$query =$this->db->query($sql);
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_lembur',$id)
						  ->limit(1)
						  ->get('lembur');
				if ($query->num_rows()>= 0)
				{
					return $query->row();
				} 
	}

	public function getIdentitas($id) // Mengambil Identitas Karyawan dari tabel database identitas  
	{
		$query = $this->db->where('emp_no',$id)
							->get('identitas_karyawan');
		if($query->num_rows()>= 0 )
		{
			return $query->row();
		}
	}

	public function selectNama()
	{
		$query = $this->db->order_by('nama_karyawan')
						->get('identitas_karyawan');
						return $query->result();
	}

	public function buat($data)
	{
		return $this->db->insert('lembur',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_lembur',$id)
						->update('lembur',$data);
	}

	public function hapus($id)
	{
		return $this->db->where('id_lembur',$id)
						->delete('lembur');
	}


	public function defaultForm()
	{
		return[
			[
				'tanggal'=>'',
				'iemp_no'=>'',
				'nama'=>'',
				'keterangan'=>'',
				'uang_lembur'=>'',
			],
		];
	}// END OF FUNCTION DefaultForm

	public function formRules()
	{
		return [
			['field'=>'tanggal', 'label'=>'Tanggal','rules'=>'trim|required'],
			['field'=>'emp_no','label'=>'Karyawan','rules'=>'trim|required'],
			['field'=>'keterangan','label'=>'Keterangan','rules'=>'trim|required'],
			['field'=>'uang_lembur','label'=>'Uang Lembur','rules'=>'trim|required']
		];
	} //END OF FUNCTION FORMRULES

	public function validasi()
	{
		$this->load->library('form_validation');
		$rules = $this->formRules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class = "text-red">');
		return $this->form_validation->run();

	} // END OF FUNCTION VALIDASI


	public function filterBy()
	{
		$sql =" SELECT lembur.id_lembur,
					   lembur.emp_no,
					   identitas_karyawan.nama_karyawan,
					   lembur.tanggal,
					   lembur.keterangan,
					   lembur.uang_lembur
					   /*count(tanggal) as jumlah_lembur /* Counting banyaknya tanggal  */
					   /*sum('jumlah_lembur*uang_lembur')as total_upah*/
					   from lembur 
					   INNER JOIN identitas_karyawan ON identitas_karyawan.emp_no = lembur.emp_no
					   where lembur.emp_no = '30051' AND tanggal BETWEEN '2019-09-20' AND '2019-10-10'
					    "; 
		$query = $this->db->query($sql);
		return $query->result();


			// test dengan metode lain 

		/*$this->db->select('id_lembur,emp_no,nama_karyawan,tanggal,keterangan,uang_lembur');
		$this->db->count('tanggal as jumlah_lembur');
		$this->db->select_sum('jumlah_lembur*uang_lembur');
		$this->db->where('lembur.emp_no',$id);
		$this->db->where('tanggal',$start);
		$this->db->where('tanggal',$end);
		$this->db->from('lembur');
		$this->db->join('identitas_karyawan','identitas_karyawan.emp_no = lembur.emp_no');
		$query = $this->db->get();
		return $query->result();*/
	} // END OF CLASS FILTERBY

	public function jumlahLembur()
	{
		$sql = "SELECT  emp_no,
						count(tanggal) as total_lembur
						from lembur
						where emp_no ='30051' AND tanggal BETWEEN '2019-09-20' AND '2019-10-10' ";
						$query = $this->db->query($sql);
						return $query->row();
	}

	public function Jumlah()
	{
		$sql =" SELECT count('tanggal')as jumlah_lembur
		where emp_no = '30051' and tanggal 	BETWEEN '2019-09-20' AND '2019-10-10',
		from lembur group by emp_no ";
		$query = $this->db->query($sql);
		return $query->row()->jumlah_lembur;
	}

}// END OF ClASS


