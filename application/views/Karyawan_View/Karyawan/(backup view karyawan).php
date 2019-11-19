


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
              <li class="active"><a href="#personal" data-toggle="tab">Personal</a></li>
              
             <!-- <a class="btn btn-info btn-lg" href="<?=site_url("admin/karyawan/createPersonal")?>"><i class="fa fa-plus"></i></a>-->
             
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pengalaman</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pendidikan</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Keluarga</i></a> -->
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- Personal --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/createPersonal/$dataId->id_karyawan",['class'=>'form-horizontal'])?>
                
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$id_karyawan?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="nama" class="form-control" id="tempat_lahir"  value= "<?=$nama?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <?php if(!empty($dataPersonal)):?>
                      <input type="text"  name="tempat_lahir" class="form-control" id="tempat_lahir" readonly value= <?php echo $dataPersonal->tempat_lahir?>>
                      <?php else:?>
                         <input type="text"  name="tempat_lahir" class="form-control" id="tempat_lahir" readonly value ="<?=set_value('tempat_lahir')?>">
                        
                      <?php endif;?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                       <?php if(!empty($dataPersonal)):?>
                      <input type="text"  name="tanggal_lahir" class="form-control" id="tgl_lahir" readonly value= <?php echo $dataPersonal->tanggal_lahir?> >
                      <?php else :?>
                         <input type="text"  name="tanggal_lahir" class="form-control" id="tgl_lahir" readonly value= "<?=set_value('tanggal_lahir')?>">
                       
                      <?php endif ; ?>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="Marital_status" class="col-sm-2 control-label">Marital Status</label>
                    <div class="col-sm-10">  
                         <?php if(!empty($dataPersonal)):?>
                            <input type="text"  name="Marital_status" class="form-control" id="Marital_status" readonly value= <?php echo $dataPersonal->marital_status?>>
                          <?php else:?>
                         <input type="text"  name="Marital_status" class="form-control" id="Marital_status" readonly value= "<?=set_value('marital_status')?>">
                       <?php endif;?>
                        
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-primary btn-md" href="<?=site_url("admin/karyawan/createPersonal/$dataId->id_karyawan")?>" ><i class="fa fa-plus"></i></a>
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
        $('#tgl_lahir').datepicker({
          autoClose:true,
          //clearBtn:true,
          orientation:"bottom",
        });            
 </script>




  