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
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Generate Gaji Bpjs </h3>
              <div class="login-box">
                <div class="login-box-body">
                  <h3 class="login-box-msg"> </h3>
                <?php echo form_open($form_action)?>
                    <div class="form-group has-feedback"> 
                      <lable>Nama Karyawan</lable>
                     <select name="emp_no" class="form-control">
                       <option value="">-Pilih-</option>
                       <?php foreach($pilihNama as $tampil):?>
                       <option value ="<?php echo $tampil->emp_no?>"><?php echo $tampil->emp_no?></option>
                     <?php endforeach;?>
                     </select>
                      <?=form_error('emp_no')?>
                    </div>
                    <div class="form-group has-feedback">
                      <lable>Gaji Bpjs</lable>
                      <input type="type" class="form-control" placeholder="" name="gajibpjs" value="<?=set_value('gajibpjs')?>">
                      <?=form_error('gajibpjs')?>
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

