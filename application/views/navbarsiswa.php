<nav class="navbar navbar-expand-md navbar-dark bg-primary">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
		data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="<?php echo base_url('siswa')?>">
		<img src="<?php echo base_url('assets/image/logo.png'); ?>" width="30" height="30"
			class="d-inline-block align-top" alt="">
		<span class="menu-collapsed">UKBM Apps</span>
	</a>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">

			<li class="nav-item dropdown d-sm-block d-md-none">
				<a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					Soal
                </a>
                <a class="nav-link" href="<?php echo base_url('login/logout')?>">
					Logout
				</a>
				<div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
					<?php
        if(isset($daftarsoal)){
        ?>
					<?php foreach($daftarsoal as $rowdatasoal): ?>

					<a class="dropdown-item"
						href="<?php echo base_url('halamanpengerjaan?kode_soal='.$rowdatasoal->kode_soal)?>">UKBM
						<?php echo $rowdatasoal->kode_soal; ?></a>
					<?php endforeach; ?>


					<?php
      }else{
        echo "no record found";
    }
	?>
                </div>
                
			</li>

		</ul>
	</div>
</nav>