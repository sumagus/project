
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
              <h3 class="box-title">Input Lembur Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                   <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Minimal</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
               
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">Nama</label>
                 <input type="text" class="form-control" id="" placeholder="">          
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="">address</label>
                 <input type="text" class="form-control" id="" placeholder="">          
              </div>
              <!-- form_group-->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Time</label>
                   <div class="input-group">
                     <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control timepicker">
                  </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="Upah">Upah</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="Selesai">Selesai</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-6">
               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

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
  <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
  
 
 <!-- DatePicker -->
<script>
    $('#datepicker').datepicker({
      autoclose: true,
      orientation :"bottom right",
      daysOfWeekDisabled: "0,6",
      todayHighlight : true,
      
    });
</script>
<!-- TimePikecer-->
<script>
 //Timepicker
    $(".timepicker").timepicker({
      showInputs: true
    });

</script>

  