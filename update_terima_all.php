<?php
include_once 'koneksi.php';
$posisi_status="Diterima";

$daftar = $_POST['pilih'];
$jumlah_dipilih = count($daftar);

for($x=0;$x<$jumlah_dipilih;$x++){
	mysql_query("UPDATE daftar SET  posisi_status='$posisi_status'
										 Where id_daftar='$daftar[$x]'");
}
 
header("location:daftar_pendaftar.php");
?>