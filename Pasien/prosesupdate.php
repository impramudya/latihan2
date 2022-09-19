<?php
include '../koneksi.php';

$kd_pasienlama=$_GET['kd_pasien'];
$kd_pasien=$_POST['kd_pasien'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];

$query=mysqli_query($koneksi,"UPDATE `pasien` SET kd_pasien='$kd_pasien',nama='$nama',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',usia='$usia' WHERE kd_pasien='$kd_pasienlama'") or die(mysqli_error($koneksi));

if($query){
	header("Location: datapasien.php");
}else{
	echo "Gagal";
}
?>