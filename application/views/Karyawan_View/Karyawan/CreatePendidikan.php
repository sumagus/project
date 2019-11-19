


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
              <li class="active"><a href="#personal" data-toggle="tab">Pengalaman</a></li>
              
             <!-- <a class="btn btn-info btn-lg" href="<?=site_url("admin/karyawan/createPersonal")?>"><i class="fa fa-plus"></i></a>-->
             
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
               -->
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- pendidikan --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/createPendidikan/$dataId->emp_no",['class'=>'form-horizontal'])?>
               
                
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="emp_no" class="form-control" id="emp_no" readonly value= <?php echo $dataId->emp_no?>>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama" class="form-control" id="tempat_lahir" readonly  value=<?php echo $dataId->nama_karyawan?> >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenjang" class="col-sm-2 control-label">Jenjang</label>
                    <div class="col-sm-10">     
                    <select name="jenjang" class="form-control">
                    <option value="">Pilih</option>
                    <option value ="SD">SD</option>
                    <option value ="SLTP">SLTP</option>
                    <option value ="SLTA">SLTA</option>
                    <option value ="D1">D1</option> 
                    <option value ="D3">D3</option>
                    <option value ="S1">S1</option>
                    <option value ="S2">S2</option>
                    <option value ="S3">S3</option>
                    <?php echo form_error('jenjang')?>
                  </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="thn_masuk" class="col-sm-2 control-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                        <input type="text"  name="thn_masuk" class="form-control" id="thn_masuk"  value="<?=set_value('thn_masuk')?>" >
                        <?php echo form_error('thn_masuk')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="thn_lulus" class="col-sm-2 control-label">Tahun lulus</label>
                    <div class="col-sm-10">
                      <input type="text"  name="thn_lulus" class="form-control" id="thn_lulus"  value= "<?=set_value('thn_lulus')?>" >
                      <?php echo form_error('thn_lulus')?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="institusi" class="col-sm-2 control-label">Institusi</label>
                    <div class="col-sm-10">
                        <input type="text"  name="institusi" class="form-control" id="institusi"  value= "<?=set_value('institusi')?>" >
                        <?php echo form_error('institusi')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text"  name="jurusan" class="form-control" id="jurusan"  value= "<?=set_value('jurusan')?>" >
                        <?php echo form_error('jurusan')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
                    <div class="col-sm-10">
                        <input type="text"  name="fakultas" class="form-control" id="fakultas"  value= "<?=set_value('fakultas')?>" >
                        <?php echo form_error('fakultas')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nilai" class="col-sm-2 control-label">Nilai</label>
                    <div class="col-sm-10">
                        <input type="text"  name="nilai" class="form-control" id="nilai"  value= "<?=set_value('nilai')?>" >
                        <?php echo form_error('nilai')?>
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
        $('#thn_masuk').datepicker({
          autoClose:true,
          //clearBtn:true,
          orientation:"bottom",
        });   
 </script>
<script>
        $('#thn_lulus').datepicker({
          autoClose:true,
          //clearBtn:true,
          orientation:"bottom",
        });   
 </script>




  