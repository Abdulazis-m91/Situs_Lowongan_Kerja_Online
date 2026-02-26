<?php
include_once 'koneksi.php';
$id=$_POST['id'];
$id_login=$_POST['id_login'];
$id_lowongan = $_POST['id_lowongan'];
$id_pencari_kerja = $_POST['id_pencari_kerja'];
$idprusahaan = $_POST['idprusahaan'];
$posisi_status=$_POST['posisi_status'];


$ada=mysql_fetch_array(mysql_query("SELECT * FROM daftar where id_lowongan,id_pencari_kerja='$id_pencari_kerja'"));
$temu=$ada;
if ($temu>0) {
	echo"<script>alert('Kamu Sudah Mendaftar Lowongan Ini');window.location = 'home.php';</script>";
}
else{


$q = mysql_query("INSERT INTO daftar VALUES('','$id_lowongan','$id_pencari_kerja','$idprusahaan','$id_login','$posisi_status')");
if($q){
     echo "<script>alert('Berhasil Mendaftar'); window.location = 'home.php'</script>";
}
 else{
    echo"<script>alert('Gagal Mendaftar !'); window.location = 'form_daftar.php';</script>";
}
}
?>