<?php
include '../koneksi.php';

$kd_obat=$_GET['kd_obat'];

$query=mysqli_query($koneksi,"DELETE FROM obat WHERE kd_obat='$kd_obat' ") or die(mysqli_error($koneksi));

if($query){
	header("Location: dataobat.php");
}else{
	echo "Gagal";
}
?>