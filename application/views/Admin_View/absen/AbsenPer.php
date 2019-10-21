

</style>
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
   <!-- Main content -->
    <section class="content">
     
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              <hr>
          <!--    <?php echo form_open_multipart("admin/absen/import");?>
               <?php echo validation_errors()?>
                <input type="file" name="file" size=""/>
                <br>
                <input type="submit" value="upload" class="btn btn-info btn-sm" />
                </form> -->
            </div>
            <?php if($this->session->flashdata('msg')): ?>
            <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-check"></i>
            <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <?php endif; ?>
            <!-- /.box-header -->
            <div class="table-responsive" >
              <table class="table table-hover table-bordered table-striped" id="tableAbsenPer">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Emp_no</th><th>Name</th><th>Auto-Assign</th>
                    <th>Date</th><th>Timetable</th><th>On Duty</th><th>Off Duty</th><th>Clock In</th><th>Clock Out</th>
                    <th>Late</th><th>Late < 60</th><th>Late > 60</th>
                    <th>Early</th><th>Absen</th><th>Sakit</th><th>Cuti</th>
                    <th>Unpaid</th><th>50000</th><th>Keterangan</th><th><?php echo $count->jumlahpotongan ?></th>
                  <th>
                    Action
                  </th>
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($data as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->emp_no ?></td>
                  <td><?php echo $tampil->name?></td>
                  <td><?php echo $tampil->auto_assign?></td>
                  <td><?php echo $tampil->date?></td>
                  <td><?php echo $tampil->timetable?></td>
                  <td><?php echo $tampil->on_duty?></td>
                  <td><?php echo $tampil->off_duty?></td>
                  <td><?php echo $tampil->clock_in?></td>
                  <td><?php echo $tampil->clock_out?></td>
                  <td><?php echo $tampil->late?></td>
                  <td><?php echo $tampil->late_bellow?></td>
                  <td><?php echo $tampil->late_over?></td>
                  <td><?php echo $tampil->early?></td>
                  <td><?php echo $tampil->absen?></td>
                  <td><?php echo $tampil->sakit?></td>
                  <td><?php echo $tampil->cuti?></td>
                  <td><?php echo $tampil->unpaid?></td>
                  <td><?php echo $tampil->potongan?></td>
                  <td><?php echo $tampil->keterangan?></td>
                  <td>
                     <a class="btn btn-info btn-sm" href="<?=site_url("admin/absen/viewBy/$tampil->emp_no")?>" ><i class="fa fa-edit"></i></a>
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
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#tableAbsenPer').DataTable();

  } );
</script>
