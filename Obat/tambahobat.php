<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Obat</title>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<style>
		p{
			color : #d9534f;}
		body {
			background-color: #d4d0c6;}
	</style>
</head>
<body>
	<div class="container">
		<center><h1><p>Tambah Data Obat</p></h1></center>
		<div class="col-md-6">
			<form class="" action="prosestambahobat.php" method="post">
				<label for="kd_obat">Kode Obat</label>
				<input type="number" class="form-control" name="kd_obat" value=""><br>

				<label for="nama">Nama Obat</label>
				<input type="text" class="form-control" name="nama" value=""><br>

				<label for="jenis">Jenis Obat : </label>
				<input type="radio" name="jenis" value="tablet">Tablet
				<input type="radio" name="jenis" value="serbut"> Serbuk
				<input type="radio" name="jenis" value="pil"> Pil
				<input type="radio" name="jenis" value="kapsul"> Kapsul
				<input type="radio" name="jenis" value="larutan"> Larutan<br><br>

				<label for="stok">Stok</label>
				<input type="number" class="form-control" name="stok" value=""><br>

				<label for="tgl_expired">Tanggal Kadaluwarsa</label>
				<input type="text" class="form-control" name="tgl_expired" placeholder="YYYY/MM/DD" value=""><br>

				<label for="harga">Harga</label>
				<input type="number" class="form-control" name="harga" value=""><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>