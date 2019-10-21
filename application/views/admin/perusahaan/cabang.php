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

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             <table class="table table-hover table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Cabang</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th><a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/cabang/create')?>"><i class="fa fa-plus"></i></a></th>
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
                     <a class="btn btn-info btn-sm" href="<?php site_url("admin/update/cabang/$tampil_id_cabang")?>"><i class="fa fa-edit"></i></a>
                     <a class="btn btn-danger btn-sm" href ="<?php site_url("admin/cabang/delete/$tampil->id_cabang")?>"><i class="fa fa-trash-o"></i></a> 
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
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

