
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"> </i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- TABLE -->
     <div class="row">
        <div class="col-xs-12">
   		 <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
             <?php echo form_open_multipart("admin/employee/import");?>

             <?php echo validation_errors()?>


<?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php endif; ?>

<input type="file" name="file" size=""/>
<br>
<input type="submit" value="upload" class="btn btn-info btn-sm" />

</form>
<hr>
<br>
  <div class="table responsive nowrap" >
  <table class="table table-hover table-bordered " id="tableAbsen">
	<thead> 
	<tr>
		<th>EMP ID</th><th>NAME</th><th>STATUS</th>
		<th>JOIN DATE</th>
	</tr>
	</thead>
	<?php
	foreach($dataEmployee as $tampil):
	 ?>
	<tbody>
		<tr>
			<td><?php echo $tampil->emplid?></td>
      <td><?php echo $tampil->emplname?></td>
      <td><?php echo $tampil->emplstatus?></td>
      <td><?php echo $tampil->joindate?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table> 
</div><!-- end of class table responsive -->
			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
           </div>
        <!-- /.col -->
    	  </div>
  </div>
  <!-- content wrapper END OF DIV --> 
<footer>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


</footer>

<script type="text/javascript">
  $(document).ready( function () {
      $('#tableEmployee').DataTable();

  } );
</script>