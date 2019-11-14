<html>

<head>

	<head>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/datatables.min.css')?>" />
		<script type="text/javascript" src="<?php echo base_url('assets/DataTables/datatables.min.js')?>"></script>
	</head>

</head>

<body style="background-color:#97CADB;">


	<!-- Start Sidebar -->
	<?php $this->view('navbar'); ?>


	<div class="row" id="body-row">
		<?php $this->view('leftmenu'); ?>

		<!-- End Sidebar -->

		<!-- MAIN -->

		<div class="col text-light" style="margin-top:20px">

		<?php foreach($datasiswa as $rowsiswa): ?>
		<p>Nama : <b><?php echo $rowsiswa->nama; ?></b></p>		
		<p>NIS : <b><?php echo $rowsiswa->nis; ?></b></p>
		<p>No Absen : <b><?php echo $rowsiswa->no_absen; ?></b></p>
		<?php endforeach; ?>	
			
			<?php
        if(isset($datasoal) && isset($datajawaban)){
        ?>

			<?php foreach($datasoal as $row): ?>
			<?php echo $row->no_soal; ?>.
			<?php echo $row->deskripsi_soal; ?> <br>
			<?php foreach($datajawaban as $rowjawaban): ?>
			<?php if($row->no_soal == $rowjawaban->no_soal){ ?>
			<div class="input-group input-group-sm" style="margin-top:10px;margin-bottom:10px">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-lg">Jawaban</span>
				</div>
				<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"
					value="<?php echo $rowjawaban->jawaban; ?>" readonly>
			</div>

			<?php } ?>
			<?php endforeach; ?>
			<?php endforeach; ?>

			<?php
      }else{
        echo "no record found";
    }
    ?>


		</div>
	</div>

</body>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$('.data').DataTable();
	});
</script>

</html>