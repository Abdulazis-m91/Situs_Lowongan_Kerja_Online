<?php
include 'koneksi.php';

$idp = $_POST['idprusahaan'];
$judul_lowongan=$_POST['judul_lowongan'];
$posisi=$_POST['posisi'];
$keahlian=$_POST['keahlian'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$membutuhkan=$_POST['membutuhkan'];

$batas_waktu= $_POST['batas_waktu'];
$isi=$_POST['isi'];
$gaji=$_POST['gaji'];
$syarat_pendidikan=$_POST['syarat_pendidikan'];
$awal_waktu= $_POST['awal_waktu'];
$aktif=$_POST['aktif'];
$wilayah=$_POST['wilayah'];
$pengalaman_kerja=$_POST['pengalaman_kerja'];
$syarat=$_POST['syarat'];



	$sql = mysql_query ("INSERT into lowongan Values ('','$idp','$judul_lowongan','$posisi','$keahlian','$jenis_kelamin','$membutuhkan','$batas_waktu','$isi','$gaji','$syarat_pendidikan','$awal_waktu','$aktif','$wilayah','$pengalaman_kerja','$syarat')");
	if($sql){
	echo"<script>alert('Berhasil Membuat Lowongan !'); window.location = 'home_perusahaan.php'</script>";
	
	}else {
	echo "<script>alert('Gagal Membuat Lowongan'); window.location = 'form_lowongan.php'</script>";
}

?>

