<?php 
$emp_no =$dataGaji->emp_no;
$gapok =$dataGaji->gapok;
$uang_makan =$dataGaji->uang_makan;
$gaji_harian = $dataGaji->uang_harian;

?>

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
              <h3 class="box-title">Data Gaji Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <?php echo form_open('admin/gapok/update/$dataId->emp_no',['method'=>'POST'])?>
            <div class="box-body">
                   <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Nama </label>
                <?php echo form_error('emp_no')?>
                 <select name="emp_no" class="form-control">
                  <option value="">-pilih-</option>
                  <?php foreach($pilihNama as $tampil):?>
                  <option value="<?=$emp_no?>"><?php echo $tampil->nama_karyawan?></option>   
                  <?php endforeach ;?>                
                 </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Departemen</label>
                <?php echo form_error('id_departemen')?>
                 <select name="id_departemen" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihDepartemen as $tampil):?>
                   <option value="<?php echo $tampil->id_departemen?>" ><?php echo $tampil->nama_departemen?></option>
                 <?php endforeach;?>
                 </select>         
              </div>
              <!-- form_group-->
               <div class="form-group">
                <label>Divisi </label>
                <?php echo form_error('id_divisi')?>
                  <select name="id_divisi" class="form-control">
                    <option value="">-Pilih-</option>
                    <?php foreach($pilihDivisi as $tampil):?>
                   <option value="<?php echo $tampil->id_divisi?>"><?php echo $tampil->nama_divisi?></option>
                 <?php endforeach;?>
                 </select>         
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="aktifitas">Cabang</label>
                <?php echo form_error('id_cabang')?>
                 <select name="id_cabang" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihCabang as $tampil):?>
                   <option value="<?php echo $tampil->id_cabang?>"><?php echo $tampil->nama_cabang?></option>
                 <?php endforeach;?>
                 </select>         
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="aktifitas" >Jabatan</label>
                <?php echo form_error('id_jabatan')?>
                 <select name="id_jabatan" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihJabatan as $tampil):?>
                   <option value="<?php echo $tampil->id_jabatan?>"><?php echo $tampil->jabatan?></option>
                 <?php endforeach;?>
                 </select>         
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Gapok</label>
                <?php echo form_error('gapok')?>
                <input type="text" class="form-control" name="gapok" id="gapok" value="<?=$gapok?>">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="">Uang Makan</label>
                <?php echo form_error('uang_makan')?>
                <input type="text" class="form-control" name="uang_makan" id="uang_makan" value="<?=$uang_makan?>">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Gaji Harian </label>
                <?php echo form_error('gaji_harian')?>
                <input type="text" class="form-control" name="gaji_harian" id="gaji_harian "value="<?=$gaji_harian?>">
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
      format : 'dd-mm-yyyy',
      
    });

</script>
<!-- TimePikecer-->
<script>
 //Timepicker
    $(".timepicker").timepicker({
      showInputs: true
    });

</script>

  