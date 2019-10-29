 <?php
$username = $this->session->userdata('username');
$email = $this->session->userdata('email');
 ?>

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IMV</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IMV</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("asset/dist/img/avatar5.png")?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("asset/dist/img/avatar5.png")?>" class="img-circle" alt="User Image">

                <p>
                  login As <?php echo $username?> - 
                  <small><?php echo $email?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer"> 
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>