<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gapok_M extends CI_Model {

	public function getAll()
	{
		$sql = "SELECT gapok.emp_no,
					   identitas_karyawan.nama_karyawan,
					   departemen.nama_departemen,
					   divisi.nama_divisi,
					   cabang.nama_cabang,
					   jabatan.jabatan,
					   pajak_karyawan.ptkp,
					   gapok,uang_makan
		FROM gapok
		INNER JOIN identitas_karyawan ON identitas_karyawan.emp_no = gapok.emp_no
		INNER JOIN jabatan ON jabatan.id_jabatan = gapok.id_jabatan
		INNER JOIN departemen ON departemen.id_departemen = gapok.id_departemen
		INNER JOIN divisi ON divisi.id_divisi = gapok.id_divisi
		INNER JOIN pajak_karyawan ON pajak_karyawan.emp_no = gapok.emp_no
		INNER JOIN cabang ON cabang.id_cabang = gapok.id_cabang";
		$query =$this->db->query($sql);
		return $query->result();
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

	 public function getId()
	 {
	 	$this->db->select("*");
	 	$this->db->from('gapok');
	 	$this->db->join('identitas_karyawan','identitas_karyawan.emp_no = gapok.emp_no','inner');
	 	$this->db->join('departemen','departemen.id_departemen = gapok.id_departemen','inner');
	 	$this->db->join('divisi','divisi.id_divisi = gapok.id_divisi','innner');
	 	$this->db->join('cabang','cabang.id_cabang = gapok.id_cabang','inner');
	 	$this->db->join('jabatan','jabatan.id_jabatan = gapok.id_jabatan','inner');
	 	$query = $this->db->get();

	 	return $query->result();

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
	public function selectNama()
	{
		$query =  $this->db->select('*')
							->get('identitas_karyawan');
		return $query->result();
	}

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


