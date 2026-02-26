<?php 
include 'koneksi.php';
$daftar = $_POST['pilih'];
$jumlah_dipilih = count($daftar);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysql_query("DELETE FROM daftar WHERE id_daftar='$daftar[$x]'");
}
 
header("location:daftar_pendaftar.php");
?>