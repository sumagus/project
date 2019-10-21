<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_M extends CI_Model {

	public function getAll()
	{
		
		$this->db->select('*');
		$this->db->from('employee_if_upload');
		$this->db->order_by('emplname','asc');
		$query = $this->db->get();
		return $query->result();

	}

	

	public function insert($data)
	{
		return $this->db->insert('employee_if_upload',$data);
	}

	
}

