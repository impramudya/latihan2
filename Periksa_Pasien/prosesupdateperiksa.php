<?php
include '../koneksi.php';

$kd_periksalama=$_GET['kd_periksa'];
$kd_periksa=$_POST['kd_periksa'];
$kd_dokter=$_POST['kd_dokter'];
$kd_pasien=$_POST['kd_pasien'];
$diagnosa=$_POST['diagnosa'];
$tindakan=$_POST['tindakan'];
$biaya=$_POST['biaya'];

$query=mysqli_query($koneksi,"UPDATE `periksa_pasien` SET kd_periksa='$kd_periksa',kd_dokter='$kd_dokter',kd_pasien='$kd_pasien',diagnosa='$diagnosa',tindakan='$tindakan',biaya='$biaya' WHERE kd_periksa='$kd_periksalama'") or die(mysqli_error($koneksi));

if($query){
	header("Location: dataperiksa.php");
}else{
	echo "Gagal";
}
?>