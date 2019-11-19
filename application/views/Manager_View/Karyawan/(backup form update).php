
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>asset/dist/img/avatar3.png" alt="User profile picture">
              <h3 class="profile-username text-center"><?=$dataId->nama_karyawan?></h3>
              <p class="text-muted text-center"><?=$dataId->id_karyawan?></p>
              <a href="<?php echo site_url("admin/karyawan/personal/$dataId->id_karyawan")?>" class="btn btn-primary btn-block"><b>Personal Detail</b></a>
              <a href="<?php echo site_url("admin/karyawan/kontak/$dataId->id_karyawan")?>" class="btn btn-primary btn-block"><b>Kontak</b></a>
              <a href="<?php echo site_url("admin/karyawan/pengalaman/$dataId->id_karyawan")?>" class="btn btn-primary btn-block"><b>Pengalaman</b></a>
              <a href="<?php echo site_url("admin/karyawan/pendidikan/$dataId->id_karyawan")?>" class="btn btn-primary btn-block"><b>Pendidikan</b></a>
              <a href="<?php echo site_url("admin/karyawan/keluarga/$dataId->id_karyawan")?>" class="btn btn-primary btn-block"><b>Keluarga</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
        </div>
        <!-- TABS --> 
           <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#personal" data-toggle="tab">Data Keluarga</a></li>
              
             <!-- <a class="btn btn-info btn-lg" href="<?=site_url("admin/karyawan/createPersonal")?>"><i class="fa fa-plus"></i></a>-->
             
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
               -->
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- pendidikan --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/createKeluarga/$dataId->id_karyawan",['class'=>'form-horizontal'])?>
                
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="id_karyawan" class="form-control" id="id_karyawan"  value= <?php echo $dataId->id_karyawan?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_karyawan" class="col-sm-2 control-label">Karyawan</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama_karyawan" class="form-control" id="nama_karyawan"  value= <?php echo $dataId->nama_karyawan?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <?php if(!empty($dataKeluarga)):?>
                      <input type="text"  name="nama" class="form-control" id="nama"  value=<?php echo $dataKeluarga->nama?> >
                      <?php else:?>
                          <input type="text"  name="nama" class="form-control" id="nama"  value="<?=set_value('nama')?>">
                    <?php endif; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                      <?php if(!empty($dataKeluarga)):?>
                      <input type="text"  name="status" class="form-control" id="status"   value = <?php echo $dataKeluarga->status?>>
                      <?php else :?>
                        <input type="text"  name="status" class="form-control" id="status"  value="<?=set_value('status')?>" >
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                      <?php if(!empty($dataKeluarga)) :?>
                      <input type="text"  name="gender" class="form-control" id="gender"   value=<?php echo $dataKeluarga->gender?>>
                      <?php else:?>
                      <input type="text"  name="gender" class="form-control" id="gender"  value= "<?=set_value('gender')?>" >
                      <?php endif;?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                    <?php if(!empty($dataKeluarga)):?>
                      <input type="text"  name="pendidikan" class="form-control" id="pendidikan"  value =<?php echo $dataKeluarga->pendidikan?>>
                    <?php else:?>
                        <input type="text"  name="pendidikan" class="form-control" id="pendidikan"  value= "<?=set_value('pendidikan')?>" >
                    <?php endif;?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                    <?php if(!empty($dataKeluarga)):?>
                      <input type="text"  name="alamat" class="form-control" id="alamat"  value =<?php echo $dataKeluarga->alamat?>>
                    <?php else:?>
                        <input type="text"  name="alamat" class="form-control" id="alamat"  value= "<?=set_value('alamat')?>" >
                    <?php endif;?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kontak" class="col-sm-2 control-label">Kontak</label>
                    <div class="col-sm-10">
                    <?php if(!empty($dataKeluarga)):?>
                      <input type="text"  name="kontak" class="form-control" id="kontak"  value =<?php echo $dataKeluarga->kontak?>>
                    <?php else:?>
                        <input type="text"  name="kontak" class="form-control" id="kontak"  value= "<?=set_value('kontak')?>" >
                    <?php endif;?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                    <?php if(!empty($dataKeluarga)):?>
                      <input type="text"  name="pekerjaan" class="form-control" id="pekerjaan"  value =<?php echo $dataKeluarga->pekerjaan?>>
                    <?php else:?>
                        <input type="text"  name="pekerjaan" class="form-control" id="pekerjaan"  value= "<?=set_value('pekerjaan')?>" >
                    <?php endif;?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                       <a class="btn btn-primary btn-md" href="<?=site_url("admin/karyawan/createKeluarga/$dataId->id_karyawan")?>" ><i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                  <?php echo form_close()?>
                </form>
                </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
       
            </div>

      </div><!-- /.row -->

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

   <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
  
</div>
<!-- ./wrapper -->
 <script>
        $('#status').datepicker({
          autoClose:true,
          //clearBtn:true,
          orientation:"bottom",
        });            
 </script>




  