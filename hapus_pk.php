<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$cari=  mysql_query("SELECT * from pencari_kerja where id_pencari_kerja='$id'");
$tampil =mysql_fetch_array($cari);


$hapus=  mysql_query("DELETE from pencari_kerja where id_pencari_kerja='$id' ");

if ($hapus){
echo "<script>alert('berhasil dihapus'); window.location = 'admin_pk.php'</script>";

} else {
echo "<script>alert('gagal dihapus'); window.location = 'admin_pk.php'</script>";

}
?>