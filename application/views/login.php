<html>

<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
</head>

<body>

	<div class="row no-gutters w-100 h-100 justify-content-center align-items-center">
		<div class="col h-100" style="background-color:#97CADB">
			<img class="mx-auto d-block img-fluid" src="<?php echo base_url('assets/image/home1.png'); ?>"
				style="min-width:200px;max-height: 350px;margin-top:20%">
		</div>
		<div class="col h-100 text-light" style="background-color:#018ABE">
			<p class="font-weight-bold text-center" style="margin-top:25%">Halo, selamat datang di UKBM Apps</p>
			<p class="text-center">Masuk sebagai </p>

			<div class="row no-gutters justify-content-center align-items-center">
				<div class="col">
				<a href="<?php echo base_url('login/guru')?>">
				<button type="button" class="mx-auto d-block btn btn-info btn-sm"><img class="img-fluid"
							src="<?php echo base_url('assets/image/home_guru.png'); ?>"
							style="max-width:150px;margin:10px">
						<p class="text-center font-weight-bold">Guru</p>
					</button>
				</a>

				</div>
				<div class="col">
				<a href="<?php echo base_url('login/siswa')?>">
				<button type="button" class="mx-auto d-block btn btn-info btn-sm"><img class="img-fluid"
							src="<?php echo base_url('assets/image/home_siswa.png'); ?>"
							style="max-width:150px;margin:10px">
						<p class="text-center font-weight-bold">Siswa</p>
					</button>
				</a>

				</div>
			</div>

		</div>

</body>

</html>
