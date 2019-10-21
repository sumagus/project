
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tanggal</th>
                  <th>ID Lembur</th>
                  <th>ID Karyawan</th>
                  <th>Nama </th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Upah</th>
                </tr>
                </thead>
                <?php 
                 $no=1;
                foreach ($dataLembur as $tampil):?>
                <tbody>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->id_lembur?></td>
                  <td><?php echo $tampil->tanggal?></td>
                  <td><?php echo $tampil->id_karyawan?></td>
                  <td><?php echo $tampil->nama?></td>
                  <td><?php echo $tampil->mulai?></td>
                  <td><?php echo $tampil->selesai?></td>
                  <td><?php echo $tampil->upah?></td>
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
    <strong>Indo Mega Vision .</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- Jquery --->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>


  