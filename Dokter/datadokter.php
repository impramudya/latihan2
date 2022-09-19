<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Dokter</title>
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
		<center><h1><p>Data Dokter</p></h1></center>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Dokter</th>
					<th>Nama Dokter</th>
					<th>Spesialis</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>No. Telepon</th>
					<th>
						<a class="btn btn-success" href="tambahdokter.php">Tambah</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include '../koneksi.php';
					$data=mysqli_query($koneksi,"SELECT * FROM dokter") or die(mysqli_error($koneksi));
					foreach ($data as $baris) { ?>
					<tr>
						<td><?php echo $baris['kd_dokter'] ?></td>
						<td><?php echo $baris['nama_dokter'] ?></td>
						<td><?php echo $baris['spesialis'] ?></td>
						<td><?php echo $baris['jenis_kelamin'] ?></td>
						<td><?php echo $baris['alamat'] ?></td>
						<td><?php echo $baris['email'] ?></td>
						<td><?php echo $baris['no_telp'] ?></td>
						<td>
							<a class="btn btn-warning" href="updatedokter.php?kd_dokter=<?php echo $baris['kd_dokter'] ?>">Update</a>
							<a class="btn btn-danger" href="hapusdokter.php?kd_dokter=<?php echo $baris['kd_dokter'] ?>">Hapus</a>
						</td>
					</tr>
				<?php }
				?>
			</tbody>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>
						<a class="btn btn-info" href="../index.php">Kembali Ke Home</a>
					</th>
				</tr>
		</table>
	</div>
</body>
</html>