
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"> </i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- TABLE -->
     <div class="row">
        <div class="col-xs-12">
       <div class="box">
            <!-- /.box-header -->
             
            <!-- -->
<hr>
<br>
<div class="table-responsive nowrap" >
<table id="tableAbsen" class="table table-bordered table-hover-sm">
  <thead> 

  <tr>
    <th>Emp_no</th><th>Name</th><th>Auto-Assign</th>
    <th>Date</th><th>Timetable</th><th>On Duty</th><th>Off Duty</th><th>Clock In</th>
    <th>Clock Out</th><th>Normal</th><th>Real Time</th><th>Late</th>
    <th>Late < 30</th><th>Late > 30</th><th>Early</th><th>Absen</th>
    <th>Sakit</th><th>Cuti</th><th>Unpaid</th><th>50000</th>
    <th>Keterangan</th>
  </tr>
  </thead>
  <?php
  foreach($absenUser as $tampil):
   ?>
  <tbody>
    <tr>
      <td><?php echo $tampil->emp_no?></td>
      <td><?php echo $tampil->name?></td>
      <td><?php echo $tampil->auto_assign?></td>

      <td><?php echo $tampil->date?></td>
      <td><?php echo $tampil->timetable?></td>
      <td><?php echo $tampil->on_duty?></td>
      <td><?php echo $tampil->off_duty?></td>
      <td><?php echo $tampil->clock_in?></td>

      <td><?php echo $tampil->clock_out?></td>
      <td><?php echo $tampil->late?></td>
      <td><?php echo $tampil->late_bellow?></td>

      <td><?php echo $tampil->late_over?></td>
      <td><?php echo $tampil->early?></td>
      <td><?php echo $tampil->absen?></td>
      <td><?php echo $tampil->sakit?></td>
      <td><?php echo $tampil->cuti?></td>

      <td><?php echo $tampil->unpaid?></td>
      <td><?php echo $tampil->potongan?></td>
      <td><?php echo $tampil->keterangan?></td>
      
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</div><!-- endo of class table responsive -->
      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
           </div>
        <!-- /.col -->
        </div>
  </div>
  <!-- content wrapper END OF DIV --> 
<footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
 <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
 <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
</footer>

<script type="text/javascript">
  $(document).ready( function () {
      $('#tableAbsen').DataTable();
  } );
</script>
<script>
  $("#datepickerYears").datepicker( {
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    orientation :"bottom auto",
});
</script>
