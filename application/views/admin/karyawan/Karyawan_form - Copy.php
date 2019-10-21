
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
                  <?php echo form_label('ID :','ID')?>
                  <input type="text" class="form-control" name="id" value="" placeholder="">
                  <?=form_error('id')?>
                </div>
              <!-- /.form-group -->
               
               <div class="form-group">
                  <label for="Nik"> NIK :</label>
                  <input type="text" class="form-control" name="nik" value="" placeholder="">
                  <?=form_error('nik')?>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label for="Nama"> Nama</label>
                  <input type="text" class="form-control" name="nama" value="" placeholder="">
                  <?=form_error('nama')?>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                  <label for="Alamat"> Alamat</label>
                  <input type="text" name="alamat" value="" class="form-control" placeholder="">
                  <?=form_error('alamat')?>
                </div>
                <div class="form-group">
                  <label for="Tgl_Masuk"> Tgl Masuk :</label>
                  <input type="text" class="form-control" name="tgl_masuk" value="" id="tgl_masuk" placeholder="yyyy-mm-dd">
                  <?=form_error('tgl_masuk')?>
                </div>
              <!-- /.form-group -->
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
                    isset($input->gender) && ($input->gender == 'P') ? true : false)
                ?> P
              </label>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label for="Marital_Status"> Marital_Status :</label>
                  <?=form_error('marital_status')?>
                    <label class="block-label">
                  <?= form_radio('marital_status', 'Single',
                    isset($input->marital_status) && ($input->marital_status == 'Single') ? true : false)
                  ?> Single
                </label>
                 <label class="block-label">
                <?= form_radio('marital_status', 'Menikah',
                    isset($input->marital_status) && ($input->marital_status== 'Menikah') ? true : false)
                ?> Menikah
            </label>
                </div>
            </div>
            <div class="col-md-6">
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
          clearBtn:true,
          orientation:"bottom right",
        });            
 </script>
</body>
</html>
