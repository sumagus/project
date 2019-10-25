<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_M extends CI_Model {


	public function selectNama()
	{
		$query = $this->db->order_by('emp_no','asc')
						  ->get('identitas_karyawan');

						  return $query->result();

	}

	public function getGapok()
	{
		$q = $this->db->get('gapok');
		$data = [];
		foreach ($q->result() as $key => $v) {
			$data[$v->emp_no] = $v->gapok;
		}

		return $data;
	}

	public function getTunjangan()
	{
		$q = $this->db->get('tunjangan_karyawan');
		$data = [];
		foreach ($q->result() as $tunjangan) {
			$data[$tunjangan->emp_no] = $tunjangan->jumlah; 
		}
		return $data;
	}

	public function getLembur($start='',$end='')
	{
		$this->db->select('SUM(uang_lembur) as lembur,emp_no');
		if ($start!='' && $end!='') {
			$this->db->where('tanggal >=',date('Y-m-d',strtotime($start)));
			$this->db->where('tanggal <=',date('Y-m-d',strtotime($end)));
			
		}
		$this->db->group_by('emp_no');
		$q = $this->db->get('lembur');
		$data = [];
		foreach ($q->result() as $v) {
			$data[$v->emp_no] = $v->lembur;
		}

		return $data;
	}

	public function getPotongan($start='',$end='')
	{
		$this->db->select('SUM(unpaid) as unpaid,emp_no');
		if($start!='' && $end!='')
		{
			$this->db->where('date>=', date('Y-m-d',strtotime($start)));
			$this->db->where('date<=', date('Y-m-d',strtotime($end)));
		}
		$this->db->group_by('emp_no');
		$q = $this->db->get('absen');
		$data = [];
		foreach($q->result() as $p)
		{
			$data[$p->emp_no] = $p->unpaid*50000;
		}

		return $data;

	}


	

	// public function getTunjangan()
	// {
	// 	$sql = "SELECT gapok.emp_no,
	// 				   gapok.gapok,
	// 				   identitas_karyawan.nama_karyawan,
	// 				   tunjangan_karyawan.jumlah,
	// 				   gapok.uang_makan
	// 	FROM gapok
	// 	INNER JOIN identitas_karyawan ON identitas_karyawan.emp_no = gapok.emp_no
	// 	INNER JOIN tunjangan_karyawan ON tunjangan_karyawan.emp_no = gapok.emp_no
	// 	WHERE gapok.emp_no ='30128'
	// 	";
	// 	$query =$this->db->query($sql);
	// 	return $query->result();
	// }

	

	// public function getLembur($emp_no,$start,$end)
	// {


	// }

	// public function Payroll($start='',$end='',$emp_no='') //mengambil data berdasarkan filter 
	// {
	// 	if ($start!='' && $end!='' && $emp_no!='')
	// 	{
	// 		$where = array(
	// 			'l.tanggal >=' => date('Y-m-d',strtotime($start)), 
	// 			'l.tanggal <=' => date('Y-m-d',strtotime($end)), 
	// 			'l.emp_no'=>$emp_no,
	// 		);
			
	// 	$this->db->where($where);
	// 	$this->db->join('identitas_karyawan i','l.emp_no = i.emp_no','inner');
	// 	$this->db->join('tunjangan_karyawan t','l.emp_no = i.emp_no','inner');
	// 	$this->db->join('absen a','l.emp_no = i.emp_no','inner');
	// 	$this->db->join('lembur r','l.emp_no = i.emp_no','inner');
	// 	$query = $this->db->get('gapok l');

	// 	return $query->result();
	// 	}
	// }

	public function getId()
	{
		$query = $this->db->where('emp_no','30128')
							->get('identitas_karyawan');
		return $query->row();
	}  

	 public function getDataGaji($id) // menfilter ID dari table identitas untuk  
	 {
	 	$query = $this->db->where('emp_no',$id)
	 				  	  ->get('gapok');
	 	if($query->num_rows() > 0 )
	 	{
	 		return $query->row();
	 	}
	 }

	public function selectDepartemen()
	{
		$query =  $this->db->order_by('nama_departemen')
							->get('departemen');
		return $query->result();

	}
	public function selectDivisi()
	{
		$query =  $this->db->order_by('nama_divisi')
						   ->get('divisi');
		return $query->result();
	}
	public function selectJabatan()
	{
		$query =  $this->db->order_by('jabatan')
						   ->get('jabatan');
		return $query->result();
	}
	public function selectCabang()
	{
		$query =  $this->db->order_by('nama_cabang')
							->get('cabang');
		return $query->result();
	}
	// public function selectNama()
	// {
	// 	$query =  $this->db->select('*')
	// 						->get('identitas_karyawan');
	// 	return $query->result();
	// }

	public function selectPtkp()
	{
		$query = $this->db->select('*')
						  ->get('pajak_karyawan');
				return $query->result();
	}

	public function buat($data)
	{
		return $this->db->insert('gapok',$data);
	}

	public function ubah($id,$data)
	{
		return $this->db->where('emp_no',$id)
						->update('gapok',$data);
	}

	public function hapus($id)
	{
		return $this->db->where('emp_no',$id)
						->delete('gapok');
	}


	
}


