<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
    </section>
     
    <!-- Main content -->
    <section class="content">
     <?php if($this->session->flashdata('dialogbox')): ?>
        <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i>
        <?php echo $this->session->flashdata('dialogbox'); ?>
        </div>
        <?php endif; ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             <table class="table table-hover table-bordered" id="tableCabang">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Gaji </th>
                  <th>JHT Perusahaan</th>
                  <th>JHT Karyawan</th>
                  <th>JKK perusahaan</th>
                  <th>JK Perusahaan</th>
                 
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($dataGenerate as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->nama_karyawan ?></td>
                  <td><?php echo $tampil->gaji_bpjs?></td>
                  <td><?php echo $tampil->jht_perusahaan ?></td>
                  <td><?php echo $tampil->jht_karyawan?></td>
                  <td><?php echo $tampil->jkk_perusahaan?></td>
                  <td><?php echo $tampil->jk_perusahaan?></td>
                </tr>
              <?php endforeach;?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <a href= "<?php echo site_url('admin/bpjs/cetak')?>" class="btn btn-info btn-md">Preview </a>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#tableCabang').DataTable();

  } );
</script>


