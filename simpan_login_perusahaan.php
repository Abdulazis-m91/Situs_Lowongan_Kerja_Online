<?php

include_once 'koneksi.php';
$email   =$_POST['email'];
$password   =$_POST['password'];
$akses=$_POST['akses'];
$nama_lengkap=$_POST['nama_lengkap'];
$nama_pang=$_POST['nama_pang'];
$akun=$_POST['akun'];

$ada=mysql_num_rows(mysql_query("SELECT * FROM login where email='$email'"));
$temu=$ada;
if ($temu>0) {
	echo"<script>alert('Email Sudah Terdaftar');window.location = 'form_daftar.php';</script>";
}
else{

$q = mysql_query("INSERT INTO login VALUES('','$email','$password','$akses','$nama_lengkap','$nama_pang','$akun')");
if($q){
   
$share = mysql_query("SELECT * from login where email='$email' and password='$password'");
$ada = mysql_num_rows($share);


if($ada>0)
{  
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:form_tambah_prus.php');

} else {
	session_start();
   $_SESSION['email']=$email;
   $_SESSION['password']=$password;
   echo"<script>alert('');window.location = 'form_login.php';</script>";
}
}
 else {
    echo"<script>alert('Gagal Mendaftar !'); window.location = 'form_daftar_perusahaan.php';</script>";
}
}

?>










