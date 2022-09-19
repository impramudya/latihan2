<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Dokter</title>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<style>
		p{
			color : #5cb85c;}
		body {
			background-color: #d4d0c6;}
	</style>
</head>
<body>
	<div class="container">
		<center><h1><p>Tambah Data Dokter</p></h1></center>
		<div class="col-md-6">
			<form class="" action="prosestambahdokter.php" method="post">
				<label for="kd_dokter">Kode Dokter</label>
				<input type="number" class="form-control" name="kd_dokter" value=""><br>

				<label for="nama_dokter">Nama</label>
				<input type="text" class="form-control" name="nama_dokter" value=""><br>

				<label for="spesialis">Spesialis</label>
				<input type="text" class="form-control" name="spesialis" value=""><br>

				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="radio" name="jenis_kelamin" value="L">Laki-laki
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan<br><br>

				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" name="alamat" value=""><br>

				<label for="email">Email</label>
				<input type="text" class="form-control" name="email"value=""><br>

				<label for="no_telp">No. Telepon</label>
				<input type="text" class="form-control" name="no_telp" value=""><br><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>