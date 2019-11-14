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
	<?php $this->view('navbarsiswa'); ?>


	<div class="row" id="body-row">
		<?php $this->view('leftmenusiswa'); ?>

		<!-- End Sidebar -->

		<!-- MAIN -->

		<div class="col text-light" style="margin-top:20px">


			<?php
			$kodesoalsebelumnya = $this->input->get('kode_soal') - 1;
			$kodesoalselanjutnya = $this->input->get('kode_soal') + 1;
			//$statuspengumpulan = sizeof($datastatuspengumpulan);
			
			if($datasiswa->status_pengerjaan < $this->input->get('kode_soal')) { ?>
			<h1>
				Kamu belum bisa mengerjakan<br>UKBM <?php echo $this->input->get('kode_soal') ?>
			</h1>
			<p>Untuk dapat mengerjakan UKBM ini,<br>kamu harus menyelesaikan UKBM<br>sebelumnya</p>
			<a href="<?php echo base_url('halamanpengerjaan?kode_soal='.$kodesoalsebelumnya)?>"><button type="button"
					class="btn btn-info">Kerjakan UKBM sebelumnya</button></a>
			<div class="sticky-bottom float-right"><img src="<?php echo base_url('assets/image/bg_notice.png'); ?>"
					width="500" height="500" class="img-fluid"></div>

			<?php } elseif($datasiswa->status_pengerjaan == $this->input->get('kode_soal')){ ?>
				<?php if(sizeof($datajawabansementara)>0){ ?>
			<?php if(isset($datasoal)){ ?>
			<form method="POST" action="halamanpengerjaan/updatejawaban">
				<?php foreach($datasoal as $row): ?>
				<?php echo $row->no_soal; ?>.
				<?php echo $row->deskripsi_soal; ?> <br>

				<div class="input-group input-group-sm" style="margin-top:10px;margin-bottom:10px">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-lg">Jawaban</span>
					</div>
					<input type="hidden" name="id[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm"
						value="<?php foreach($datajawabansementara as $rowjawabansementara): ?><?php if($row->no_soal == $rowjawabansementara->no_soal){ ?><?php echo $rowjawabansementara->id; ?><?php } ?><?php endforeach; ?>">
						<input type="hidden" name="nis[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm" value="<?php echo $this->session->userdata('nis'); ?>">
					<input type="hidden" name="kode_soal[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm" value="<?php echo $row->kode_soal; ?>">
					<input type="hidden" name="no_soal[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm" value="<?php echo $row->no_soal; ?>">
					<input type="text" name="jawaban[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm"
						value="<?php foreach($datajawabansementara as $rowjawabansementara): ?><?php if($row->no_soal == $rowjawabansementara->no_soal){ ?><?php echo $rowjawabansementara->jawaban; ?><?php } ?><?php endforeach; ?>">
				</div>


				<?php endforeach; ?>
				<input type="submit" class="btn btn-primary" name="simpan" value="Update" />
				<input style="display:none;" type="submit" class="btn btn-dark triggered_pengumpulan" name="kumpulkan" value="Kumpulkan Jawaban" />
				<input type="button" class="btn btn-danger konfirmasipengumpulan" value="Kumpulkan"><br>
			</form>
			
			<?php
      }else{
        echo "no record found";
    }
    ?>
			<?php } else { ?>
			<?php if(isset($datasoal)){ ?>
			<form method="POST" action="halamanpengerjaan/simpanjawaban">
				<?php foreach($datasoal as $row): ?>
				<?php echo $row->no_soal; ?>.
				<?php echo $row->deskripsi_soal; ?> <br>

				<div class="input-group input-group-sm" style="margin-top:10px;margin-bottom:10px">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-lg">Jawaban</span>
					</div>
					<input type="hidden" name="nis[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm" value="<?php echo $this->session->userdata('nis'); ?>">
					<input type="hidden" name="kode_soal[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm" value="<?php echo $row->kode_soal; ?>">
					<input type="hidden" name="no_soal[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm" value="<?php echo $row->no_soal; ?>">
					<input type="text" name="jawaban[]" class="form-control" aria-label="Large"
						aria-describedby="inputGroup-sizing-sm">
					
				</div>


				<?php endforeach; ?>
				<input type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
				<input style="display:none;" type="submit" class="btn btn-dark triggered_pengumpulan" name="kumpulkan" value="Kumpulkan Jawaban" />
				<input type="button" class="btn btn-danger konfirmasipengumpulan" value="Kumpulkan"><br>
			</form>
			
			<?php
      }else{
        echo "no record found";
    }
    ?>
			<?php } ?>
			<?php } else{ ?>
			<h1>
				Kamu telah menyelesaikan UKBM <?php echo $this->input->get('kode_soal') ?>
			</h1>
			<p>Kamu dapat mengerjakan soal UKBM selanjutnya,<br>kamu juga dapat melihat hasil jawaban kamu<br>untuk
				dipelajari kembali</p>
			<a href="<?php echo base_url('halamanpengerjaan?kode_soal='.$kodesoalselanjutnya)?>"><button type="button"
					class="btn btn-info">Kerjakan UKBM selanjutnya</button></a>
			<a href="<?php echo base_url('hasilpengerjaan?kode_soal='.$this->input->get('kode_soal').'&nis='.$this->session->userdata('nis'))?>"><button type="button"
					class="btn btn-dark">Lihat jawaban kamu</button></a>
			<div class="sticky-bottom float-right"><img src="<?php echo base_url('assets/image/bg_finish.png'); ?>"
					width="500" height="500" class="img-fluid"></div>
			
			
			<?php } ?>




		</div>
	</div>

	<!-- Modal Konfirmasi -->
	<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				
					<div class="modal-body">
					<p style="text-align:center">Sudah yakin dengan jawaban kamu?<br><b>Soal UKBM tidak dapat dikerjakan ulang</b></p>
					
				<center><button style="width:120px" type="button" class="btn btn-primary trigger_pengumpulan"><img class="img-fluid"
							src="<?php echo base_url('assets/image/yes.png'); ?>"
							style="max-width:50px;max-height:40px;margin:10px">
						<p class="text-center font-weight-bold">Kumpulkan</p>
					</button>
					<button style="width:120px" type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><img class="img-fluid"
							src="<?php echo base_url('assets/image/no.png'); ?>"
							style="max-width:50px;max-height:50px;margin:10px">
						<p class="text-center font-weight-bold">Batal</p>
					</button></center>
					</div>
					</form> 
					</div>
					
				</div>
			</div>
		</div>

</body>
<script>
	jQuery(document).ready(function ($) {
		$('.konfirmasipengumpulan').click(function(){
		
		$.ajax({
			data: {
				
			},
			success: function (data) {
				//$('#detail_kamar').html(data);
				
				$('#konfirmasi').modal('show');
			}
		});

	});

	$('.trigger_pengumpulan').click(function(){
		
		$(".triggered_pengumpulan").click(); 
    return false;

	});


});
</script>

</html>