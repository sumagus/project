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
              <?php echo form_open('admin/absen/tesQuery',['method'=>'get'])?>
              <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
              <select name="emp_no" class="form-control" id="emp_no" >
                <option value="">-Pilih-</option>
                <?php foreach ($pilihNama as $tampil ):?>
                <option value="<?php echo $tampil->emp_no?>" ><?php echo $tampil->nama_karyawan?></option>
              <?php endforeach;?>
              </select>
              <?=form_error('start')?>
              </div>
              </div> 
              <br>  
              <div class="form-group">
              <label for="start" class="col-sm-2 control-label">Tanggal Awal</label>
              <div class="col-sm-10">
              <input type="text"  name="start" class="form-control" id="start" >
              <?=form_error('start')?>
              </div>
              </div> 
              <br>
              <div class="form-group">
              <label for="end" class="col-sm-2 control-label">Tanggal Akhir</label>
              <div class="col-sm-10">
              <input type="text"  name="end" class= "form-control" id="end" >
              <?=form_error('end')?>     
              </div> 
              <hr>
              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" id="filter" class="btn btn-info">Submit</button>
              </div>
              </div>
              <?php echo form_close()?>
              </div>
              <br>
            <hr>
            
            </form>
             <table class="table table-hover table-bordered" id="tableAbsen">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Total Cuti</th>
                    <th>Total sakit</th>
                    <th>Total absen</th>
                    <th>Total unpaid</th>
                    <th>Total potongan</th>
                </tr>
                <<tr>
                  <th><p>Total Karyawan = <?php echo $totalKaryawan?></p></th>
                </tr>
              </thead>
               <tbody>
                <tr>
                 <?php
                foreach ($data as $tampil) :?>
                <td><?php echo $tampil->name?></td>
                <td><?php echo $tampil->total_cuti?></td>
                <td><?php echo $tampil->total_sakit?></td>
                <td><?php echo $tampil->total_absen?></td>
                <td><?php echo $tampil->total_unpaid?></td>
                <td><?php echo $tampil->total_unpaid*50000?></td>
                </tr>
                </tbody>
                <?php endforeach; ?>  
                </tr>             
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