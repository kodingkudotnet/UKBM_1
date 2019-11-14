<html>

<head>

	<head>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
	</head>

</head>

<body style="background-color:#97CADB;">


	<!-- Start Sidebar -->
	<?php $this->view('navbar'); ?>


	<div class="row" id="body-row">
		<?php $this->view('leftmenu'); ?>

		<!-- End Sidebar -->

		<!-- MAIN -->
		<div class="col text-light">

			<h1>
				Selamat datang
			</h1>
			<p>Anda dapat melihat jawaban UKBM<br>Biologi yang telah dikerjakan para siswa</p>
			<button type="button" class="btn btn-info">Lihat Pekerjaan Siswa</button>
			<div class="sticky-bottom float-right"><img src="<?php echo base_url('assets/image/bg_home.png'); ?>"
					width="500" height="500" class="img-fluid"></div>
		</div>
	</div>

</body>

</html>