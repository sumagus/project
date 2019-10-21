
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
              <h3 class="box-title">Create New BPJS </h3>
            </div>
            <!-- /.box-header -->
            <?php echo form_open('admin/bpjs/create',['method'=>'POSt'])?>
            <div class="box-body">
                   <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Jenis BPJS</label>
                <input type= "text" class ="form-control" name="jenis" id="jenis" value="<?=set_value('jenis')?>">
                <?php echo form_error('jenis')?>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Nama </label>
                 <input type="text" class="form-control" name="nama" value="<?=set_value('nama')?>">
                 <?php echo form_error('nama')?>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="Persentase">Total Persentase</label>
                <input type="text" class="form-control" name="persentase" id="persentase" value="<?=set_value('persentase')?> ">
                <?php echo form_error('persentase')?>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label for="perusahaan">Perusahaan</label>
                <input type="text" class="form-control" name="perusahaan" id="perusahaan" value="<?=set_value('perusahaan')?>">
                <?php echo form_error('perusahaan')?>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="pegawai">Pegawai</label>
                <input type="text" class="form-control" name="pegawai" id="perusahaan" value="<?=set_value('pegawai')?>">
                <?php echo form_error('pegawai')?>
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


  