<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Model extends CI_Model {

    function loaddata($dataarray) {
        for ($i = 0; $i < count($dataarray); $i++) {
            $data = array(
                'emp_no' => $dataarray[$i]['emp_no'],
                'ac_no' => $dataarray[$i]['ac_no'],
                'no' => $dataarray[$i]['no'],
                'name'=> $dataarray[$i]['name'],
                'auto_assign'=> $dataarray[$i]['auto_assign'],
                'date'=>$dataarray[$i]['date'],
                'timetable'=>$dataarray[$i]['timetable'],
                'on_duty'=>$dataarray[$i]['on_duty'],
                'off_duty'=>$dataarray[$i]['off_duty'],
                'clock_in'=>$dataarray[$i]['clock_in'],
                'clock_out'=>$dataarray[$i]['clock_out'],
                'normal'=>$dataarray[$i]['normal'],
                'real_time'=>$dataarray[$i]['real_time'],
                'late'=>$dataarray[$i]['late'],
                'late_bellow'=>?$dataarray[$i]['late_bellow'],
                'late_over'=>$dataarray[$i]['late_over'],
                'early'=>$dataarray[$i]['early'],
                'izin'=>$dataarray[$i]['izin'],
                'absen'=>$dataarray[$i]['absen'],
                'sakit'=>$dataarray[$i]['sakit'],
                'cuti'=>$dataarray[$i]['cuti'],
                'unpaid'=>$dataarray[$i]['unpaid'],
                'potongan'=>$dataarray[$i]['potongan'],
                'keterangan'=>$dataarray[$i]['keterangan']
            );
                $this->db->insert('absen', $data);
            }
        }
}



 