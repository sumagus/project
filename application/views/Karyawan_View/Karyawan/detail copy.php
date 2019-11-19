


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>asset/dist/img/avatar3.png" alt="User profile picture">
              <h3 class="profile-username text-center">$karyawan->id</h3>
              <p class="text-muted text-center">$karyawan->jabatan</p>
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
              <li class="active"><a href="#biodata" data-toggle="tab">Personal</a></li>
              <li><a href="#kontak" data-toggle="tab">Kontak</a></li>
              <li><a href="#settings" data-toggle="tab">Pengalaman</a></li>
              <li><a href="#settings" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#settings" data-toggle="tab">keluarga</a></li>
              
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Kontak</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pengalaman</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pendidikan</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Keluarga</i></a>
            </ul>
            <div class="tab-content">
              <!-------------------------------------------------------------- BIODATA --------------------------------------------------> 
            
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="id_karyawan" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_karyawan" class="form-control" id="id_karyawan" value="<?=$id_karyawan?>" placeholder="ID" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Tempat_Lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"  placeholder="Tempat Lahir" value= "<?=set_value('tempat_lahir')?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" name="tanggal_lahir" class="form-control" id="tgl_lahir" placeholder="tgl_lahir" value= "<?=set_value('tanggal_lahir')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Marital Status" class="col-sm-2 control-label">Marital Status</label>
                     <div class="col-sm-10">
                      <input type="text" name="tanggal_lahir" class="form-control" id="tgl_lahir" placeholder="tgl_lahir" value= "<?=set_value('tanggal_lahir')?>">
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




  