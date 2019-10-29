 <!DOCTYPE html>
 <head>
 	<title><?=$title?></title>
 	<?php $this->load->view('Theme_Admin/Header')?>
 </head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		<?php $this->load->view('Theme_Admin/Menubar')?>
		<?php $this->load->view('Theme_Admin/Sidebar')?>
		<?php $this->load->view($konten)?>
		<footer>
			<?php $this->load->view('Theme_Admin/Footer')?>
		</footer>
</div>
<!-- ./wrapper -->
</body>
</html>