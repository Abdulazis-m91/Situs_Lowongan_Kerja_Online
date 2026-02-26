<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$cari=  mysql_query("SELECT * from lowongan where id_lowongan='$id'");
$tampil =mysql_fetch_array($cari);


$hapus=  mysql_query("DELETE from lowongan where id_lowongan='$id' ");

if ($hapus){
echo "<script>alert('berhasil dihapus'); window.location = 'daftar_lowongan2.php'</script>";

} else {
echo "<script>alert('gagal dihapus'); window.location = 'daftar_lowongan2.php'</script>";

}
?>