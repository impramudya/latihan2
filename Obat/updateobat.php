<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Obat</title>
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
		<center><h1><p>Update Data Obat</p></h1></center>
		<?php
			include '../koneksi.php';
			$kd_obat=$_GET['kd_obat'];
			$data=mysqli_query($koneksi,"SELECT * FROM obat WHERE kd_obat='$kd_obat' ") or die(mysqli_error($koneksi));
			$baris=mysqli_fetch_array($data);
		?>
		<div class="col-md-6">
			<form class="" action="prosesupdateobat.php?kd_obat=<?php echo $kd_obat ?>" method="post">
				<label for="kd_obat">Kode Obat</label>
				<input type="number" class="form-control" name="kd_obat" value="<?php echo $baris['kd_obat'] ?>"><br>

				<label for="nama">Nama Obat</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $baris['nama'] ?>"><br>

				<label for="jenis">Jenis Obat : </label>
				<input type="hidden" name="jenis" value="<?php echo $baris['jenis'] ?>">
				<input type="radio" name="jenis" value="tablet">Tablet
				<input type="radio" name="jenis" value="serbut"> Serbuk
				<input type="radio" name="jenis" value="pil"> Pil
				<input type="radio" name="jenis" value="kapsul"> Kapsul
				<input type="radio" name="jenis" value="larutan"> Larutan<br><br>

				<label for="stok">Stok</label>
				<input type="number" class="form-control" name="stok" value="<?php echo $baris['stok'] ?>"><br>

				<label for="tgl_expired">Tanggal Kadaluwarsa</label>
				<input type="text" class="form-control" name="tgl_expired" placeholder="YYYY/MM/DD" value="<?php echo $baris['tgl_expired'] ?>"><br>

				<label for="harga">Harga</label>
				<input type="number" class="form-control" name="harga" value="<?php echo $baris['harga'] ?>"><br>

				<button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</body>
</html>