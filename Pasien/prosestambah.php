<?php
include '../koneksi.php';

$kd_pasien=$_POST['kd_pasien'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];

$query=mysqli_query($koneksi,"INSERT INTO `pasien`(`kd_pasien`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tgl_lahir`,`alamat`,`usia`) VALUES ('$kd_pasien','$nama','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$alamat','$usia')") or die(mysqli_error($koneksi));

if($query){
	header("Location: datapasien.php");
}else{
	echo "Gagal";
}
?>