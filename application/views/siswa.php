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
	<?php $this->view('navbarsiswa'); ?>


	<div class="row" id="body-row">
		<?php $this->view('leftmenusiswa'); ?>

		<!-- End Sidebar -->

		<!-- MAIN -->
		<div class="col text-light">

			<h1>
				<?php foreach($datasiswa as $rowsiswa): ?>
				Selamat datang <?php echo $rowsiswa->nama; ?>
				<?php endforeach; ?>
			</h1>
			<p>Kamu akan mengerjakan soal-soal <br>
				UKBM Biologi, kerjakan sebaik mungkin ya</p>
			<button type="button" class="btn btn-info">Mulai mengerjakan</button>
			<div class="sticky-bottom float-right"><img src="<?php echo base_url('assets/image/bg_home.png'); ?>"
					width="500" height="500" class="img-fluid"></div>
		</div>
	</div>

</body>

</html>