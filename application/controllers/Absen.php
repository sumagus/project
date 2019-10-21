<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->model('Absen_M','modelAbsen',true);
		$this->load->helper('url','form','file');
		$this->load->library('excel');
	}

	public function index()
	{		
		$konten = '/admin_view/absen/absenView';
		$dataAbsen = $this->modelAbsen->getAll();
		$this->load->view('template',compact('konten','dataAbsen'));		
	}

  public function convertdate($EXCEL_DATE)
  {
    $year = substr($EXCEL_DATE,6,4);
    $month = substr($EXCEL_DATE,3,2);
    $day = substr($EXCEL_DATE,0,2);
    $actualdate = $year.'-'.$month.'-'.$day;
    return $actualdate; 
  }

  public function convertwaktu($EXCEL_DATE)
  {
    $hours = date('H');
    $minutes = date('i');
    $second = date('s');
    $time = $hours.'-'.$minutes.'-'.$time;
    return $time ;
  }

  public function converttelat($EXCEL_DATE)
  {
    $minutes = date('i');
    $second = date('s');
    $time = $minutes.'-'.$time;
    return $time ;
  }

public function import()
  
  {
    $this->load->library('session');
    
  $fileName = $this->input->post('file', TRUE);
  $config['upload_path'] = './upload/'; 
  $config['file_name'] = $fileName;
  $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
  $config['max_size'] = 10000;

  $this->load->library('upload', $config);
  $this->upload->initialize($config); 
  
  if (!$this->upload->do_upload('file')) 
  {
   $error = array('error' => $this->upload->display_errors());
   $this->session->set_flashdata('msg','Ada kesalah dalam upload'); 
   redirect('absen'); 
  } else {
   $media = $this->upload->data();
   $inputFileName = 'upload/'.$media['file_name'];
   
   try {
    $inputFileType = IOFactory::identify($inputFileName);
    $objReader = IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
   } catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
   }

   $sheet = $objPHPExcel->getSheet(0);
   $highestRow = $sheet->getHighestRow();
   $highestColumn = $sheet->getHighestColumn();

   for ($row = 2; $row <= $highestRow; $row++){  
     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
       NULL,
       TRUE,
       FALSE);
     $data = array(
     "emp_no"=> $rowData[0][0],
     "ac_no"=> $rowData[0][1],
     "no"=> $rowData[0][2],
     "name"=> $rowData[0][3],
     "auto_assign"=> $rowData[0][4],
     "date"=> $this->convertdate($rowData[0][5]),
     "timetable"=> $rowData[0][6],
     "on_duty"=> $rowData[0][7],
     "off_duty"=> $rowData[0][8],
     "clock_in"=> $rowData[0][9],
     "clock_out"=> $rowData[0][10],
     "normal"=> $rowData[0][11],
     "real_time"=>$rowData[0][12],
     "late"=> $this->convertwaktu($rowData[0][13]),
     "late_bellow"=>$this->converttelat($rowData[0][14]),
     "late_over"=>$this->converttelat($rowData[0][15]),
     "early"=> $rowData[0][16],
     "absen"=> $rowData[0][17],
     "sakit"=> $rowData[0][18],
     "cuti"=> $rowData[0][19],
     "unpaid"=> $rowData[0][20],
     "potongan"=> $rowData[0][21],
     "keterangan"=> $rowData[0][22],
    );
    $this->db->insert("absen",$data);
    $this->session->set_flashdata('msg','Berhasil upload ...!!'); 
   redirect('Absen');
   } 
   
  }  
 
  }//END OF FUNCTION IMPORT !!


  public function absenUser($id)
  {

    
  }
}
