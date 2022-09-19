<?php
include '../koneksi.php';

$kd_dokter=$_GET['kd_dokter'];

$query=mysqli_query($koneksi,"DELETE FROM dokter WHERE kd_dokter='$kd_dokter' ") or die(mysqli_error($koneksi));

if($query){
	header("Location: datadokter.php");
}else{
	echo "Gagal";
}
?>