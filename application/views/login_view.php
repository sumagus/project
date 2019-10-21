
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p><b>IMV</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg">Selamat Datang  </h3>
   
   <p><?php echo validation_errors()?></p>
    <?php $error= $this->session->flashdata('errorLog');?>
     <?php if (!empty($error)):?>
     <p class="text-red"><?=$error?></p>
     <?php endif;?>

  <?php echo form_open('login/proses')?>
      <div class="form-group has-feedback"> 
        <input type="type" class="form-control" placeholder="username" name="username" id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
      <?php echo form_close()?>

    <br>
    <a href="#">I forgot my password</a><br>
  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
