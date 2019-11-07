


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
              <li class="active"><a href="#personal" data-toggle="tab">Data Keluarga</a></li>
              
             <!-- <a class="btn btn-info btn-lg" href="<?=site_url("admin/karyawan/createPersonal")?>"><i class="fa fa-plus"></i></a>-->
             
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
               -->
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- pendidikan --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/createKeluarga/$dataId->emp_no",['class'=>'form-horizontal'])?>
               
                
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="emp_no" class="form-control" id="emp_no" readonly value= <?php echo $dataId->emp_no?>>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Name" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text"  name="name" class="form-control" id="name" readonly  value=<?php echo $dataId->nama_karyawan?> >
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="Nama" class="col-sm-2 control-label">Nama Keluarga</label>
                    <div class="col-sm-10">
                        <input type="text"  name="nama" class="form-control" id="nama"  value="<?=set_value('nama')?>" >
                        <?php echo form_error('nama')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">     
                    <select name="status" class="form-control">
                    <option value="">--</option>
                    <option value ="Ayah">Ayah</option>
                    <option value ="Ibu">Ibu</option>
                    <option value ="Suami">Suami</option>
                    <option value ="Istri">Istri</option>
                    <option value ="Anak">Anak</option>
                    <?php echo form_error('status')?>  
                  </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="Gender" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">     
                    <select name="gender" class="form-control">
                    <option value="">--</option>
                    <option value ="L">Laki - Laki</option>
                    <option value ="P">Perempuan</option>
                    <?php echo form_error('status')?>  
                  </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">     
                    <select name="pendidikan" class="form-control">
                    <option value="">--</option>
                    <option value ="SD">SD</option>
                    <option value ="SLTP">SLTP</option>
                    <option value ="SLTA">SLTA</option>
                    <option value ="D1">D1</option>
                    <option value ="D3">D3</option>
                    <option value ="S1">S1</option>
                    <option value ="S2">S2</option>
                    <option value ="S3">S3</option>
                    <?php echo form_error('pendidikan')?>  
                  </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text"  name="alamat" class="form-control" id="alamat"  value= "<?=set_value('alamat')?>" >
                      <?php echo form_error('alamat')?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="kontak" class="col-sm-2 control-label">Kontak</label>
                    <div class="col-sm-10">
                        <input type="text"  name="kontak" class="form-control" id="kontak"  value= "<?=set_value('kontak')?>" >
                        <?php echo form_error('kontak')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text"  name="pekerjaan" class="form-control" id="pekerjaan"  value= "<?=set_value('pekerjaan')?>" >
                        <?php echo form_error('pekerjaan')?>
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
 <!--<script>
        $('#thn_masuk').datepicker({
          autoClose:true,
          //clearBtn:true,
          orientation:"bottom",
        });  

        $('#thn_lulus').datepicker({
          autoClose:true,
        })          
 </script>-->




  