<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

  public function  __construct()
  {
    parent::__construct();
    $this->load->model('Employee_M','modelEmployee',true);
    $this->load->helper('url','form','file');
    $this->load->library('excel');

  }

  public function index()
  {
    $title = 'Import Employee data';    
    $konten = '/admin_view/karyawan/employeeUpload';
    $dataEmployee = $this->modelEmployee->getAll();
    $this->load->view('template_admin',compact('konten','dataEmployee','title'));    
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
    $time = $hours.'-'.$minutes.'-'.$second;
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
  $config['max_size'] = 20000;

  $this->load->library('upload', $config);
  $this->upload->initialize($config); 
  
  if (!$this->upload->do_upload('file')) 
   {
    
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('msg','Ada kesalahan dalam upload'); 
   // redirect('absen'); 
   } else {
    
    $media = $this->upload->data();
    $inputFileName = 'upload/'.$media['file_name'];
   
   try {
    $inputFileType = IOFactory::identify($inputFileName);
    $objReader = IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
   } catch (Exception $e) {
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
    'emplid'=>$rowData[0][0],
    'emplname'=>$rowData[0][1],
    'emplstatus'=>$rowData[0][2],
    'joindate' =>$this->convertdate($rowData[0][3]),
    'duedate'=>$rowData[0][4],
    'permdate' =>$rowData[0][5],
    'resigndate'=>$rowData[0][6],
    'status'=>$rowData[0][7],
    'branch'=>$rowData[0][8],
    'division'=>$rowData[0][9],
    'dept'=>$rowData[0][10],
    'sect'=>$rowData[0][11],
    'position'=>$rowData[0][12],
    'jobgrade'=>$rowData[0][13],
    'workperiod'=>$rowData[0][14],
    'gender'=>$rowData[0][15],
    'famst' =>$rowData[0][16],
    'education'=>$rowData[0][17],
    'faculty'=>$rowData[0][18],
    'religion'=>$rowData[0][19],
    'birthplace'=>$rowData[0][20],
    'birthdate'=>$rowData[0][21],
    'age' =>$rowData[0][22],
    'address'=>$rowData[0][23],
    'city'=>$rowData[0][24],
    'zip'=>$rowData[0][25],
    'idcard'=>$rowData[0][26],
    'telkomselphone'=>$rowData[0][27],
    'phone_1' =>$rowData[0][28],
    'phone_2' =>$rowData[0][29],
    'phone_3' =>$rowData[0][30],
    'email' =>$rowData[0][31],
    'npwp' =>$rowData[0][32],
    'npwp_status' =>$rowData[0][33],
    'npwp_address'=>$rowData[0][34],
    'npwp_city'=>$rowData[0][35],
    'npwpzip'=>$rowData[0][36],
    'bank1' =>$rowData[0][37],
    'branch1' =>$rowData[0][38],
    'city1'=>$rowData[0][39],
    'account1'=>$rowData[0][40],
    'accountname1' =>$rowData[0][41],
    'bank2' =>$rowData[0][42],
    'branch2' =>$rowData[0][43],
    'city2' =>$rowData[0][44],
    'account2'=>$rowData[0][45],
    'account_name2'=>$rowData[0][46],
    'spouse'=>$rowData[0][47],
    'birth_date_spouse'=>$rowData[0][48],
    'child1'=>$rowData[0][49],
    'birth_date_child_1'=>$rowData[0][50],
    'education_child'=>$rowData[0][51],
    'child2'=>$rowData[0][52],
    'birth_date_child2'=>$rowData[0][53],
    'educationchild2' =>$rowData[0][54],
    'child3'=>$rowData[0][55],
    'birth_date_child3'=>$rowData[0][56],
    'educationchild3'=>$rowData[0][57],
    'job_category'=>$rowData[0][58],
    'notes'=>$rowData[0][59],
     );

    $this->db->insert('employee',$data);
    $this->session->set_flashdata('msg','Berhasil upload ...!!');   
       
    } 

     redirect('admin/employee');
    }  
 
  }//END OF FUNCTION IMPORT !!

  

 

}

