<?php
include '../koneksi.php';

$kd_pasien=$_GET['kd_pasien'];

$query=mysqli_query($koneksi,"DELETE FROM pasien WHERE kd_pasien='$kd_pasien' ") or die(mysqli_error($koneksi));

if($query){
	header("Location: datapasien.php");
}else{
	echo "Gagal";
}
?>