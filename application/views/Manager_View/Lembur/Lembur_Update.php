
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Input Lembur Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <?php echo form_open('admin/lembur/inputLembur',['method'=>'POSt'])?>
            <div class="box-body">
                   <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Karyawan</label>
                <select name="emp_no" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach ($pilihNama as $tampil):?> 
                  <option value="<?php echo $tampil->emp_no?>"><?php echo $tampil->nama_karyawan?></option>
                  <?php endforeach;?>
                </select>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Tanggal </label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="tanggal" id="" value="<?=set_value('tanggal')?>">
                </div>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="aktifitas">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?=set_value('keterangan')?> ">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="uang_lembur">Uang Lembur</label>
                <input type="text" class="form-control" name="uang_lembur" id="uang_lembur" value="<?=set_value('uang_lembur')?>">
              </div>
              <!-- /.form-group -->
              
                <div class="col-md-12">
               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <?php echo form_close()?>
            <!-- /.col -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             
            </div>
          
          </div>
          <!-- /.row -->

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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>
  <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
 
 <!-- DatePicker -->
<script>
    $('#tanggal').datepicker({
      viewMonth:true,
      viewYears:true,
      autoclose: true,
      orientation :"bottom left",
      daysOfWeekDisabled: "0,6",
      todayHighlight : true,
      minDate: "-3",
      format : 'yyyy-mm-dd',
      
    });

</script>
<!-- TimePikecer-->
<script>
 //Timepicker
    $(".timepicker").timepicker({
      showInputs: true
    });

</script>

  