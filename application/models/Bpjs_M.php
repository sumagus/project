<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs_M extends CI_Model {

	public function getAll()
	{
		$query = $this->db->get('bpjs');
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->where('id_bpjs',$id)
						  ->get('bpjs');
		if($query->num_rows()>=0)
		{
			return $query->row();
		} else {
			return array();
		}
	}

	public function buat($data)
	{
		return $this->db->insert('bpjs',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('id_bpjs',$id)
						->update('bpjs',$data);
	}

	public function hapus($id)
	{
		$query = $this->db->where('id_bpjs',$id)
				  ->delete('bpjs');
		return $query;
	}

	public function defaultForm()
	{
		return
		[
			[
			 'id_bpjs'=>'',
			 'jenis'=>'',
			 'nama'=>'',
			 'persentase'=>'',
			 'perusahaan'=>'',
			 'pegawai'=>'',
			],
		];
	} // end of function default form

	public function formRules()
	{
		return [
			['field'=>'id_bpjs','label'=>'ID','rules'=>'trim|required|is_unique[bpjs.id_bpjs]'],
			['field'=>'jenis','label'=>'Jenis','rules'=>'trim|required'],
			['field'=>'nama','label'=>'Nama','rules'=>'trim|required'],
			['field'=>'persentase','label'=>'Persentase','rules'=>'trim|required|decimal'],
			['field'=>'perusahaan','label'=>'perusahaan','rules'=>'trim|required|decimal'],
			['field'=>'Pegawai','label'=>'Pegawai','rules'=>'trim|required|decimal'],
		];
	}

	public function validasi()
	{
		$this->load->library('form_validation');
		$rules= $this->formRules();
		$this->form_valdiation->set_rules($rules);
		$this->form_validation->set_error->delimiters('<p class="text red">');
		return  $this->form_validation->run();

	} // END OF FUNCTION VALIDASI


	//--------------------------------------------------------- MOdel untuk melakukan input dan generate data BPJS --------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

	public function hitungBpjs()
	{
		$sql = "SELECT identitas_karyawan.nama_karyawan,gaji_bpjs,
					   (gaji_bpjs)*(3.7/100
					   ) as jht_perusahaan,
					   (gaji_bpjs)*(2/100) as jht_karyawan,
					   (gaji_bpjs)*(2.4/100) as jkk_perusahaan,
					   (gaji_bpjs)*(0.3/100)  as jk_perusahaan
					   from gajibpjs
					   INNER JOIN identitas_karyawan on identitas_karyawan.emp_no = gajibpjs.emp_no";
		$query  = $this->db->query($sql);
		return $query->result();
	}

	public function getBpjs($id)
	{
		$this->db->where('id_bpjs',$id);
		$this->db->select('persentase as TotalPersentase','perusahaan as BpjsPerusahaan','pegawai as BpjsKaryawan');
		$this->db->from('bpjs');
		$q = $this->db->get();
		return $q->result_array();
	}

	public function isiDataBpjs($data)
	{	
		$data = $this->hitungBpjs();
		$query = $this->db->insert('hitung_bpjs',$data);
		return $query;

	}

	public function buatGajiBpjs($data)
	{
		$query = $this->db->insert('gajibpjs',$data);
		return $query;
	}

	public function selectNama()
	{
		$query = $this->db->order_by('emp_no','asc')
						->get('identitas_karyawan');
						return $query->result();
	}

}// END OF CLASS


