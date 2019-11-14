<div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
	<ul class="list-group">
		<li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
			<small>Soal</small>
		</li>
		<?php
        if(isset($daftarsoal)){
        ?>
		<?php foreach($daftarsoal as $rowdatasoal): ?>
		<a href="<?php echo base_url('halamanpengerjaan?kode_soal='.$rowdatasoal->kode_soal)?>"
			class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-start align-items-center">
				<img class="submenu-icon mr-auto" src="<?php echo base_url('assets/image/soal_icon.png'); ?>" width="30"
					height="30" class="d-inline-block align-top" alt="">
				<span class="menu-collapsed">UKBM <?php echo $rowdatasoal->kode_soal; ?></span>
			</div>
		</a>

		<?php endforeach; ?>


		<?php
      }else{
        echo "no record found";
    }
	?>
	<li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
			<small>Option</small>
		</li>
		<a href="<?php echo base_url('login/logout'); ?>"
			class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-start align-items-center">
				<img class="submenu-icon mr-auto" src="<?php echo base_url('assets/image/logout_icon.png'); ?>"
					width="30" height="30" class="d-inline-block align-top" alt="">
				<span class="menu-collapsed">Logout</span>
			</div>
		</a>

	</ul>
</div>
