<?php
$level = $this->session->userdata('level');
?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         <li><a href="<?php echo site_url('home')?>"><i class="fa fa-align-justify text-aqua"></i> <span>Dashboard</span></a></li>
         
         <?php if ($level =='1' || $level=='2') :?>
          <li><a href="<?php echo site_url('user')?>"><i class="fa fa-user text-aqua"></i> <span>User</span></a></li>
        <?php endif ;?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bank text-aqua"></i> <span>Master Perusahaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('Departemen/index')?>"><i class="fa fa-circle-o text-aqua"></i> Departemen</a></li>
            <li><a href="<?php echo site_url('divisi/index')?>"><i class="fa fa-circle-o text-aqua"></i> Divisi</a></li>
             <li><a href="<?php echo site_url('cabang/index')?>"><i class="fa fa-circle-o text-aqua"></i> Cabang</a></li>
            <li><a href="<?php echo site_url('jabatan/index')?>"><i class="fa fa-circle-o text-aqua"></i> Jabatan</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users text-aqua"></i> <span>Master Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('karyawan/index')?>"><i class="fa fa-circle-o text-aqua"></i> Data Karyawan</a></li>
             <li><a href="<?php echo site_url('karyawan/create')?>"><i class="fa fa-circle-o text-aqua"></i> Add Karyawan</a></li>
            <li><a href="<?php echo site_url('karyawan/create')?>"><i class="fa fa-circle-o text-aqua"></i> Gaji</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar text-aqua"></i> <span>Master Absensi  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('absen')?>"><i class="fa fa-circle-o text-aqua"></i> Absen</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square text-aqua"></i> <span>Master BPJS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('Bpjs/index')?>"><i class="fa fa-circle-o text-aqua"></i> Detail BPJS</a></li>
            <li><a href="<?php echo site_url('Bpjs/generate')?>"><i class="fa fa-circle-o text-aqua"></i> Generate BPJS </a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase text-aqua"></i> <span>Master Lembur</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('lembur')?>"><i class="fa fa-circle-o text-aqua"></i> Data Lembur</a></li>
            <li><a href="<?php echo site_url('lembur/inputLembur')?>"><i class="fa fa-circle-o text-aqua"></i> input Lembur</a></li>
          </ul>
        </li>
        <?php if($level == '1' || $level == '2'):?>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-book text-aqua"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-circle-o text-aqua"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o text-aqua"></i> Dashboard v2</a></li>
          </ul>
        </li>
      <?php endif ;?>
        <li class="header">&copy INDOMEGA VISION </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>