


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
            <div class="box-body box-profile"> <?php if (empty($dataPersonal)):?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>asset/dist/img/avatar3.png" alt="User profile picture">
            <?php else :?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $dataPersonal->profile;?>" alt="User profile picture">
            <?php endif;?>
              <h3 class="profile-username text-center"><?=$dataId->nama_karyawan?></h3>
              <p class="text-muted text-center"><?=$dataId->emp_no?></p>
              <a href="<?php echo site_url("admin/karyawan/personal/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Personal Detail</b></a>
              <a href="<?php echo site_url("admin/karyawan/kontak/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Kontak</b></a>
              <a href="<?php echo site_url("admin/karyawan/pengalaman/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Pengalaman</b></a>
              <a href="<?php echo site_url("admin/karyawan/pendidikan/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Pendidikan</b></a>
              <a href="<?php echo site_url("admin/karyawan/keluarga/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Keluarga</b></a>
              <a href="<?php echo site_url("admin/karyawan/pajak/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Status Pajak</b></a>
              <a href="<?php echo site_url("admin/karyawan/tunjangan/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Tunjangan</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
        </div>
        <!-- TABS --> 
           <div class="col-md-9">
          <div class="nav-tabs-custom">
            <div class="tab-content">
                
              <!-------------------------------------------------------------- Personal --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/updatePersonal/$dataId->emp_no",['class'=>'form-horizontal'])?>
                
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="emp_no" class="form-control" id="emp_no" value="<?=$emp_no?>">
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
                      <input type="text"  name="tempat_lahir" class="form-control" id="tempat_lahir" value= <?php echo $dataPersonal->tempat_lahir?>>
                      <?php else:?>
                         <input type="text"  name="tempat_lahir" class="form-control" id="tempat_lahir" value ="<?=set_value('tempat_lahir')?>">
                        
                      <?php endif;?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                       <?php if(!empty($dataPersonal)):?>
                      <input type="text"  name="tanggal_lahir" class="form-control" id="tgl_lahir" value= <?php echo $dataPersonal->tanggal_lahir?> >
                      <?php else :?>
                         <input type="text"  name="tanggal_lahir" class="form-control" id="tgl_lahir" value= "<?=set_value('tanggal_lahir')?>">
                       
                      <?php endif ; ?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Agama" class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                       <?php if(!empty($dataPersonal)):?>
                      <input type="text"  name="agama" class="form-control" id="agama" value= <?php echo $dataPersonal->agama?> >
                      <?php else :?>
                         <input type="text"  name="agama" class="form-control" id="agama" value= "<?=set_value('agama')?>">
    
                      <?php endif ; ?>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="Marital_status" class="col-sm-2 control-label">Marital Status</label>
                    <div class="col-sm-10">  
                         <?php if(!empty($dataPersonal)):?>
                            <input type="text"  name="Marital_status" class="form-control" id="Marital_status" value= <?php echo $dataPersonal->marital_status?>>
                          <?php else:?>
                         <input type="text"  name="Marital_status" class="form-control" id="Marital_status" value= "<?=set_value('marital_status')?>">
                       <?php endif;?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <!-- <a class="btn btn-warning btn-md" href="<?=site_url("admin/karyawan/updatePersonal/$dataId->emp_no")?>" ><i class="fa fa-edit"></i></a> -->
                    <button class="btn btn-warning btn-md"><i class="fa fa-edit"></i></button>
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
 <!--<script>
        $('#tgl_lahir').datepicker({
          autoClose:true,
          //clearBtn:true,
          orientation:"bottom",
        });            
 </script>-->




  