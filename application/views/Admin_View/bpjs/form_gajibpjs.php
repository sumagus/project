<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h3 class="box-title">Generate Gaji Bpjs </h3>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/Bpjs/Index")?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
                  <h3 class="login-box-msg"> </h3>
                <?php echo form_open($form_action)?>
                    <div class="form-group has-feedback"> 
                      <label>Pilih Nama Karyawan</label>
                     <select name="emp_no" class="form-control">
                       <option value="">-Pilih-</option>
                       <?php foreach($pilihNama as $tampil):?>
                       <option value ="<?php echo $tampil->emp_no?>"><?php echo $tampil->nama_karyawan?></option>
                     <?php endforeach;?>
                     </select>
                      <?=form_error('nama_karyawan')?>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Input Gaji</label>
                      <input type="type" class="form-control" placeholder="" name="gaji_bpjs" value="<?=set_value('gaji_bpjs')?>">
                      <?=form_error('gaji_bpjs')?>
                      <br>
                    <div class="row">
                      <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
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

