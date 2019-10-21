<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_M extends CI_Model {

	
	public function getall()
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
		$query = $this->db->where('id_karyawan',$id)
						  ->get('karyawan');
		return $query->row();
	}
	public function ubahKaryawan($id)
	{
		$query = $this->db->where('id_karyawan',$id)
						  ->update('karyawan');
		return $query->row(); 
	}
	public function delete($id)
	{
		$query = $this->db->where('id_karyawan',$id)
						  ->delete('karyawan',$id);
	}

	public function buatKaryawan($data)
	{
		$this->db->insert('karyawan',$data);
		
	}
	 
	 public function formRule()
	 {
	 	return [
	 		[  	'field'=>'id_karyawan',	'label'=>'ID', 		'rules'=>'required|is_unique[karyawan.id_karyawan]' ],
	 		[	'field'=>'nama',		'label'=>'Nama',	'rules'=>'required' ],		 
	 		[	'field'=>'nik',			'label'=>'NIK',		'rules'=>'required|numeric'],
	 		[	'field'=>'jabatan',		'label'=>'Jabatan',	'rules'=>'required'	],
	 		
	 	];

	 }

	 public function formDefaultBiodata()
	 {
	 	return [
	 		'id_karyawan'=>'',
	 		'nama'=>'',
	 		'nik'=>'',
	 		
	 	];
	 }
	 
	 public function validasiBiodata()
	 {
	 	$this->load->library('form_validation');
	 	$rules = $this->formRules();
	 	$this->form_validation->set_rules($rules);
	 	$this->form_validation->set_error_delimiters('<p class="text-danger">');
	 	$this->form_validation->run();
	 }

	 public function dropDownJabatan()
	 { //HV VERSION
	 	$this->db->order_by('jabatan','asc');
	 			$result =$this->db->get('jabatan');
	 			$dd[''] = 'please select';
	 			if($result->num_rows()>0)
	 			{
	 				foreach ($result->result() as $row)
	 				{
	 					$dd['$row->id_jabatan'] = $row->jabatan;
	 				}
	 				return $dd;
	 			}
	 }
	 
	 public function options_jabatan($id)
	 { // DP VERSION SELECT 
		$jabatan = $this->db->order_by('jabatan')->get('jabatan');
		return options($jabatan, 'id_jabatan', $id, 'jabatan');
	 }

	 public function selectJabatan()
	 {
	 	$query = $this->db->order_by('jabatan','asc')
	 					  ->get('jabatan');
	 	return $query->result(); 
	 }

	 public function optionAnak()
	 {
	 	$query = $this->db->order_by('anak','desc')
	 					  ->get('karyawan');
	 			return $query->result();
	 }

	 public function optionStatus()
	 {
	 	$query = $this->db->order_by('status','desc')
	 					  ->get('keluarga');
	 		return $query->result(); 
	 }

	 public function optionJenjang()
	 {
	 	$query = $this->db->order_by('jenjang','desc')
	 					->get('pendidikan');
	 	return $query->result();
	 }


	 public function formDefaultKontak()
	 {
	 	return
	 	[
	 		'alamat'=>'',
	 		'email'=>'',
	 		'telp'=>'',
	 		'hp'=>''
	 	];
	 }
	 
	 public function formRuleKontak()
	 {
	 	return [
	 		['field'=>'alamat', 'label'=>'Alamat','rules'=>'trim|required'],
	 		['field'=>'email', 'label'=>'Email','rules'=>'trim|required|valid.emails'],
	 		['field'=>'telp', 'label'=>'Telp','rules'=>'trim|required|numeric'],
	 		['field'=>'hp', 'label'=>'hp','rules'=>'trim|required|numeric']
	 	];

	 }
	 public function validasiKontak()
	 
	 {
	 	$this->load->library('form_validation');

	 	$rules= $this->formRuleKontak();
	 	$this->form_validation->set_rules($rules);
	 	$this->form_validation->set_error_delimiters('<p class="text-red"></p>');
	 	return $this->form_validation->run();
	 }

	 public function formDefaultPendidikan()
	 {
	 	return [
	 		'jenjang'=>'',
	 		'institusi'=>'',
	 		'jurusan'=>'',
	 		'fakultas'=>'',
	 		'thn_masuk'=>'',
	 		'thn_keluar'=>''
	 	];
	 }

	 public function formRulePendidikan()
	 {
	 	return[
	 		['field'=>'jenjang[]', 'label'=>'Jenjang','rules'=>'trim|required'],
	 		['field'=>'institu[]si', 'label'=>'Institusi','rules'=>'trim|required'],
	 		['field'=>'jurusan[]', 'label'=>'Jurusan','rules'=>'trim|required'],
	 		['field'=>'fakultas[]', 'label'=>'Fakultas','rules'=>'trim|required'],
	 		['field'=>'thn_masuk[]', 'label'=>'Thn_Masuk','rules'=>'trim|required|numeric'],
	 		['field'=>'thn_keluar[]', 'label'=>'Thn_Keluar','rules'=>'trim|required|numeric'],
	 		['field'=>'nilai[]', 'label'=>'Nilai','rules'=>'trim|required|numeric'],
	 	];
	 }

	 public function validasiPendidikan()
	 {
	 	$this->load->library('form_validation');
	 	$rules = $this->formRulePendidikan();
	 	$this->form_validation->set_rules('$rules');
	 	$this->form_validation->set_error_delimiters('<p class="tet-red"></p>');
	 	return $this->form_validation->run();
	 }

	 public function formDefaultPengalaman()
	 {
	 	return [
	 	'perusahaan'=>'',
	 	'posisi'=>'',
	 	'thn_masuk'=>'',
	 	'thn_keluar'=>'',
	 	'gaji'=>'',
	 	'keterangan'=>''
	 	];
	 }

	 public function formRulePengalaman()
	 {
	 	return
	 	[
	 		['field'=>'perusahaan','label'=>'','rules'=>''],
	 		['field'=>'posisi','label'=>'','rules'=>''],
	 		['field'=>'thn_masuk','label'=>'','rules'=>''],
	 		['field'=>'thn_keluar','label'=>'','rules'=>''],
	 		['field'=>'gaji','label'=>'','rules'=>''],
	 		['field'=>'keterangan','label'=>'','rules'=>''],

	 	];
	 }

	 public function validasiPengalaman()
	 {
	 	$this->load->library('form_validation');
	 	$rules = $this->formRulepengalaman();
	 	$this->form_validation->set_rules($rules);
	 	$this->form->validation->set_error_delimiters('<p class="text-red">');
	 	return $this->form_validation->run();

	 }

	 /*public function formDefaultPendidikan()
	 {
	 	return
	 	[
	 		'id_pendidikan'=>'',
	 		'id_karyawan'=>'',
	 		'jenjang'=>'',
	 		'institusi'=>'',
	 		'jurusan'=>'',
	 		'fakultas'=>'',
	 		'thn_masuk'=>'',
	 		'thn_lulus'=>'',
	 		'nilai'=>''
	 	];
	 }*/

	 public function ruleFormPendidikan()
	 {
	 	return
	 	[
	 		['field'=>'id_pendidikan', 'label'=>'ID_Pendidikan', 'rules'=>'trim|required|numeric'],
	 		['field'=>'id_karyawan','label'=>'ID_Karyawan','rules'=>'trim|required|numeric'],
	 		['field'=>'jenjang','label'=>'Jenjang','rules'=>'trim|required'],
	 		['field'=>'institusi','label'=>'Institusi','rules'=>'trim|required'],
	 		['field'=>'jurusan','label'=>'Jurusan','rules'=>'trim|required'],
	 		['field'=>'fakultas','label'=>'fakultas','rules'=>'trim|required'],
	 		['field'=>'thn_masuk','label'=>'Thn_Masuk','rules'=>'trim|required|numeric'],
	 		['field'=>'Thn_lulus','label'=>'Thn_Lulus','rules'=>'trim|required|numeric'],
	 		['field'=>'nilai','label'=>'Nilai','rules'=>'trim|required'],
	 	];
	 }

	 public function validasiPendidikan()
	 {
	 	$this->load->library('form_validation');
	 	$rules = $this->formRulePendidikan();
	 	$this->form_validation->set_rules($rules);
	 	$this->form_validation->set_error_delimiters('<p class = "text--red">');
	 	$this->form_validation->run();
	 }
	 	

	public function formDefaultKeluarga()
	{
		return
		[
			'id_keluarga'=>'',
			'id_karyawan'=>'',
			'nama'=>'',
			'status'=>'',
			'gender'=>'',
			'pendidikan'=>'',
			'alamat'=>'',
			'kontak'=>'',
			'pekerjaan'=>'',
		];
	}	 

	public function  ruleFormKeluarga()
	{
		return [
			['field'=>'id_keluarga', 'label'='ID_Keluarga', 'rules'=>'trim|required|numeric'],
			['field'=>'id_karyawan', 'label'='ID_Karyawan', 'rules'=>'trim|required|numeric'],
			['field'=>'nama', 'label'='Nama', 'rules'=>'trim|required'],
			['field'=>'status', 'label'='status', 'rules'=>'trim|required'],
			['field'=>'gender', 'label'='gender', 'rules'=>'trim|required'],
			['field'=>'pendidikan', 'label'='Pendidikan', 'rules'=>'trim|required'],
			['field'=>'alamat', 'label'='alamat', 'rules'=>'alamat'],
			['field'=>'kontak', 'label'='kontak', 'rules'=>'trim|required'],
		];
	}

	public function validasiKeluarga()
	{
		$this->load->library('form_validation');
		$rules = $this->ruleFormKeluarga();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<p class ="text-red">');
		return $this->form_validation->run();
	}

}

