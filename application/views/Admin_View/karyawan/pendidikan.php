


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
              <li class="active"><a href="#personal" data-toggle="tab">Pendidikan</a>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                       <a class="btn btn-primary btn-md" href="<?=site_url("admin/karyawan/createPendidikan/$dataId->emp_no")?>" ><i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                </li>
              
             <!-- <a class="btn btn-info btn-lg" href="<?=site_url("admin/karyawan/createPersonal")?>"><i class="fa fa-plus"></i></a>-->
             
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
               -->
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- Pengalaman --------------------------------------------------> 
            
                <div class="widget-user-header bg-blue">
                  <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th><h4>Jenjang</h4></th>
                    <th><h4>Tahun Masuk</h4></th>
                    <th><h4>Tahun Lulus</h4></th>
                    <th><h4>Institusi</h4></th>
                    <th><h4>Jurusan</h4></th>
                    <th><h4>Fakultas</h4></th>
                    <th><h4>Nilai</h4></th>
                    <th><h4>AKsi</h4></th>
                  </tr>
                  </thead>
                  <?php foreach($dataPendidikan as $tampil):?>
                  <tbody>
                  <tr>
                    <td><?php echo $tampil->jenjang?></td>
                    <td><?php echo $tampil->thn_masuk?></td>
                    <td><?php echo $tampil->thn_lulus?></td>
                    <td><?php echo $tampil->institusi?></td>
                    <td><?php echo $tampil->jurusan?></td>
                    <td><?php echo $tampil->fakultas?></td>
                    <td><?php echo $tampil->nilai?></td>
                     <td>
                      <div class="col-sm-offset-2 col-sm-10">
                       <a class="btn btn-warning btn-md" href='<?=site_url("admin/karyawan/updatePendidikan/".$tampil->emp_no.'/'.$tampil->id_pendidikan)?>' ><i class="fa fa-edit"></i></a>
                    </div>
                    </td> 
                  </tr>
                  </tbody>
                <?php endforeach ?>
                </table>
             </div>

              <!-- /.table-responsive -->

                </div> 
                <!--Widget User -->
                
                  
                
              
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




  