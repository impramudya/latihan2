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
		<center><h1><p>Update Data</p></h1></center>
		<?php
			include '../koneksi.php';
			$kd_pasien=$_GET['kd_pasien'];
			$data=mysqli_query($koneksi,"SELECT * FROM pasien WHERE kd_pasien='$kd_pasien' ") or die(mysqli_error($koneksi));
			$baris=mysqli_fetch_array($data);
		?>
		<div class="col-md-6">
			<form class="" action="prosesupdate.php?kd_pasien=<?php echo $kd_pasien ?>" method="post">
				<label for="kd_pasien">Kode Pasien</label>
				<input type="number" class="form-control" name="kd_pasien" value="<?php echo $baris['kd_pasien'] ?>"><br>

				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $baris['nama'] ?>"><br>

				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="hidden" name="jenis_kelamin" value="<?php echo $baris['jenis_kelamin'] ?>"><br>
				<input type="radio" name="jenis_kelamin" value="L">Laki-laki
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan<br><br>

				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $baris['tempat_lahir'] ?>"><br>

				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="text" class="form-control" name="tgl_lahir" placeholder="YYYY/MM/DD" value="<?php echo $baris['tgl_lahir'] ?>"><br>

				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" name="alamat" value="<?php echo $baris['alamat'] ?>"><br>

				<label for="usia">Usia</label>
				<input type="number" class="form-control" name="usia" value="<?php echo $baris['usia'] ?>"><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>