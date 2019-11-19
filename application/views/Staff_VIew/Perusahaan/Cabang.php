<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center>
       <Small>DAFTAR CABANG PERUSAHAAN</Small>
        </center>
      </h1>
       <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/Cabang")?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
       <?php if($this->session->flashdata('dialogbox')): ?>
            <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('dialogbox'); ?>
            </div>
            <?php endif; ?>
    </section>
     
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <center><h4>Cabang</h4></center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <table class="table table-hover table-bordered" id="tableCabang">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Cabang</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th><a class="btn btn-primary btn-sm" href="<?php echo site_url('Admin/Cabang/create')?>"><i class="fa fa-plus"></i></a></th>
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($allData as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->id_cabang ?></td>
                  <td><?php echo $tampil->nama_cabang?></td>
                  <td><?php echo $tampil->alamat_cabang ?></td>
                  <td><?php echo $tampil->kota?></td>
                  <td>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url("Admin/Cabang/Update/$tampil->id_cabang")?>"><i class="fa fa-edit"></i></a>
                     <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah anda yakin ?')" href ="<?php echo site_url("Admin/Cabang/Delete/$tampil->id_cabang")?>"><i class="fa fa-trash-o"></i></a> 
                    </td>
                </tr>
              <?php endforeach?>
              </tbody>
              </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

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

  });
</script>


