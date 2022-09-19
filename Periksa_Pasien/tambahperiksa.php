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
		<center><h1><p>Tambah Data Periksa Pasien</p></h1></center>
		<div class="col-md-6">
			<form class="" action="prosestambahperiksa.php" method="post">
				<label for="kd_periksa">Kode Periksa</label>
				<input type="number" class="form-control" name="kd_periksa" value=""><br>

				<label for="kd_dokter">Kode Dokter</label>
				<input type="number" class="form-control" name="kd_dokter" value=""><br>

				<label for="kd_pasien">Kode Pasien</label>
				<input type="number" class="form-control" name="kd_pasien" value=""><br>

				<label for="diagnosa">Diagnosa</label>
				<input type="text" class="form-control" name="diagnosa" value=""><br>

				<label for="tindakan">Tindakan</label>
				<input type="text" class="form-control" name="tindakan" value=""><br>

				<label for="biaya">Biaya</label>
				<input type="number" class="form-control" name="biaya"value=""><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>