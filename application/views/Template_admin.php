 <!DOCTYPE html>
 <head>
 	<title><?=$title?></title>
 	<?php $this->load->view('theme_admin/header')?>
 </head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		<?php $this->load->view('theme_admin/menubar')?>
		<?php $this->load->view('theme_admin/sidebar')?>
		<?php $this->load->view($konten)?>
		<footer>
			<?php $this->load->view('theme_admin/footer')?>
		</footer>
</div>
<!-- ./wrapper -->
</body>
</html>