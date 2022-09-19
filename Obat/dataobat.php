<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Obat</title>
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
		<center><h1><p>Data Obat</p></h1></center>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Obat</th>
					<th>Nama Obat</th>
					<th>Jenis Obat</th>
					<th>Stok</th>
					<th>Tanggal Kadaluwarsa</th>
					<th>Harga</th>
					<th>
						<a class="btn btn-success" href="tambahobat.php">Tambah</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include '../koneksi.php';
					$data=mysqli_query($koneksi,"SELECT * FROM obat") or die(mysqli_error($koneksi));
					foreach ($data as $baris) { ?>
					<tr>
						<td><?php echo $baris['kd_obat'] ?></td>
						<td><?php echo $baris['nama'] ?></td>
						<td><?php echo $baris['jenis'] ?></td>
						<td><?php echo $baris['stok'] ?></td>
						<td><?php echo $baris['tgl_expired'] ?></td>
						<td><?php echo $baris['harga'] ?></td>
						<td>
							<a class="btn btn-warning" href="updateobat.php?kd_obat=<?php echo $baris['kd_obat'] ?>">Update</a>
							<a class="btn btn-danger" href="hapusobat.php?kd_obat=<?php echo $baris['kd_obat'] ?>">Hapus</a>
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
					<th>
						<a class="btn btn-info" href="../index.php">Kembali Ke Home</a>
					</th>
				</tr>
		</table>
	</div>
</body>
</html>