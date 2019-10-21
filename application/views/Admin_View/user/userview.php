
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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered table-striped" id="tableUser">
                <thead>
        <?php if($this->session->flashdata('dialogbox')): ?>
        <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i>
        <?php echo $this->session->flashdata('dialogbox'); ?>
        </div>
        <?php endif; ?>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th><a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/user/create')?>"><i class="fa fa-user-plus"></i></a></th>
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($allData as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->id_user?></td>
                  <td><?php echo $tampil->username?></td>
                  <td><?php echo $tampil->nama?></td>
                  <td><?php echo $tampil->email?></td>
                  <td><?php echo $tampil->level?></td>
                  <?php if($tampil->status == 'Y'):?>
                  <td><span class="label label-success"><?php echo $tampil->status?></span></td>
                  <?php elseif($tampil->status == 'N'):?>
                  <td><span class="label label-danger"><?php echo $tampil->status?></span></td>
                <?php endif;?>
                  <td>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url("admin/user/update/$tampil->id_user")?>"><i class="fa fa-edit"></i></a>
                     <a class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin')" href="<?php echo site_url("admin/user/delete/$tampil->id_user")?>"><i class="fa fa-trash-o"></i></a> 
                    <!--<?php echo anchor('admin/user/delete/'.$tampil->id_user,'<i class="fa fa-trash-o"></i>',array('class'=>'btn btn-danger btn-sm','onclick'=>' return confirm("apakah anda yakin ?") ? '));?>-->
                    
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
       <!-- Modal -->
  <div class="modal fade" id="confirmDelete" role="dialog">
    <div class="modal-dialog modal-sm modal-default">
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
           <?php foreach($deldata as $data);?>
           <?=form_open('user/delete')?>
           <?=form_hidden('id_user',$data->id)?>
           <?=form_button(['type'=>'submit','conten'=>'hapus'])?>
           <?=form_close()?>
           <?endforeach?>
        </div>
      </div>
    </div>
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
 o
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#tableUser').DataTable();

  } );
</script>

