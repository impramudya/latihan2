<?php
include '../koneksi.php';

$kd_periksa=$_POST['kd_periksa'];
$kd_dokter=$_POST['kd_dokter'];
$kd_pasien=$_POST['kd_pasien'];
$diagnosa=$_POST['diagnosa'];
$tindakan=$_POST['tindakan'];
$biaya=$_POST['biaya'];

$query=mysqli_query($koneksi,"INSERT INTO `periksa_pasien`(`kd_periksa`,`kd_dokter`,`kd_pasien`,`diagnosa`,`tindakan`,`biaya`) VALUES ('$kd_periksa','$kd_dokter','$kd_pasien','$diagnosa','$tindakan','$biaya')") or die(mysqli_error($koneksi));

if($query){
	header("Location: dataperiksa.php");
}else{
	echo "Gagal";
}
?>