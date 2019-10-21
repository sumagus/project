
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
             <div class="box-body form">
              <label for ="Nama">Nama</label>
              <?php echo form_error('Nama')?>
              <select name ="name", class="form-control" value="<?=set_select('name')?>" >
                <option value="">- Pilih -</option>
             <?php foreach ($pilihUser as $tampil) :?>
              <option value="<?php echo $tampil->name?>"><?php echo $tampil->name?></option>
              <?php endforeach?>
              </select>
            </div>
            <!-- -->
            <div class="box-body form">
                <div id="form-bulan">
                <label>Bulan</label><br>
                <select name="bulan" class ="form-control">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
                </select>
                <br /><br />
                </div>
                <label>Tahun </label>
                <div id="date">
                  <input type ="text"  label="filter tahun"  class ="form-control" id="datepickerYears">
                </div>

            </div><!-- box body--> 
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
