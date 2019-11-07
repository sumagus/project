<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_M extends CI_Model {


	public function selectNama()
	{
		$query = $this->db->order_by('emp_no','asc')
						  ->get('identitas_karyawan');

						  return $query->result();
	}

	public function getGapok($emp_no)
	{
		if($emp_no!='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$q = $this->db->get('gapok');
		$data = [];
		foreach ($q->result() as $key => $v) {
			$data[$v->emp_no] = $v->gapok;
		}

		return $data;
	}

	public function getUangMakan($emp_no='')
	{
		if($emp_no !='')
		{
			$this->db->where('gapok',$emp_no);
		}
		$q = $this->db->get('gapok');
		$data = [];
		foreach ($q->result() as $key => $v) {
			$data[$v->emp_no] = $v->uang_makan;	
		}
		return $data;
	}


	public function getTunjangan($emp_no ='')
	{
		if($emp_no!='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$this->db->select('SUM(jumlah) as jumlah,emp_no');
		$this->db->group_by('emp_no');
		$q = $this->db->get('tunjangan_karyawan');
		$data = [];
		foreach ($q->result() as $tunjangan) {
			$data[$tunjangan->emp_no] = $tunjangan->jumlah; 
		}
		return $data;
	}

	public function getLembur($start='',$end='',$emp_no='')
	{
		if($emp_no!='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$this->db->select('SUM(uang_lembur) as lembur,emp_no');
		if ($start!='' && $end!='') 
		{
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
			$data[$p->emp_no] = $p->unpaid;
		}

		return $data;

	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//															FILTER DATA PER ORANG																   //


	public function getFilterGapok($emp_no)
	{
		if($emp_no!='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$q = $this->db->get('gapok');
		
		return $q->result();
	}

	public function getFilterUangMakan($emp_no='')
	{
		if($emp_no !='')
		{
			$this->db->where('gapok',$emp_no);
		}
		$q = $this->db->get('gapok');
		return $q->result();
	}


	public function getFilterTunjangan($emp_no ='')
	{
		if($emp_no!='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$this->db->select('SUM(jumlah) as jumlah,emp_no');
		$this->db->group_by('emp_no');
		$q = $this->db->get('tunjangan_karyawan');
		return $q->result();
	}

	public function getFilterLembur($start='',$end='',$emp_no='')
	{
		if($emp_no!='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$this->db->select('SUM(uang_lembur) as lembur,emp_no');
		if ($start!='' && $end!='') 
		{
			$this->db->where('tanggal >=',date('Y-m-d',strtotime($start)));
			$this->db->where('tanggal <=',date('Y-m-d',strtotime($end)));	
		}
		$this->db->group_by('emp_no');
		$q = $this->db->get('lembur');
		return $q->result();
	}

	public function getFIlterPotongan($start='',$end='')
	{
		$this->db->select('SUM(unpaid) as unpaid,emp_no');
		if($start!='' && $end!='')
		{
			$this->db->where('date>=', date('Y-m-d',strtotime($start)));
			$this->db->where('date<=', date('Y-m-d',strtotime($end)));
		}
		$this->db->group_by('emp_no');
		$q = $this->db->get('absen');
		
		return $q->result();
	}


	 // Mengambil data BPJS dari database yang bersifat dinamis
	public function getGajiBpjs($emp_no)
	{
		if($emp_no !='')
		{
			$this->db->where('emp_no',$emp_no);
		}
		$q = $this->db->get('gajibpjs');
		$data = [];
		foreach ($q->result() as $key => $v) {
			$data[$v->emp_no] = $v->gaji_bpjs;
		}
		return $data;
	}
	

	public function getJHTperusahaan() // mendapatkan nilai persentase dari perusahaan
	{

		$where ="id_bpjs = '1'";

		$this->db->select('perusahaan as JHTperusahaan ');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->JHTperusahaan;
		
	}

	public function getJHTkaryawan() // mendapatkan nilai persentase dari karyawan
	{

		$where = "id_bpjs = '1'";

		$this->db->select('pegawai as JHTkaryawan');
		$this->db->where('id_bpjs',1);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->JHTkaryawan;
	}

	public function getJKKperusahaan() // mendapatkan nalai persentase dari  JKK yang di bayar perusahaan 
	{
		$where = "id_bpjs ='2'";

		$this->db->select('perusahaan as JKKperusahaan');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->JKKperusahaan;
	}

	public function getJKperusahaan() // mendapatkan nilai persentase dari JK yang di bayar perusahaan 
	{
		$where = "id_bpjs ='3'";

		$this->db->select('perusahaan as JKperusahaan');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->JKperusahaan;
	}

	public function getJPperusahaan() //mendapatkan nilai persentase dari Jaminan pensiun yang di bayar perusahaan
	{
		$where = "id_bpjs = '4'";
		$this->db->select('perusahaan as JPperusahaan');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->JPperusahaan;
	}

	public function getJPkaryawan() // mendapatkan  nilai persentase dari jaminan pensiun uyang di bayar karyawan
	{
		$where = "id_bpjs='4'";
		$this->db->select('pegawai as JPkaryawan');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->JPkaryawan;
	}

	public function getJKESperusahaan()  // mendapatkan nilai persentase jaminan kesehatan yang di bayar oleh perusahaan
	{
		$where = "id_bpjs='5'";
		$this->db->select('perusahaan as getJKESperusahaan');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->getJKESperusahaan;
	}

	public function getJKESkaryawan() // mmendapatkan nilai persentase jaminan kesehatan yang di bayar oleh karyawan
	{
		$where = "id_bpjs='5'";
		$this->db->select('pegawai as getJKESkaryawan');
		$this->db->where($where);
		$this->db->from('bpjs');
		$query = $this->db->get();
		return $query->row()->getJKESkaryawan;
	}

	public function getBpjs($id)
	{
		$this->db->where('id_bpjs',$id);
		$this->db->select('perusahaan as BpjsPerusahaan','pegawai as BpjsKaryawan','persentase as TotalPersentase');
		$this->db->from('bpjs');
		$q = $this->db->get();
		return $q->result();
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


