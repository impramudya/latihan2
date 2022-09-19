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
		<center><h1><p>Update Data Dokter</p></h1></center>
		<?php
			include '../koneksi.php';
			$kd_dokter=$_GET['kd_dokter'];
			$data=mysqli_query($koneksi,"SELECT * FROM dokter WHERE kd_dokter='$kd_dokter' ") or die(mysqli_error($koneksi));
			$baris=mysqli_fetch_array($data);
		?>
		<div class="col-md-6">
			<form class="" action="prosesupdatedokter.php?kd_dokter=<?php echo $kd_dokter ?>" method="post">
				<label for="kd_dokter">Kode Dokter</label>
				<input type="number" class="form-control" name="kd_dokter" value="<?php echo $baris['kd_dokter'] ?>"><br>

				<label for="nama_dokter">Nama Dokter</label>
				<input type="text" class="form-control" name="nama_dokter" value="<?php echo $baris['nama_dokter'] ?>"><br>

				<label for="spesialis">Spesialis</label>
				<input type="text" class="form-control" name="spesialis" value="<?php echo $baris['spesialis'] ?>"><br>

				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="hidden" name="jenis_kelamin" value="<?php echo $baris['jenis_kelamin'] ?>">
				<input type="radio" name="jenis_kelamin" value="L">Laki-laki
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan<br><br>

				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" name="alamat" value="<?php echo $baris['alamat'] ?>"><br>

				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo $baris['email'] ?>"><br>

				<label for="no_telp">No. Telepon</label>
				<input type="text" class="form-control" name="no_telp" value="<?php echo $baris['no_telp'] ?>"><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>