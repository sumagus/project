


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
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url('upload/gambar/'.$dataPersonal->profile);?>" alt="User profile picture">
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
            
                
                <?php echo form_open_multipart("admin/karyawan/updatePersonal/".$emp_no,['class'=>'form-horizontal'])?>
                
                  
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="emp_no" class="form-control" id="emp_no" value="<?=$emp_no?>" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama" class="form-control" id="tempat_lahir"  value= "<?=$nama?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                         <input type="text"  name="tempat_lahir" class="form-control" id="tempat_lahir" value ="<?=isset($dataPersonal->tempat_lahir)?$dataPersonal->tempat_lahir:set_value('tempat_lahir')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                         <input type="text"  name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=isset($dataPersonal->tanggal_lahir)?$dataPersonal->tanggal_lahir:set_value('tanggal_lahir')?>">
                          <?=form_error('tanggal_lahir')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="agama" class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                         <select name="agama" value="<?=isset($dataPersonal->agama)?$dataPersonal->agama:set_value('agama')?>" class="form-control">
                           <option value="islam">Islam</option>
                           <option value="kristen">Kristen</option>
                           <option value="Katolik">Katolik</option>
                           <option value="Hindu">Hindu</option>
                           <option value="Budha">Budha</option>
                         </select>
                          <?=form_error('Agama')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="profile" class="col-sm-2 control-label">Profile</label>
                    <div class="col-sm-10">
                      <input type="File" value="foto" name="profile" class="form-control" id="profile" >
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="marital Status" class="col-sm-2 control-label">Marital Status</label>
                    <div class="col-sm-10">
                       <?=form_error('marital_status')?>
                    <label>
                  <?= form_radio('marital_status', 'Single',
                    isset($dataPersonal->marital_status) && ($dataPersonal->marital_status == 'Single') ? true : false)
                  ?> Single
                </label>
                 <label>
                <?= form_radio('marital_status', 'Married',
                    isset($dataPersonal->marital_status) && ($dataPersonal->marital_status== 'Married') ? true : false)
                ?> Married
            </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="" class="btn btn-primary">Submit</button>
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
          clearBtn:true,
          orientation:"bottom",
        });            
 </script>




  