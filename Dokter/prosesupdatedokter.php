<?php
include '../koneksi.php';

$kd_dokterlama=$_GET['kd_dokter'];
$kd_dokter=$_POST['kd_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];

$query=mysqli_query($koneksi,"UPDATE `dokter` SET kd_dokter='$kd_dokter',nama_dokter='$nama_dokter',spesialis='$spesialis',jenis_kelamin='$jenis_kelamin',alamat='$alamat',email='$email',no_telp='$no_telp' WHERE kd_dokter='$kd_dokterlama'") or die(mysqli_error($koneksi));

if($query){
	header("Location: datadokter.php");
}else{
	echo "Gagal";
}
?>