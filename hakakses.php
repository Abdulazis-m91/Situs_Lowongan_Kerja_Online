
<?php
include_once 'koneksi.php';
session_start();

if(empty($_SESSION['email']))
{
    header('location:login.php');
}
if(empty($_SESSION['password']))
{
    header('location:login.php');
}
$share = mysql_query("SELECT * from login where email='$_SESSION[email]' and password='$_SESSION[password]'");
$ada = mysql_fetch_array($share);
$akses =$ada['akses'];
$akun=$ada['akun'];
// $dd = mysql_query("SELECT * from login where akun='$ada['Aktif']'");
// $a = mysql_fetch_array($dd);

if($akses=='pencari kerja'){
    echo"<script>alert('Selamat Datang');window.location = 'home.php';</script>";
}
elseif ($akses=='admin') {
	echo"<script>alert('Selamat Datang');window.location = 'admin_home.php';</script>"; 
}
elseif ($akses=='prusahaan') {
	if($akun=='Aktif'){
	echo"<script>alert('Selamat Datang');window.location = 'home_perusahaan.php';</script>";
		}
	elseif($akun=='Menunggu'){
	echo"<script>alert('Akun anda Masih diverifikasi Admin ');window.location = 'index.php';</script>";
	}
	else{
	echo"<script>alert('Akun anda ditolak ');window.location = 'index.php';</script>";
	}
}
?>





