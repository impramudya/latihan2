<?php
include '../koneksi.php';

$kd_dokter=$_POST['kd_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];

$query=mysqli_query($koneksi,"INSERT INTO `dokter`(`kd_dokter`,`nama_dokter`,`spesialis`,`jenis_kelamin`,`alamat`,`email`,`no_telp`) VALUES ('$kd_dokter','$nama_dokter','$spesialis','$jenis_kelamin','$alamat','$email','$no_telp')") or die(mysqli_error($koneksi));

if($query){
	header("Location: datadokter.php");
}else{
	echo "Gagal";
}
?>