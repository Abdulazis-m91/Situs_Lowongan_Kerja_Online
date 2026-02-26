<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$posisi_status="Diterima";


$naruto = mysql_query("UPDATE daftar SET  posisi_status='$posisi_status'
										 Where id_daftar='$id'");

if($naruto){
     echo "<script>alert('Diterima'); window.location = 'daftar_pendaftar.php'</script>";
}
 else{
    echo"<script>alert('Gagal diterima !'); window.location = 'daftar_pendaftar.php';</script>";
}
?>