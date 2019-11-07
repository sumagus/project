
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BPJS 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/Bpjs/Index")?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>-
              <?php if($this->session->flashdata('dialogbox')):?>
                <div class="alert alert-info alert-dismissible">
                  <button type="button" class ="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $this->session->flashdata('dialogbox');?>
                </div>
              <?php endif;?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>ID BPJS</th>
                  <th>Jenis</th>
                  <th>Nama</th>
                  <th>Total Persentase </th>
                  <th>Perusahaan</th>
                  <th>Pegawai</th>
                  <th><a class="btn btn-info btn-sm" href="<?php echo site_url('Admin/Bpjs/create')?>"><i class="fa fa-plus"></i></a></th>
                </tr>
                </thead>
                <?php 
                 $no=1;
                foreach ($allData as $tampil):?>
                <tbody>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->id_bpjs?></td>
                  <td><?php echo $tampil->jenis?></td>
                  <td><?php echo $tampil->nama?></td>
                  <td><?php echo $tampil->persentase?></td>
                  <td><?php echo $tampil->perusahaan?></td>
                  <td><?php echo $tampil->pegawai?></td>
                  <td>
                    <a class="btn btn-info btn-sm" href="<?php echo site_url("admin/bpjs/update/$tampil->id_bpjs")?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="<?php echo site_url("admin/bpjs/delete/$tampil->id_bpjs")?>" onclick="return confirm('Apakah Ada Yakin ?')"><i class="fa fa-trash-o"></i></a>  
                  </td>
                </tr>
              <?php endforeach?>
                </tbody>
              </table>
                  <hr>
            <a href= "<?php echo site_url('Admin/Bpjs/generate')?>" class="btn btn-info btn-md">Generate </a>
             <a href= "<?php echo site_url('Admin/Bpjs/getgenerate')?>" class="btn btn-info btn-md">Lihat Data </a>
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
    <strong>Indo Mega Vision .</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- Jquery --->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>


  