<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_M extends CI_Model {

	
	public function getall() // 
	{	
		 $this->db->select('*');
		 $this->db->from('karyawan');
		 $this->db->order_by('tgl_masuk','desc');
		 $this->db->join('jabatan', 'jabatan.id_jabatan = karyawan.id_jabatan');
		 $query = $this->db->get();
		 return $query->result();
		 
	}

	public function getby($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->get('identitas_karyawan');
		return $query->row();
	}
	public function ubahKaryawan($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->update('karyawan');
		return $query->row(); 
	}
	public function hapus($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->delete('karyawan');
			return $query ;		
	}

	public function buatKaryawan($dataKaryawan)
	{
		$query = $this->db->insert('karyawan',$dataKaryawan);
		return $query; 
		
	}
	 
	 public function selectJabatan()
	 {
	 	$query = $this->db->order_by('jabatan','desc')
	 				      ->get('jabatan');
	 					  
	 	return $query->result();
	 }

	
//<!--------------------------------------------------------IDENTITAS KARYAWAN------------------------------------------------------------//

	 public function rulesIdentitas()
	 {
	 	return [

	 		['field'=>'emp_no', 'label'=>'ID','rules'=>'trim|required|is_unique[identitas_karyawan.emp_no]',array("is_unique"=>"Id Telah di Gunakan")],
	 		[	'field'=>'ktp', 'label'=>'KTP','rules'=>'trim|required|numeric'],
	 		[	'field'=>'nama_karyawan', 'label'=>'Nama','rules'=>'trim|required'],
	 		[	'field'=>'gender', 'label'=>'gender','rules'=>'trim|required'],
	 	];
	 }

	 public function validasiIdentitas() // proses validasi dari form untuk pengisian identitas karyawan
	 {
	 	$this->load->library('form_validation');
	 	$rules= $this->rulesIdentitas();
	 	$this->form_validation->set_rules($rules);
	 	$this->form_validation->set_error_delimiters('<p class ="text-red">');
	 	return $this->form_validation->run();
	 }
	 public function buatIdentitasKaryawan($identitasKaryawan)
	 {
	 	$query = $this->db->insert('identitas_karyawan',$identitasKaryawan);
	 	return $query ;
	 }
	 public function updateIdentitas($id)
	 {
	 	$query = $this->db->where('emp_no',$id)
	 						->update('identitas_karyawan');
	 						return $query ; 
	 }

	 public function getAllIdentitas() // mendapatkan semua data yang ada ppada database identitas
	 {
	 	$query = $this->db->get('identitas_karyawan')->result();
	 					
	 					return $query ;
	 }

	 public function getIdentitas($id) // menfilter ID dari table identitas untuk  
	 {
	 	$query = $this->db->where('emp_no',$id)
	 				  	  ->get('identitas_karyawan');
	 	if($query->num_rows() > 0 )
	 	{
	 		return $query->row();
	 	}
	 }
	 public function hapusIdentitas($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->delete('identitas_karyawan');
			return $query ;		
	}

	//<!------------------------------------------------- MODEL FOR PERSONAL -----------------------------------------------------------//
	//<!-------------------------------------------------TABEL PERSONAL KARYAWAN -----------------------------------------------------------//

	public function getPersonal($id)
	{
		$query = $this->db->where('emp_no',$id)
	 				  	  ->get('personal_karyawan');
	 	if($query->num_rows() > 0 )
	 	{
	 		return $query->row();
	 	}

	}

	public function buatPersonal($data)
	{
		$query = $this->db->insert('personal_karyawan',$data);
		return $query ;
	}

	public function ubahPersonal($id,$data)
	{
		$query = $this->db->where('emp_no',$id)
						  ->update('personal_karyawan',$data);
		return $query ;
	}


//<!------------------------------------------------- MODEL FOR KONTAK -----------------------------------------------------------//
//<!-------------------------------------------------TABEL KONTAK KARYAWAN -----------------------------------------------------------//

public function getKontak($id)
	{
		$query = $this->db->where('emp_no',$id)
	 				  	  ->get('kontak_karyawan');
	 	if($query->num_rows() > 0 )
	 	{
	 		return $query->row();
	 	}

	}

	public function buatKontak($dataKontak)
	{
		$query = $this->db->insert('kontak_karyawan',$dataKontak);
		return $query ;
	}

	public function ubahKontak($id,$datakontak)
	{
		$query = $this->db->where('emp_no',$id)
						  ->update('kontak_karyawan',$datakontak);
						return $query;
	}
	


//<!------------------------------------------------- MODEL FOR PENGALAMAN -----------------------------------------------------------//
//<!-------------------------------------------------TABEL PENGALAMAN_KARYAWAN -----------------------------------------------------------//

public function getPengalaman($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->get('pengalaman_karyawan');
		if($query ->num_rows() > 0 )
		{
			return $query->result();
		}

	}

	public function buatPengalaman($dataPengalaman)
	{
		$query = $this->db->insert('pengalaman_karyawan',$dataPengalaman);
		return $query ;
						  
	}

//<!------------------------------------------------- MODEL FOR PENDIDIKAN -----------------------------------------------------------//
//<!-------------------------------------------------TABEL PENDIDIKAN KARYAWAN -----------------------------------------------------------//

public function getPendidikan($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->get('pendidikan_karyawan');
		if($query->num_rows() > 0 )
		{
			return $query->result();
		}


	}

	public function buatPendidikan($dataPendidikan)
	{
		$query = $this->db->insert('pendidikan_karyawan',$dataPendidikan);
		return $query ;
	}

	public function selectPendidikan()
	{
		$this->db->select('jenjang');
		$this->db->from('pendidikan_karyawan');
		$query = $this->db->get();
		return $query->result();

	}




//<!------------------------------------------------- MODEL FOR KELUARGA -----------------------------------------------------------//
//<!-------------------------------------------------TABEL KELUARGA KARYAWAN -----------------------------------------------------------//

public function getKeluarga($id)
	{

		$query = $this->db->where('emp_no',$id)
							->get('keluarga_karyawan');
				if($query->num_rows() >= 0 ) 
				{
					return $query->result();
				}

	}

	public function buatKeluarga($dataKeluarga)
	{
		$this->db->insert('keluarga_karyawan',$dataKeluarga);
		return $query;
	}




	//<!------------------------------------------------- MODEL FOR Pajak------------------------------------------------------------//
//<!-------------------------------------------------TABEL Pajak -----------------------------------------------------------//

	public function getPajak($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->get('pajak_karyawan');
		if($query->num_rows()>=0)
		{
			return $query->row();
		}
	}

	public function buatPajak($dataPajak)
	{
		$query = $this->db->insert('pajak_karyawan',$dataPajak);
		return $query;	
	}

	public function ubahPajak($id,$data)
	{
		$query = $this->db->where('emp_no',$id)
						  ->update('pajak_karyawan',$data);
						  return $query;
	}


	public function deletePajak($id)
	{
		$query = $this->db->where('id_pajak',$id)
						  ->get('pajak_karyawan');
						  return $query;

	}



	//<!------------------------------------------------- MODEL FOR Tunjangan------------------------------------------------------------//
//<!-------------------------------------------------TABEL Tunjangan -----------------------------------------------------------//



	public function getTunjangan($id)
	{
		$query = $this->db->where('emp_no',$id)
						  ->get('tunjangan_karyawan');
		if($query->num_rows()>=0)
		{
			return $query->result();
		}
	}

	public function buatTunjangan($dataTunjangan)
	{
		$query = $this->db->insert('tunjangan_karyawan',$dataTunjangan);
		return $query;	
	}

	public function ubahTunjangan($id,$data)
	{
		$query = $this->db->where('emp_no',$id)
						  ->update('tunjangan_karyawan',$data);
						  return $query;
	}


	public function deleteTunjangan($id)
	{
		$query = $this->db->where('id_pajak',$id)
						  ->get('pajak_karyawan');
						  return $query;

	}	







	



	 

}// end of class model karyawan 
