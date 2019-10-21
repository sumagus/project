
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
         <div class="box-body">
          <div class="row">
            <?php echo form_open($form_action)?>
            <div class="col-md-6">
               <div class="form-group">
                  <?=form_label('ID Karyawan:','emp_no')?>
                  <input type="text" class="form-control" name="emp_no" value="<?=set_value('emp_no')?>" placeholder="">
                  <?=form_error('emp_no')?>
                </div>
              <!-- /.form-group -->
               
               <div class="form-group">
                  <?php form_error('ktp')?>
                  <?=form_label('KTP','KTP')?>
                  <input type="text" class="form-control" name="ktp" value="<?=set_value('ktp')?>" placeholder="">
                  <?=form_error('ktp')?>
                </div>
           
            <!-- /.col -->
            
                <!-- /.form-group -->
                <div class="form-group">
                <?=form_label('Nama :','Nama')?>
                  <input type="text" class="form-control" name="nama_karyawan" value="<?=set_value('nama_karyawan')?>" placeholder="">
                  <?=form_error('nama_karyawan')?>
                </div>
                <div class="form-group">
                  <label for="gender"> Gender :</label>
                  <?=form_error('gender')?>
                    <label class="block-label">
                  <?= form_radio('gender', 'L',
                    isset($input->gender) && ($input->gender == 'L') ? true : false)
                  ?> L
                </label>
                 <label class="block-label">
                <?= form_radio('gender', 'P',
                    isset($input->gender) && ($input->gender== 'P') ? true : false)
                ?> P
            </label>
                </div>
               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <?php echo form_close()?>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> AdminAlt2.3.8
    </div>
    <strong>Copyright &copy; Indomega Vision</strong> All rights
    reserved.
  </footer>

 <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

   <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
  
</div>
<!-- ./wrapper -->
 <script>
        $('#tgl_masuk').datepicker({
          autoClose:true,
          todayHighlight:true,
          orientation:"bottom right",
         
        });            
 </script>
</body>
</html>
