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
			<?php
        if(isset($data)){
        ?>
			<div class="table-responsive">
				<table class="table table-light data">
					<thead class="thead-light">
						<tr>
							<th scope="col">NIS</th>
							<th scope="col">Nama</th>
							<th scope="col">No Absen</th>
							<th scope="col">Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($data as $row): ?>
						<tr>
							<td>
								<?php echo $row->nis; ?>
							</td>
							<td>
								<?php echo $row->nama; ?>
							</td>
							<td>
								<?php echo $row->no_absen; ?>
							</td>
							<td>
								<p>telah mengumpulkan</p>
							</td>
							<td>
								<a
									href="<?php echo base_url()?>daftar_pengumpulan/jawaban?kode_soal=<?php echo $row->kode_soal; ?>&nis=<?php echo $row->nis; ?>"><button
										type="button" class="btn btn-sm btn-info">Lihat jawaban</button></a>
							</td>

						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
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