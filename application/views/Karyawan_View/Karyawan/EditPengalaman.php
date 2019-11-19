

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
              <li class="active"><a href="#personal" data-toggle="tab">Form Pengalaman</a></li>
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- Kontak --------------------------------------------------> 
                 <?php echo form_open("admin/karyawan/updatePengalaman/".$dataId->emp_no.'/'.$dataPengalaman->id_pengalaman,['class'=>'form-horizontal','autocomplete'=>'off'])?>
                
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="emp_no" class="form-control" id="emp_no" readonly value=<?php echo $dataId->emp_no?>>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="nama_karyawan" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama" class="form-control" id="tempat_lahir" readonly value = <?php echo $dataId->nama_karyawan?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="posisi" class="col-sm-2 control-label">Posisi</label>
                    <div class="col-sm-10">
                      <input type="text" name="posisi" class="form-control" id="posisi"  value="<?= $dataPengalaman->posisi ?>" >
                      <?=form_error('posisi')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-10">
                      <input type="text"  name="gaji" class="form-control" id="gaji"  value= "<?= $dataPengalaman->gaji ?>" >
                      <?=form_error('gaji')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="perusahaan" class="col-sm-2 control-label">Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text"  name="perusahaan" class="form-control" id="perusahaan"  value= "<?= $dataPengalaman->perusahaan ?>">
                      <?=form_error('perusahaan')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="thn_masuk" class="col-sm-2 control-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                      <input type="text"  name="thn_masuk" class="form-control" id="thn_masuk"  value= "<?= $dataPengalaman->thn_masuk ?>">
                      <?=form_error('thn_masuk')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="thn_keluar" class="col-sm-2 control-label">Tahun Keluar</label>
                    <div class="col-sm-10">
                      <input type="text"  name="thn_keluar" class="form-control" id="thn_keluar"  value= "<?= $dataPengalaman->thn_keluar ?>">
                      <?=form_error('thn_keluar')?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="alasan" class="col-sm-2 control-label">Alasan Keluar</label>
                    <div class="col-sm-10">
                      <input type="text"  name="alasan" class="form-control" id="alasan"  value= "<?= $dataPengalaman->alasan ?>">
                      <?=form_error('alasan')?>
                    </div>
                  </div>
                  <hr>
                   <div id="insert-form"></div>
                  <hr>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="" class="btn btn-info">Submit</button>
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
          clearBtn:true,
          orientation:"bottom",
          format : 'dd-mm-yyyy',
          todayHighlight:true,
        }); 

        $('#thn_keluar').datepicker({
          autoClose:true,
          clearBtn:true,
          orientation:"bottom",
          format : 'dd-mm-yyyy',
          todayHighlight:true,
        });           
 </script>




  