 <!DOCTYPE html>
 <head>
 	<title><?=$title?></title>
 	<?php $this->load->view('Theme_Admin/header')?>
 </head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		<?php $this->load->view('Theme_Admin/menubar')?>
		<?php $this->load->view('Theme_Admin/sidebar')?>
		<?php $this->load->view($konten)?>
		<footer>
			<?php $this->load->view('Theme_Admin/footer')?>
		</footer>
</div>
<!-- ./wrapper -->
</body>
</html>