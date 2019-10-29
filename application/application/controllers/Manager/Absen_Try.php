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


  public function index($error = NULL)
    {
        $data = array(
            'action' => site_url('absen/import'),
            'judul' => set_value('judul'),
            'error' => $error['error'], // ambil parameter error
            'konten'=> site_url('/admin/absen/absenview'),
        );
        $this->load->view('template',$data);
    }

    public function import()
    {
        // validasi judul
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            // jika validasi judul gagal
            $this->index();
        } else {
            // config upload
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'xls|xlsx|csv';
            $config['max_size'] = '10000';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('file')) {
                // jika validasi file gagal, kirim parameter error ke index
                $error = array('error' => $this->upload->display_errors());
                $this->index($error);
            } else {
              // jika berhasil upload ambil data dan masukkan ke database
              $upload_data = $this->upload->data();
              // load library Excell_Reader
              $this->load->library('Excel_reader');
              //tentukan file
              $this->excel_reader->setOutputEncoding('230787');
              $file = $upload_data['full_path'];
              $this->excel_reader->read($file);
              error_reporting(E_ALL ^ E_NOTICE);
              // array data
              $data = $this->excel_reader->sheets[0];
              $dataexcel = Array();
              for ($i = 1; $i <= $data['numRows']; $i++) {
                   if ($data['cells'][$i][1] == '')
                       break;
                   $dataexcel[$i - 1]['emp_no'] = $data['cells'][$i][1];
                   $dataexcel[$i - 1]['ac_no'] = $data['cells'][$i][2];
                   $dataexcel[$i - 1]['no'] = $data['cells'][$i][3];
                   $dataexcel[$i - 1]['name'] = $data['cells'][$i][4];
                   $dataexcel[$i - 1]['auto_assign'] = $data['cells'][$i][5];
                   $dataexcel[$i - 1]['date'] = $data['cells'][$i][6];
                   $dataexcel[$i - 1]['timetable'] = $data['cells'][$i][7];
                   $dataexcel[$i - 1]['on_duty'] = $data['cells'][$i][8];
                   $dataexcel[$i - 1]['off_duty'] = $data['cells'][$i][9];
                   $dataexcel[$i - 1]['clock_in'] = $data['cells'][$i][10];
                   $dataexcel[$i - 1]['clock_out'] = $data['cells'][$i][11];
                   $dataexcel[$i - 1]['normal'] = $data['cells'][$i][12];
                   $dataexcel[$i - 1]['real_time'] = $data['cells'][$i][13];
                   $dataexcel[$i - 1]['late'] = $data['cells'][$i][14];
                   $dataexcel[$i - 1]['late_bellow'] = $data['cells'][$i][15];
                   $dataexcel[$i - 1]['late_over'] = $data['cells'][$i][16];
                   $dataexcel[$i - 1]['early'] = $data['cells'][$i][17]; 
                   $dataexcel[$i - 1]['izin'] = $data['cells'][$i][18];
                   $dataexcel[$i - 1]['absen'] = $data['cells'][$i][19];
                   $dataexcel[$i - 1]['sakit'] = $data['cells'][$i][20];
                   $dataexcel[$i - 1]['cuti'] = $data['cells'][$i][21];
                   $dataexcel[$i - 1]['unpaid'] = $data['cells'][$i][22];
                   $dataexcel[$i - 1]['potongan'] = $data['cells'][$i][23];
                   $dataexcel[$i - 1]['keterangan'] = $data['cells'][$i][24]; 

              }
              //load model
              $this->load->model('Data_Model');
              $this->Data_model->loaddata($dataexcel);
              //delete file
              $file = $upload_data['file_name'];
              $path = './upload/' . $file;
              unlink($path);
            }
        //redirect ke halaman awal
        redirect(site_url('out'));
        }
    }
}

}
