<div class="container-fluid" style="margin-bottom: 100px">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div>

	<table class="table table-striped table-bordered">
		<tr>
			<th style="text-align:center">Bulan/Tahun</th>
			<th style="text-align:center">Gaji Pokok</th>
			<th style="text-align:center">Tj. Transportasi</th>
			<th style="text-align:center">Uang Makan</th>
			<th style="text-align:center">Potongan</th>
			<th style="text-align:center">Total Gaji</th>
			<th style="text-align:center">Cetak Slip</th>
		</tr>

		<?php foreach ($potongan as $p) : ?>
			<?php $potongan = $p->jml_potongan; ?>
		<?php endforeach; ?>

		<?php foreach ($gaji as $g) : ?>
			<?php $pot_gaji = $g->alpha * $potongan ?>
			<tr>
				<td><?php echo $g->bulan ?></td>
				<td>Rp. <?php echo number_format($g->gaji_pokok, 0, ',', '.') ?></td>
				<td>Rp. <?php echo number_format($g->tj_transport, 0, ',', '.') ?></td>
				<td>Rp. <?php echo number_format($g->uang_makan, 0, ',', '.') ?></td>
				<td>Rp. <?php echo number_format($pot_gaji, 0, ',', '.') ?></td>
				<td>Rp. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $pot_gaji, 0, ',', '.') ?></td>
				<td>
					<center>
						<a class="btn bt-sm btn-primary" href="<?php echo base_url('pegawai/dataGaji/cetakSlip/' . $g->id_kehadiran) ?>"><i class="fas fa-print"></i></a>
					</center>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>


</div>