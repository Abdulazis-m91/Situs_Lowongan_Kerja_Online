<?php

include_once 'koneksi.php';
$email   =$_POST['email'];
$password   =$_POST['password'];

$share = mysql_query("SELECT * from login where email='$email' and password='$password'");
$ada = mysql_num_rows($share);

// perlu dibuat sebarang pengacak
$pengacak  = "NDJS3289JSKS190JISJI";

// mengenkripsi password dengan md5() dan pengacak
$password1 = md5($pengacak . md5($password1) . $pengacak);

if($ada>0)
{  
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:hakakses.php');

} else {
	session_start();
   $_SESSION['email']=$email;
   $_SESSION['password']=$password;
   echo"<script>alert('Username atau Password Salah');window.location = 'form_login.php';</script>";
}









