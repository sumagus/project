<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <?php
     $id = $dataId->id_departemen;
     $departemen = $dataId->nama_departemen;
     ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              <div class="login-box">
                <div class="login-box-body">
                  <h3 class="login-box-msg">Create Departemen </h3>
                <?php echo form_open($form_action)?>
                    <div class="form-group has-feedback"> 
                      <input type="type" class="form-control" placeholder="ID" name="id_departemen" value="<?=$id?>">
                      <?=form_error('id_departemen')?>
                    </div>
                    <div class="form-group has-feedback">
                      <input type="type" class="form-control" placeholder="Departemen" name="nama_departemen" value="<?=$departemen?>">
                      <?=form_error('nama_departemen')?>
                      <br>
                    <div class="row">
                      <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Oke</button>
                      </div>
                      <!-- /.col -->
                    </div>
                    <?php echo form_close()?>
                </div>
                <!-- /.login-box-body -->
              </div>
            <!-- /.login-box -->
            </div>
            <!-- /.box-header -->
            
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; Indomega Vision</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

