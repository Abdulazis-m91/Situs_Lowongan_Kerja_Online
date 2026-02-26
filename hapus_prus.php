<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$cari=  mysql_query("SELECT * from perusahaan where idprusahaan='$id'");
$tampil =mysql_fetch_array($cari);


$hapus=  mysql_query("DELETE from perusahaan where idprusahaan='$id' ");

if ($hapus){
echo "<script>alert('berhasil dihapus'); window.location = 'admin_prus.php'</script>";

} else {
echo "<script>alert('gagal dihapus'); window.location = 'admin_prus.php'</script>";

}
?>