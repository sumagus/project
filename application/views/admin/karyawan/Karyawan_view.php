
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
        <?php if($this->session->flashdata('dialogbox')): ?>
        <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i>
        <?php echo $this->session->flashdata('dialogbox'); ?>
        </div>
        <?php endif; ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabelViewKaryawan" class="table table-responsive table-striped ">
                <thead>
                <tr>
                 <th>#</th>
                 <th>ID</th>
                 <th>Nama</th>
                 <th>NIK</th>
                 <th>Gender</th>
                 <th>Jabatan</th>
                 <th>Tanggal Masuk</th>
                 <th>Pendidikan</th>
                 <th><a class="btn btn-info btn-sm" href="<?php echo site_url('karyawan/create')?>"><i class="fa fa-plus"></i></a></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $this->load->helper('date');
                  $no =1;
                  foreach($allData as $tampil):?>
                <tr>
                 <td><?=$no++?></td>
                 <td><?=$tampil->id_karyawan?></td>
                 <td><?=$tampil->nama?></td>
                 <td><?=$tampil->nik?></td>
                 <td><?=$tampil->gender?></td>
                 <td><?=$tampil->jabatan?></td>
                 <td><?=$tampil->tgl_masuk?></td>
                 <td><?=$tampil->pendidikan?></td>
                 <td>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url("karyawan/detail/$tampil->id_karyawan")?>"><i class="fa fa-share-square"></i></a>
                     <a class="btn btn-danger btn-sm" href="<?=site_url("karyawan/delete/$tampil->id_karyawan")?>"><i class="fa fa-trash-o"></i></a> 
                 </td>
                </tr>
              <?php endforeach?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; Indomega Vision</strong> All rights
    reserved.
  </footer>  
</div>
<!-- ./wrapper -->
<!-- page script -->
<script>
  $(function () {
    
    $('#tabelViewKaryawan').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
