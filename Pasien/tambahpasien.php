<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<style>
		p{
			color : #5bc0de;}
		body {
			background-color: #d4d0c6;}
	</style>
</head>
<body>
	<div class="container">
		<center><h1><p>Tambah Data Pasien</p></h1></center>
		<div class="col-md-6">
			<form class="" action="prosestambah.php" method="post">
				<label for="kd_pasien">Kode Pasien</label>
				<input type="number" class="form-control" name="kd_pasien" value=""><br>

				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" value=""><br>

				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="radio" name="jenis_kelamin" value="L">Laki-laki
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan<br><br>

				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir" value=""><br>

				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="text" class="form-control" name="tgl_lahir" placeholder="YYYY/MM/DD" value=""><br>

				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" name="alamat" value=""><br>

				<label for="usia">Usia</label>
				<input type="number" class="form-control" name="usia" value=""><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>