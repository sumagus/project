<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_M extends CI_Model {

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->order_by('name','asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getNama()
	{
		$this->db->distinct();
		$this->db->select('emp_no,name,date');
		$this->db->from('absen');
		$this->db->group_by('name');
		$query = $this->db->get();
		return $query->result();
	}

	public function viewBy($id)
	{
		$this->db->distinct();
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->where('emp_no',$id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return array();
		}

}

	public function getTest()
	{	
		
		$sql = "SELECT count(potongan) as jumlahpotongan from absen " ;
				$query = $this->db->query($sql);
				return $query->row();
	}
	public function getByDate($start,$end)
	{
		$this->db->select('*');
		//$this->db->where('name',$name);
		$this->db->where('date>=',$start);
		$this->db->where('date<=',$end);
		$this->db->from('absen');
		$this->db->group_by('nama');
		$query = $this->db->get();
		return $query->result();	
	}

	public function tampilDistinct($emp_no,$nama,$month,$totalTelat,$potongan)
	{
		$this->db->distinct();
		$this->db->select('emp_no','nama','date','totaltelat','potongan');
		$this->db->from('absen');
		$query = $this->db->get();
		return $query;
	}

	public function dataAbsen()
	{
		$this->db->distinct();
		$this->db->select('name','MONTH(date)');
		$this->db->order_by('name','asc');
		$this->db->from('absen');
		$query =  $this->db->get();
		return $query->result();
	}

	public function hitungCuti($id,$nama,$bulan,$jumlah)
	{
		$this->db->where('emp_no',$id );
		$this->db->where('name',$nama );
		$this->db->where('date',$bulan );
		$this->db->where('cut',$jumlah );
		$this->db->from('absen');
		$query = $this->db->get();
		return $query->result();
	}


	public function insert($data)
	{
		return $this->db->insert('absen',$data);
	}

	public function view()
	{
		return $this->db->get('absen')->result();
	}

	public function upload_file($filename)
	{
		$this->load->library('upload');
		
		$config['upload_path'] ='.excel/';
		$config['allowed_types'] ='xlsx';
		$config['file_name'] = $filename;

		$this->upload->initialize($config);
		if($this->upload->do_upload('file'))
		{
			$return = array('result' => 'success', 'file'=>$this->upload->data(), 'error'=>'' ); 
			return $return ;
		} else {
			$return = array ('result'=>'failed', 'file'=>'', 'error'=>$this->upload->display_errrors());
			return $return ; 
		}

	}

	public function insert_multiple($data)
	{
		$this->db->insert_batch('absen',$data);
	}
	

	public function filterBy($start,$end)
	{
		$this->db->select('*');
		$this->db->where('date',$start);
		$this->db->where('date',$end);
		$this->db->from('absen');
		$query = $this->db->get();
		return $query->result();

	}


	public function selectUser()
	{
		 $this->db->distinct();
		 $this->db->select('name');
		 $this->db->order_by('name','asc');
		 $this->db->from('absen');
		 $query = $this->db->get();
		 return $query->result(); 
	}
	//-----------------------------------------------------------------------------------------------------------------------------------------------------------//
	public function AbsenCount()
	{
		
		$sql = "SELECT *,count(if(unpaid = '1',unpaid,null)) as total_unpaid,count(if(cuti ='1',cuti,null)) as total_cuti,count(if(sakit='1',sakit,null)) as total_sakit,count(if(absen='1',absen,null)) as total_absen
		from absen group by name";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getTotalKaryawan()
	{
		$sql= "SELECT count('name') as totalKaryawan from absen group by name ";
		$query = $this->db->query($sql);
		return $query->row()->totalKaryawan;
	}


	


}

