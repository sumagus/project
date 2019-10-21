<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
         CABANG PERUSAHAAN
      </h1>
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/admin/cabang/index")?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="login-box">
                <div class="login-box-body">
                  <h3 class="login-box-msg">Create Cabang</h3>
                <?php echo form_open($form_action)?>
                    <div class="form-group has-feedback"> 
                      <input type="type" class="form-control" placeholder="ID" name="id_cabang" value="<?=set_value('id_cabang')?>">
                      <?=form_error('id_cabang')?>
                    </div>
                    <div class="form-group has-feedback"> 
                      <input type="type" class="form-control" placeholder="Nama" name="nama_cabang" value="<?=set_value('nama_cabang')?>">
                      <?=form_error('nama_cabang')?>
                    </div>
                    <div class="form-group has-feedback"> 
                      <input type="type" class="form-control" placeholder="Alamat" name="alamat_cabang" value="<?=set_value('alamat_cabang')?>">
                      <?=form_error('alamat_cabang')?>
                    </div>
                    <div class="form-group has-feedback">
                      <input type="type" class="form-control" placeholder="Kota" name="kota" value="<?=set_value('kota')?>">
                      <?=form_error('kota')?>
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

