<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title ?></title>
	<style type="text/css">
		body {
			font-family: Arial;
			color: black;
		}
	</style>
</head>

<body>

	<center>
		<td><img src="<?php echo base_url() . 'assets/img/Logojne.jpg' ?>" width="250px"></td>
		<h1>JNE GEMPOL CIPAYUNG</h1>
		<h2>Laporan Absensi Pegawai</h2>
	</center>

	<?php
	$bulan = $this->input->post('bulan');
	$tahun = $this->input->post('tahun');
	?>
	<table>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo $bulan ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo $tahun ?></td>
		</tr>
	</table>


	<table class="table table-bordered table-striped mt-4">
		<tr>
			<th class="text-center" width="3%">No</th>
			<th>Nama Pegawai</th>
			<th>Kode Pegawai</th>
			<th>Jabatan</th>
			<th>Hadir</th>
			<th>Sakit</th>
			<th>Alpha</th>
		</tr>

		<?php $no = 1;
		foreach ($lap_kehadiran as $l) : ?>
			<tr>
				<td style="text-align:center"><?php echo $no++ ?></td>
				<td><?php echo $l->nama_pegawai ?></td>
				<td><?php echo $l->kode_pegawai ?></td>
				<td><?php echo $l->nama_jabatan ?></td>
				<td><?php echo $l->hadir ?></td>
				<td><?php echo $l->sakit ?></td>
				<td><?php echo $l->alpha ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>

<script type="text/javascript">
	window.print();
</script>