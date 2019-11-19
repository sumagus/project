


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
              <h3 class="profile-username text-center"> <?=$dataId->nama_karyawan?></h3>
              <p class="text-muted text-center"><?=$dataId->id_karyawan?></p>
              <a href="<?php echo site_url("admin/karyawan/createPersonal")?>" class="btn btn-primary btn-block"><b>Personal Detail</b></a>
              <a href="<?php echo site_url("admin/karyawan/createKontak")?>" class="btn btn-primary btn-block"><b>Kontak</b></a>
              <a href="<?php echo site_url("admin/karyawan/createPengalaman")?>" class="btn btn-primary btn-block"><b>Pengalaman</b></a>
              <a href="<?php echo site_url("admin/karyawan/createPendidikan")?>" class="btn btn-primary btn-block"><b>Pendidikan</b></a>
              <a href="<?php echo site_url("admin/karyawan/createKeluarga")?>" class="btn btn-primary btn-block"><b>Keluarga</b></a>
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
              <li><a href="#kontak" data-toggle="tab">Kontak</a></li>
              <li><a href="#pengalaman" data-toggle="tab">Pengalaman</a></li>
              <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#keluarga" data-toggle="tab">Keluarga</a></li>
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pengalaman</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pendidikan</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Keluarga</i></a> -->
            </ul>
            <div class="tab-content">
                 <div class="tab-pane" id="personal">
              <!-------------------------------------------------------------- Personal --------------------------------------------------> 
            
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$dataId->id_karyawan?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir"  value= "">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir" value= "">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Marital Status</label>
                     <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "">
                    </div>
                  </div>
                </form>
                </div>
              <!-- /.tab-pane -->

               <div class="tab-pane" id="kontak">
              <!-------------------------------------------------------------- Kontak --------------------------------------------------> 
            
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$id_karyawan?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir"  value= "<?=set_value('tempat_lahir')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Provinsi</label>
                     <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">No Telp</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">HP</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>

                </form>
              </div>
              <!-- /.tab-pane -->

               <div class="tab-pane" id="pengalaman">
              <!-------------------------------------------------------------- Pengalaman --------------------------------------------------> 
            
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$id_karyawan?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Label pengalaman</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir"   value= "<?=set_value('tempat_lahir')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Alamat 2 </label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

               <div class="tab-pane" id="pendidikan">
              <!-------------------------------------------------------------- Pendidikan --------------------------------------------------> 
            
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$id_karyawan?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Label pengalaman</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir"   value= "<?=set_value('tempat_lahir')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Alamat 2 </label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

                <div class="tab-pane" id="keluarga">
              <!-------------------------------------------------------------- Pendidikan --------------------------------------------------> 
            
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$id_karyawan?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Label pengalaman</label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir"   value= "<?=set_value('tempat_lahir')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Alamat 2 </label>
                    <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir" value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
                      <input type="text" readonly name="tanggal_lahir" class="form-control" id="tgl_lahir"  value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>




  