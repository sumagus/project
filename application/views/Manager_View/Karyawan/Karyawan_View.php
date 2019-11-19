<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
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
     
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Karyawan</h3> 
              <div class="box-tools">
                
              </div>
            </div>
             <?php if($this->session->flashdata('dialogbox')): ?>
            <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-check"></i>
            <?php echo $this->session->flashdata('dialogbox'); ?>
            </div>
            <?php endif; ?>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered table-striped" id="tableKaryawan">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th><a class="btn btn-primary btn-sm" href="<?=site_url('admin/karyawan/createIdentitas')?>" ><i class="fa fa-plus"></i></a></th>
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($dataIdentitas as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->emp_no ?></td>
                  <td><?php echo $tampil->ktp?></td>
                  <td><?php echo $tampil->nama_karyawan ?></td>
                  <td><?php echo $tampil->gender?></td>

                  <td>
                     <a class="btn btn-info btn-sm" href="<?=site_url("admin/karyawan/Personal/$tampil->emp_no")?>" ><i class="fa fa-edit"></i></a>
                     <!--<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDelete"><i class="fa fa-trash-o"></i></a> -->
                    <a class="btn btn-danger btn-sm" href="<?=site_url("admin/karyawan/delete/$tampil->emp_no")?>" ><i class="fa fa-trash-o"></i></a>
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
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; Indomega Vision</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<!--<script type="text/javascript">
  $(document).ready( function () {
      $('#tableKaryawan').DataTable();
      pagingType:simple;

  } );
</script>-->
<script>$(document).ready(function() {
    $('#tableKaryawan').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ]
    } );
} );
</script>

