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
        Data Absen Karyawan
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
              <h3 class="box-title">Data Absen Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="#" class="no-print btn btn-info" onclick="window.print();">Print / Cetak</a>
              <hr>
               <div class="row">
                <form method="get">
                <div class="col-xs-3">
                  <label>Tanggal Awal</label>
                  <input type="text" name= "start" class="form-control" placeholder="Start" id="start" value="<?php echo $start ?>">
                </div>
                  <div class="col-xs-3">
                    <label>Tanggal Akhir</label>
                  <input type="text"  name ="end" class="form-control" placeholder="End" id="end" value="<?php echo $end ?>">
                </div>
              </div>
              </div class="row">
                <div class="col-xs-3 no-print">
                  <button type="submit" class="btn btn-primary btn-md">Filter</button>
                </div>
               
              </form>
             <hr>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Total Cuti</th>
                    <th>Total sakit</th>
                    <th>Total absen</th>
                    <th>Total unpaid</th>
                    <th>Total potongan</th>
                </tr>
                </thead>
                <?php 
                 $no=0;
                 $total=0;
                foreach ($absenAllUser as $tampil):?>
                <tbody>
                <tr>
                <td><?php echo $tampil->name?></td>
                <td><?php echo $tampil->total_cuti?></td>
                <td><?php echo $tampil->total_sakit?></td>
                <td><?php echo $tampil->total_absen?></td>
                <td><?php echo $tampil->total_unpaid?></td>
                <td><?php echo $tampil->total_unpaid*50000?></td>
                </tr>
                <?php $total +=$tampil->total_unpaid*50000 ?>
              <?php endforeach?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="5" align="left"><b>Total Potongan Periode <?php echo $start ?> -  <?php echo $end?></b></td>
                    <td colspan="3"><b><?php echo number_format($total,0,',','.') ?></b></td>
                  </tr>
                  
                </tfoot>
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


  