<style type ="text/css">
body {
  font-family:arial;
}
@media print{  
  .no-print{
    display: none;
  }
}
  
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        PT INDOMEGA VISION
        <small>  </small>
      </h3>
    </section>
     
    <!-- Main content -->
    <section class="content"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <center><h3 class="box-title">Rincian Data BPJS Karyawan</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             <table class="table table-hover table-bordered" id="tabelCetak">
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
                  <td><?php echo number_format($tampil->gaji_bpjs,0,',','.')?></td>
                  <td><?php echo number_format($tampil->jht_perusahaan,0,',','.') ?></td>
                  <td><?php echo number_format($tampil->jht_karyawan,0,',','.')?></td>
                  <td><?php echo number_format($tampil->jkk_perusahaan,0,',','.')?></td>
                  <td><?php echo number_format($tampil->jk_perusahaan,0,',','.')?></td>
                </tr>
              <?php endforeach;?>
              </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <a href="#" class="no-print btn btn-info" onclick="window.print();">Print / Cetak</a>
          <!-- /.box -->
        </div>
      </div>
    </section> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; IMV  .</strong> 
    reserved.
    <hr>
  </footer>
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#tableCetak').DataTable();

  } );
</script>


