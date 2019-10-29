

</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
      <h3>
        Daftar Departemen
      </h3>
    </center>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("Admin/Departemen")?>"><i class="fa fa-dashboard"></i> Home</a></li>
        
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
     
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
             <?php if($this->session->flashdata('dialogbox')): ?>
            <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-check"></i>
            <?php echo $this->session->flashdata('dialogbox'); ?>
            </div>
            <?php endif; ?>
            <!-- /.box-header -->
            <div class="display responsive nowrap" >
              <table class="table table-hover table-bordered table-striped" id="tableDepartemen">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Departemen</th>
                  <th><a class="btn btn-primary btn-sm" href="<?=site_url('admin/departemen/create')?>" ><i class="fa fa-plus"></i></a></th>
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($allData as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->id_departemen ?></td>
                  <td><?php echo $tampil->nama_departemen?></td>
                  <td>
                     <a class="btn btn-info btn-sm" href="<?=site_url("admin/departemen/update/$tampil->id_departemen")?>" ><i class="fa fa-edit"></i></a>
                     <!--<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDelete"><i class="fa fa-trash-o"></i></a> -->
                    <a class="btn btn-danger btn-sm" href="<?=site_url("admin/departemen/delete/$tampil->id_departemen")?>" onclick="return confirm('Apakah Anda Yakin')" ><i class="fa fa-trash-o"></i></a>
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
<!-- Modal Create  -->
  <div class="modal fade" id="tambah" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Create Departemen</h5>
        </div>
        <div class="modal-body">
          <div class="box-body">
           <p><?=validation_errors()?></p>
           <form action="<?php echo site_url("admin/departemen/create")?>">
                <div class="form-group">
                  <label for="id_departemen" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_departemen" id="id_departemen" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_departemen" class="col-sm-2 control-label">Departemen</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" nama ="nama_departemen" id="nama_departemen">
                  </div>
                </div>
        </div>
        <div class="modal-footer">
          <?php echo form_button(['type'=>'submit','content'=>'oke','class'=>'btn btn-primary'])?>
          <button type="button" class="btn btn-primary" data-dismiss="modal">cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="confirmDelete" role="dialog">
    <div class="modal-dialog modal-sm modal-success">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Perhatian !!</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <a class="btn btn-danger btn-sm" href="<?php echo site_url("admin/departemen/delete/$tampil->id_departemen")?>"><i class="fa fa-trash-o"></i></a> 
        </div>
      </div>
    </div>
  </div>
</div>

 

</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#tableDepartemen').DataTable();

  } );
</script>
