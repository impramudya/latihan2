<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Pasien</title>
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
		<center><h1><p>Data Pasien</p></h1></center>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Pasien</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Usia</th>
					<th>
						<a class="btn btn-success" href="tambahpasien.php">Tambah</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include '../koneksi.php';
					$data=mysqli_query($koneksi,"SELECT * FROM pasien") or die(mysqli_error($koneksi));
					foreach ($data as $baris) { ?>
					<tr>
						<td><?php echo $baris['kd_pasien'] ?></td>
						<td><?php echo $baris['nama'] ?></td>
						<td><?php echo $baris['jenis_kelamin'] ?></td>
						<td><?php echo $baris['tempat_lahir'] ?></td>
						<td><?php echo $baris['tgl_lahir'] ?></td>
						<td><?php echo $baris['alamat'] ?></td>
						<td><?php echo $baris['usia'] ?></td>
						<td>
							<a class="btn btn-warning" href="updatepasien.php?kd_pasien=<?php echo $baris['kd_pasien'] ?>">Update</a>
							<a class="btn btn-danger" href="hapuspasien.php?kd_pasien=<?php echo $baris['kd_pasien'] ?>">Hapus</a>
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