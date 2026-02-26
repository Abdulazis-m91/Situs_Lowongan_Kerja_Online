<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$akun="Tolak";


$naruto = mysql_query("UPDATE login SET  akun='$akun'
										 Where id_login='$id'");

if($naruto){
     echo "<script>alert('Ditolak'); window.location = 'admin_prus.php'</script>";
}
 else{
    echo"<script>alert('Ditolak !'); window.location = 'admin_prus.php';</script>";
}
?>