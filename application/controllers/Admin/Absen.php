<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

  public function  __construct()
  {
    parent::__construct();
    $this->load->model('Absen_M','modelAbsen',true);
    $this->load->helper('url','form','file');
    $this->load->library('excel','rupiah');

  }

  public function index()
  {
    $title = 'Absen Karyawan';    
    $konten = '/admin_view/absen/absenUpload';
    $namaAbsen = $this->modelAbsen->getNama();
    $this->load->view('template_admin',compact('konten','namaAbsen','title'));    
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
  $config['upload_path'] = './upload/file'; 
  $config['file_name'] = $fileName;
  $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
  $config['max_size'] = 20000;

  $this->load->library('upload', $config);
  $this->upload->initialize($config); 
  
  if (!$this->upload->do_upload('file')) 
   {
    
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('msg','Ada kesalahan dalam upload !!'); 
    redirect('admin/absen'); 
   } else {
    
    $media = $this->upload->data();
    $inputFileName = 'upload/file/'.$media['file_name'];
   
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
      
     "emp_no"=> $rowData[0][0],
     "name"=> $rowData[0][1],
     "auto_assign"=> $rowData[0][2],
     "date"=> $this->convertdate($rowData[0][3]),
     "timetable"=> $rowData[0][4],
     "on_duty"=> $rowData[0][5],
     "off_duty"=> $rowData[0][6],
     "clock_in"=> ($rowData[0][7]),
     "clock_out"=> $rowData[0][8],
     "late"=> ($rowData[0][9]),
     "late_bellow"=>$rowData[0][10],
     "late_over"=>$rowData[0][11],
     "early"=> $rowData[0][12],
     "absen"=> $rowData[0][13],
     "sakit"=> $rowData[0][14],
     "cuti"=> $rowData[0][15],
     "unpaid"=> $rowData[0][16],
     "potongan"=> $rowData[0][17],
     "keterangan"=> $rowData[0][18],
     );

    $this->db->insert('absen',$data);
    $this->session->set_flashdata('msg','Berhasil upload ...!!');   

    //echo '<br>';
    //print_r($data);
    //echo var_dump($data);
    //echo '</br>';
       
    } 

     redirect('admin/Absen');
    }  
 
  }//END OF FUNCTION IMPORT !!

  public function getAllAbsen()
  {
    $konten = 'admin_view/absen/absenView';
    $title = 'Data Absen Karyawan ';
    $absenUser =$this->modelAbsen->getAll();
    $pilihUser = $this->modelAbsen->selectUser();
    $this->load->view('template_admin',compact('title','konten','absenUser','pilihUser'));
  }

  public function viewform()
  {
    $konten = 'admin_view/absen/perView';
    $title = ' Cari Data Absen Karyawan';
    $pilihUser = $this->modelAbsen->selectUser();
    $this->load->view('template_admin',compact('konten','title','pilihUser')); 
  }

  public function getAbsenPer()
  {
    $title = 'Tester ';
    $konten = 'admin_view/absen/absenPer';
   
    //$this->form_validation->set_rules('name','name','required');
    $this->form_validation->set_rules('start','start','required');
    $this->form_validation->set_rules('end','end','required'); 
   

    if($this->form_validation->run())
    {
      //$name = $this->input->get('name',true);
      $start = $this->input->post('start',true);
      $end = $this->input->post('end',true);
      $datates=array(
       // 'name'=>$name,
        'start'=>$start,
        'end'=>$end,
      ); 
      $data = $this->modelAbsen->getByDate($start,$end);
     // $count = $this->modelAbsen->getTest();
      $this->load->view('template_admin',compact('konten','title','data','count','title'));
     } else {
      echo validation_errors();
     }
   

  }//end of function getAbsenper


   public function tesQuery()
   {

    $konten = 'admin_view/absen/testview';
    $title = 'Data Absen Karyawan';
    $start= $this->input->get('start');
    $end =$this->input->get('end');
    $data  = $this->modelAbsen->AbsenCount();
    $totalKaryawan = $this->modelAbsen->getTotalKaryawan();
    $this->load->view('template_admin',compact('data','konten','title','totalKaryawan'));
    
   }
   
  


}
