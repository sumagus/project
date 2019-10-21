
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
              <h3 class="box-title">Data Lembur Karyawan</h3>
              <?php if($this->session->flashdata('dialogbox')):?>
                <div class="alert alert-info alert-dismissible">
                  <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo $this->session->flashdata('dialogbox');?>
                </div>
              <?php endif ;?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url("admin/lembur/inputLembur/")?>" class= "btn btn-primary btn-md">Input Lembur</a>
              <hr>
               <div class="row">
                 <div class="col-xs-3">
                  <?php echo form_open('Admin/Lembur/getFilter')?>
                  <label>Nama </label>
                  <select name ="emp_no" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihNama as $tampil):?>
                  <option value="<?php echo $tampil->emp_no?>"><?php echo $tampil->nama_karyawan?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="col-xs-3">
                  <label>Tanggal Awal</label>
                  <input type="date" name= "start" class="form-control" placeholder="Start" id=""  data-date-end-date="0d">
                </div>
                  <div class="col-xs-3">
                    <label>Tanggal Akhir</label>
                  <input type="date"  name ="end" class="form-control" placeholder="End" id="">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-xs-3">
                  <button type="submit" class="btn btn-info btn-md"> Filter </button>
                </div>
              </div>
              <?php echo form_close()?>
              
             <hr>
            
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


  