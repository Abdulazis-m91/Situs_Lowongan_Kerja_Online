<?php
include 'koneksi.php';

$id_lowongan = $_POST['id_lowongan'];
$idp = $_POST['idprusahaan'];
$judul_lowongan=$_POST['judul_lowongan'];
$posisi=$_POST['posisi'];
$keahlian=$_POST['keahlian'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$membutuhkan=$_POST['membutuhkan'];

$batas_waktu=$_POST['batas_waktu'];
$isi=$_POST['isi'];
$gaji=$_POST['gaji'];
$syarat_pendidikan=$_POST['syarat_pendidikan'];
$awal_waktu=$_POST['awal_waktu'];
$aktif=$_POST['aktif'];
$wilayah=$_POST['wilayah'];
$pengalaman_kerja=$_POST['pengalaman_kerja'];
$syarat=$_POST['syarat'];



$sql = mysql_query("UPDATE lowongan SET judul_lowongan='$judul_lowongan', posisi='$posisi', keahlian='$keahlian', jenis_kelamin='$jenis_kelamin' , membutuhkan='$membutuhkan', batas_waktu='$batas_waktu', isi='$isi', gaji='$gaji', syarat_pendidikan='$syarat_pendidikan', awal_waktu='$awal_waktu', aktif='$aktif',wilayah='$wilayah',pengalaman_kerja='$pengalaman_kerja', syarat='$syarat' WHERE id_lowongan='$id_lowongan'");

if ($sql){
echo "<script>alert('Berhasil Mengubah Lowongan'); window.location = 'daftar_lowongan2.php'</script>";

} else {
echo "<script>alert('Gagal Mengubah lowongan'); window.location = 'daftar_lowongan2.php'</script>";

}
?>


<!-- $id_lowongan = $_POST['id_lowongan'];
$idp = $_POST['idprusahaan'];
$judul_lowongan=$_POST['judul_lowongan'];
$posisi=$_POST['posisi'];
$bidang_keahlian=$_POST['bidang_keahlian'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$membutuhkan=$_POST['membutuhkan'];

$batas_waktu=$_POST['batas_waktu'];
$isi=$_POST['isi'];
$gaji=$_POST['gaji'];
$syarat_pendidikan=$_POST['syarat_pendidikan'];
$awal_waktu=$_POST['awal_waktu'];
$aktif=$_POST['aktif'];
$wilayah=$_POST['wilayah'];
$pengalaman_kerja=$_POST['pengalaman_kerja']; -->