<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Periksa</title>
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
		<center><h1><p>Data Periksa</p></h1></center>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Periksa</th>
					<th>Kode Dokter</th>
					<th>Kode Pasien</th>
					<th>Diagnosa</th>
					<th>Tindakan</th>
					<th>Biaya</th>
					<th>
						<a class="btn btn-success" href="tambahperiksa.php">Tambah</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include '../koneksi.php';
					$data=mysqli_query($koneksi,"SELECT * FROM periksa_pasien") or die(mysqli_error($koneksi));
					foreach ($data as $baris) { ?>
					<tr>
						<td><?php echo $baris['kd_periksa'] ?></td>
						<td><?php echo $baris['kd_dokter'] ?></td>
						<td><?php echo $baris['kd_pasien'] ?></td>
						<td><?php echo $baris['diagnosa'] ?></td>
						<td><?php echo $baris['tindakan'] ?></td>
						<td><?php echo $baris['biaya'] ?></td>
						<td>
							<a class="btn btn-warning" href="updateperiksa.php?kd_periksa=<?php echo $baris['kd_periksa'] ?>">Update</a>
							<a class="btn btn-danger" href="hapusperiksa.php?kd_periksa=<?php echo $baris['kd_periksa'] ?>">Hapus</a>
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