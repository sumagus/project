<style type ="text/css">
body {
  font-family:arial;
}
@media print{  
  .no-print{
    display: none;
  }
}
  
</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perhitungan Gaji Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/Absen")?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perhitungan Gaji Karyawan Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="#" class="no-print btn btn-info" onclick="window.print();">Print / Cetak</a>
              <hr>
               <div class="row">
                <form method="get" autocomplete="off">
                 <div class="col-xs-3">
                  <label>Nama <?php echo $emp_no ?></label>
                  <select name ="emp_no" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihNama as $tampil):?>
                  <option <?php echo ($emp_no == $tampil->emp_no)?"selected":''?> value="<?php echo $tampil->emp_no?>"><?php echo $tampil->nama_karyawan?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="col-xs-3">
                  <label>Tanggal Awal</label>
                  <input type="text" name= "start" class="form-control" placeholder="Start" id="start" value="<?php echo $start ?>">
                </div>
                  <div class="col-xs-3">
                    <label>Tanggal Akhir</label>
                  <input type="text"  name ="end" class="form-control" placeholder="End" id="end" value="<?php echo $end ?>">
                </div>
              </div>
              </div class="row no-print">
                <div class="col-xs-3">
                  <button type="submit" class="btn btn-primary btn-md">Filter</button>
                </div>
               
              </form>
             <hr>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gapok</th>
                    <th>Total Lembur</th>
                    <th>Total Tunjangan</th>
                    <th>Total Potongan</th>
                    <th>Total JHT Karyawan</th>
                    <th>Total JKK Perusahaan</th>
                    <th>Total JK Perusahaan</th>
                </tr>
                </thead>
               <tbody>
                <?php foreach($pilihNama as $tampil):?>
                  <?php $gaji = isset($gapok[$tampil->emp_no])?$gapok[$tampil->emp_no]:0; ?>
                <tr> 
                  <td><?php echo $tampil->emp_no.' | '.$tampil->nama_karyawan ?></td>
                  <td><?= $gaji ?></td>
                  <td><?= isset($lembur[$tampil->emp_no])?$lembur[$tampil->emp_no]:0 ?></td>
                  <td><?= isset($tunjangan[$tampil->emp_no])?$tunjangan[$tampil->emp_no]:0 ?></td>
                  <td><?= isset($potongan[$tampil->emp_no])?$potongan[$tampil->emp_no]:0?></td> 
                  <td><?= $gaji*0.020 ?></td>
                  <td><?= $gaji*0.024 ?></td>
                  <td><?= $gaji*0.03 ?></td>
                  <td></td>
                </tr> 
              <?php endforeach; ?>
               </tbody>
               
                
                <!--<tfoot>
                  <tr>
                    <td colspan="5" align="left"><b>Total</b></td>
                    <td colspan="3"><b><?php echo number_format($total,0,',','.') ?></b></td>
                  </tr>
                  <tr>
                    <td colspan="5" align="left"><b>Jumlah </b></td>
                    <td colspan="2"><b><?php echo $no ?></b></td>
                  </tr>
                </tfoot>-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Indo Mega Vision .</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- Jquery --->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
 <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

 <script>
    $('#start').datepicker({
      viewMonth:true,
      viewYears:true,
      autoclose: true,
      orientation :"bottom left",
      //daysOfWeekDisabled: "0,6",
      todayHighlight : true,
      minDate: "-3",
      format : 'dd-mm-yyyy',
      
    });
    $('#end').datepicker({
      viewMonth:true,
      viewYears:true,
      autoclose: true,
      orientation :"bottom left",
      //daysOfWeekDisabled: "0,6",
      todayHighlight : true,
      minDate: "-3",
      format : 'dd-mm-yyyy',

    });
</script>


  