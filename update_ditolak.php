<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$posisi_status="Ditolak";


$naruto = mysql_query("UPDATE daftar SET  posisi_status='$posisi_status'
										 Where id_daftar='$id'");

if($naruto){
     echo "<script>alert('Ditolak'); window.location = 'daftar_pendaftar.php'</script>";
}
 else{
    echo"<script>alert('Gagal diterima !'); window.location = 'daftar_pendaftar.php';</script>";
}
?>

<!-- for($x=0;$x<$jumlah_dipilih;$x++){
	mysql_query("DELETE FROM makanan WHERE id='$makanan[$x]'");
} -->