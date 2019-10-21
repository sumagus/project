
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
          <h3 class="box-title">Form User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <?php echo form_open($form_action)?>
            <div class="col-md-6">
               <div class="form-group">
                  <?php echo form_label('ID :','ID')?>
                  <input type="text" class="form-control" name="id_user" value="<?php echo set_value('id_user')?>" placeholder="">
                  <?=form_error('id_user')?>
                </div>
              <!-- /.form-group -->
               
               <div class="form-group">
                  <label for="Username"> Username</label>
                  <input type="text" class="form-control" name="username" value="<?=set_value('username')?>" placeholder="">
                  <?=form_error('username')?>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label for="Nama"> Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?=set_value('nama')?>" placeholder="">
                  <?=form_error('nama')?>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                  <label for="Email"> Email</label>
                  <input type="text" name="email" value="<?=set_value('email')?>" class="form-control" placeholder="">
                  <?=form_error('email')?>
                </div>
                <div class="form-group">
                  <label for="Password"> Password</label>
                  <input type="Password" class="form-control" name="password" value="" placeholder="">
                  <?=form_error('password')?>
                </div>
              <!-- /.form-group -->
               <div class="form-group">
                  <label for=""> Level user :</label>
                  <?=form_error('level')?>
                    <label class="block-label">
                  <?= form_radio('level', '1',
                    isset($input->level) && ($input->level == '1') ? true : false)
                  ?> 1
                </label>
                 <label class="block-label">
                <?= form_radio('level', '2',
                    isset($input->level) && ($input->level == '2') ? true : false)
                ?> 2
              </label>
              <label class="block-label">
                <?=form_radio('level','3',
                isset($input->level) && ($input->level=='3') ? true:false)
                ?> 3
              </label>
              <label class="block-label">
                <?= form_radio('level','4',
                isset($input->level) && ($input->level=='4') ? true:false)
                ?> 4
              </label>
                </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label for=""> Status :</label>
                  <?=form_error('status')?>
                    <label class="block-label">
                  <?= form_radio('status', 'Y',
                    isset($input->status) && ($input->status == 'Y') ? true : false)
                  ?> Aktif
                </label>
                 <label class="block-label">
                <?= form_radio('status', 'N',
                    isset($input->level) && ($input->level == 'N') ? true : false)
                ?> Tidak Aktif
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
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; Indomega Vision .</strong> All rights
    reserved.
  </footer>

 
  
</div>
<!-- ./wrapper -->

