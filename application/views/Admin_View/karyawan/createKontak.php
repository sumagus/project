


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
            <ul class="nav nav-tabs">
              <li class="active"><a href="#personal" data-toggle="tab">Personal</a></li>
              
           
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- Kontak --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/createKontak/$dataId->emp_no",['class'=>'form-horizontal'])?>
                
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="emp_no" class="form-control" id="emp_no" value="<?=$emp_no?>" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="nama_karyawan" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama" class="form-control" id="tempat_lahir"  value= "<?=$nama?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text"  name="email" class="form-control" id="email"  value="<?=set_value('email')?>" >
                      <?=form_error('email')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_telp" class="col-sm-2 control-label">No_Telp</label>
                    <div class="col-sm-10">
                      <input type="text"  name="no_telp" class="form-control" id="no_telp"  value= "<?=set_value('no_telp')?>" >
                      <?=form_error('no_telp')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                      <input type="text"  name="mobile" class="form-control" id="mobile"  value= "<?=set_value('mobile')?>">
                      <?=form_error('mobile')?>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="alamat_ktp" class="col-sm-2 control-label">Alamat KTP</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name="alamat_ktp" id="alamat_ktp" value="<?=set_value('alamat_ktp')?>"></textarea>
                  <?=form_error('alamat_ktp')?>
                </div>
              </div>
                 <div class="form-group">
                  <label for="alamat_tinggal" class="col-sm-2 control-label">Alamat Tinggal</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name = "alamat_tinggal" id="alamat_tinggal" value="<?=set_value('alamat_tinggal')?> "></textarea>
                  <?=form_error('alamat_tinggal')?>
                </div>
              </div>
                  <div class="form-group">
                    <label for="Kota" class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-10">
                      <input type="text"  name="kota" class="form-control" id="kota"  value= "<?=set_value('kota')?>">
                      <?=form_error('kota')?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Provinsi" class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                      <input type="text"  name="provinsi" class="form-control" id="provinsi"  value= "<?=set_value('provinsi')?>">
                      <?=form_error('provinsi')?>
                    </div>
                  </div>
                  
                   
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="" class="btn btn-danger">Submit</button>
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




