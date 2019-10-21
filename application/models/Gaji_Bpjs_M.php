<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs_M extends CI_Model {


	public function hitungBpjs()
	{
		$sql = "SELECT nama_karyawan.identitas_karyawan,gajibpjs,
					   (gajibpjs*0.040) as jht_perusahaan,
					   (gajibpjs*0.020) as jht_karyawan,
					   (gajibpjs*0.024) as jkk_perusahaan,
					   (gajibpjs*0.030) as jk_ppperusahaan
					   from gajibpjs
					   INNER JOIN emp_no on emp_no.identitas_karyawan = emp_no.gajibpjs";

		$query  = $this->db->query($sql);
		return $query->result();
	}


	public function buatGaji($data)
	{
		$query = $this->db->insert('gajibpjs',$data);
		return $query;
	}


}

