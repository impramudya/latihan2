<?php
include '../koneksi.php';

$kd_periksa=$_GET['kd_periksa'];

$query=mysqli_query($koneksi,"DELETE FROM periksa_pasien WHERE kd_periksa='$kd_periksa' ") or die(mysqli_error($koneksi));

if($query){
	header("Location: dataperiksa.php");
}else{
	echo "Gagal";
}
?>