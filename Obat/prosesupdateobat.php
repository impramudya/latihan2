<?php
include '../koneksi.php';

$kd_obatlama=$_GET['kd_obat'];
$kd_obat=$_POST['kd_obat'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$stok=$_POST['stok'];
$tgl_expired=$_POST['tgl_expired'];
$harga=$_POST['harga'];

$query=mysqli_query($koneksi,"UPDATE `obat` SET kd_obat='$kd_obat',nama='$nama',jenis='$jenis',stok='$stok',tgl_expired='$tgl_expired',harga='$harga' WHERE kd_obat='$kd_obatlama'") or die(mysqli_error($koneksi));

if($query){
	header("Location: dataobat.php");
}else{
	echo "Gagal";
}
?>