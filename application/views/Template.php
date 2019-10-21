 <!DOCTYPE html>
 <head>
 	<title><?=$title?></title>
 	<?php $this->load->view('theme/header')?>
 </head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		<?php $this->load->view('theme/menubar')?>
		<?php $this->load->view('theme/sidebar')?>
		<?php $this->load->view($konten)?>
		<footer>
			<?php $this->load->view('theme/footer')?>
		</footer>
</div>
<!-- ./wrapper -->
</body>
</html>