<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Periksa Pasien</title>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<style>
		p{
			color : orange;}
		body {
			background-color: #d4d0c6;}
	</style>
</head>
<body>
	<div class="container">
		<center><h1><p>Update Data Periksa Pasien</p></h1></center>
		<?php
			include '../koneksi.php';
			$kd_periksa=$_GET['kd_periksa'];
			$data=mysqli_query($koneksi,"SELECT * FROM periksa_pasien WHERE kd_periksa='$kd_periksa' ") or die(mysqli_error($koneksi));
			$baris=mysqli_fetch_array($data);
		?>
		<div class="col-md-6">
			<form class="" action="prosesupdateperiksa.php?kd_periksa=<?php echo $kd_periksa ?>" method="post">
				<label for="kd_periksa">Kode Periksa</label>
				<input type="number" class="form-control" name="kd_periksa" value="<?php echo $baris['kd_periksa'] ?>"><br>

				<label for="kd_dokter">Kode Dokter</label>
				<input type="number" class="form-control" name="kd_dokter" value="<?php echo $baris['kd_dokter'] ?>"><br>

				<label for="kd_pasien">Kode Pasien</label>
				<input type="number" class="form-control" name="kd_pasien" value="<?php echo $baris['kd_pasien'] ?>"><br>

				<label for="diagnosa">Diagnosa</label>
				<input type="text" class="form-control" name="diagnosa" value="<?php echo $baris['diagnosa'] ?>"><br>

				<label for="tindakan">Tindakan</label>
				<input type="text" class="form-control" name="tindakan" value="<?php echo $baris['tindakan'] ?>"><br>

				<label for="biaya">Biaya</label>
				<input type="number" class="form-control" name="biaya" value="<?php echo $baris['biaya'] ?>"><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>