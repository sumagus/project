
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <center> <h3>
       Input Gaji Karyawan
      </h3></center>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/Gapok/index")?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <?php echo form_open('admin/gapok/create',['method'=>'POST'])?>
            <div class="box-body">
                   <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Nama </label>
                <?php echo form_error('emp_no')?>
                 <select name="emp_no" class="form-control">
                  <option value="">-pilih-</option>
                  <?php foreach($pilihNama as $tampil):?>
                  <option value="<?php echo $tampil->emp_no?>"><?php echo $tampil->nama_karyawan?></option>   
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
                <label for="jabatan" >Jabatan</label>
                <?php echo form_error('id_jabatan')?>
                 <select name="id_jabatan" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihJabatan as $tampil):?>
                   <option value="<?php echo $tampil->id_jabatan?>"><?php echo $tampil->jabatan?></option>
                 <?php endforeach;?>
                 </select>         
              </div>
              <!-- /.form-group -->
            <!--  <div class="form-group">
                <label for="ptkp" >ptkp</label>
                <?php echo form_error('id_ptkp')?>
                 <select name="id_ptkp" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihPtkp as $tampil):?>
                   <option value="<?php echo $tampil->id_ptkp?>"><?php echo $tampil->ptkp?></option>
                 <?php endforeach;?>
                 </select>         
              </div>-->
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Gapok</label>
                <?php echo form_error('gapok')?>
                <input type="text" class="form-control" name="gapok" id="gapok" placeholder="">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="">Uang Makan</label>
                <?php echo form_error('uang_makan')?>
                <input type="text" class="form-control" name="uang_makan" id="uang_makan" placeholder="">
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

  