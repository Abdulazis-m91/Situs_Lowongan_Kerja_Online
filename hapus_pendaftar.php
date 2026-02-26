<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$cari=  mysql_query("SELECT * from lowongan where id_lowongan='$id'");
$tampil =mysql_fetch_array($cari);

$hapus=  mysql_query("DELETE from daftar where id_daftar='$id' ");

if ($hapus){
echo "<script>alert('Berhasil membatalkan Lamaran kerja'); window.location = 'daftar_pendaftar.php'</script>";

} else {
echo "<script>alert('Tidak dapat membatalkan lamaran'); window.location = 'daftar_pendaftar.php'</script>";

}
?>