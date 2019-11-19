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
              <h3 class="box-title">Absen Karyawan Periode  </h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
            <?php if(isset($dataFilter))?>
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Lembur</th>
                  <th>ID Karyawan</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Upah </th>
                  <th>Action </th>
                </tr>
                </thead>
                <?php 
                 $no=1;
                 
                foreach ($dataFilter as $tampil):?>
               
                <tbody>
                <tr>
                  <td><?php echo $tampil->id_lembur?></td>
                  <td><?php echo $tampil->emp_no?></td>
                  <td><?php echo $tampil->nama_karyawan?></td>
                  <td><?php echo $tampil->tanggal?></td>
                  <td><?php echo $tampil->keterangan?></td>
                  <td><?php echo $tampil->uang_lembur?></td>
                    
                    <td>
                     <a class="btn btn-info btn-sm" href="<?=site_url("admin/lembur/update/$tampil->id_lembur")?>" ><i class="fa fa-edit"></i></a>
                     <!--<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDelete"><i class="fa fa-trash-o"></i></a> -->
                    <a class="btn btn-danger btn-sm" href="<?=site_url("admin/lembur/delete/$tampil->id_lembur")?>" onclick="return confirm('Apakah Anda Yakin')"  ><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>
                
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
<!-- Jquery --->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>
  <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<script>
  $('#start').datepicker({
      autoclose: true,
      orientation :"bottom left",
      format:'dd-mm-yyyy',     
    });
  $('#end').datepicker({
      autoclose: true,
      orientation :"bottom left",
      format:'dd-mm-yyyy',     
    });


</script>