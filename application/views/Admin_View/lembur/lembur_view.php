
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
              <h3 class="box-title">Data Lembur Karyawan</h3>
              <?php if($this->session->flashdata('dialogbox')):?>
                <div class="alert alert-info alert-dismissible">
                  <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo $this->session->flashdata('dialogbox');?>
                </div>
              <?php endif ;?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url("admin/lembur/inputLembur/")?>" class= "btn btn-primary btn-md">Input Lembur</a>
              <hr>
               <div class="row">
                 <div class="col-xs-3">
                  <label>Nama </label>
                  <select name ="emp_no" class="form-control">
                  <option value="">-Pilih-</option>
                  <?php foreach($pilihNama as $tampil):?>
                  <option value="<?php echo $tampil->emp_no?>"><?php echo $tampil->nama_karyawan?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="col-xs-3">
                  <label>Tanggal Awal</label>
                  <input type="text" name= "start" class="form-control" placeholder="start" id="start">
                </div>
                  <div class="col-xs-3">
                    <label>Tanggal Akhir</label>
                  <input type="text"  name ="end" class="form-control" placeholder="End" id="end">
                </div>
              </div>
             <hr>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Lembur</th>
                  <th>ID Karyawan</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>keterangan</th>
                  <th>Upah </th>
                  <th>Action </th>
                </tr>
                </thead>
                <?php 
                 $no=1;
                foreach ($dataLembur as $tampil):?>
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
 <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

 <script>
    $('#start').datepicker({
      viewMonth:true,
      viewYears:true,
      autoclose: true,
      orientation :"bottom left",
      //daysOfWeekDisabled: "0,6",
      todayHighlight : true,
      minDate: "-3",
      format : 'dd-mm-yyyy',
      
    });
    $('#end').datepicker({
      viewMonth:true,
      viewYears:true,
      autoclose: true,
      orientation :"bottom left",
      //daysOfWeekDisabled: "0,6",
      todayHighlight : true,
      minDate: "-3",
      format : 'dd-mm-yyyy',

    });
</script>


  