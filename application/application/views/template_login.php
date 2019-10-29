 <!DOCTYPE html>
 <head>
 	<link rel="icon" href="<?php echo base_url('asset/img/logo.jgp') ?>" type="image">
 	<title><?=$title?></title>
 	<?php $this->load->view('theme/header')?>
 </head>
	
		
		<?php $this->load->view($konten)?>
		<footer>
			<?php $this->load->view('theme/footer')?>
		</footer>
</div>
<!-- ./wrapper -->
</body>
</html>