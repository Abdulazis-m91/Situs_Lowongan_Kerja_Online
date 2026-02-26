<?php
include_once 'koneksi.php';
$id_login = $_POST['id_login'];
$password=$_POST['password'];


$naruto = mysql_query("UPDATE login SET  password='$password'
										 Where id_login='$id_login'");

if ($naruto){
echo "<script>alert('Berhasil Memperbarui Password - Silahkan Coba Login'); window.location = 'index.php'</script>";

} else {
echo "<script>alert('Gagal Memperbarui Password'); window.location = 'home.php'</script>";

}
?>