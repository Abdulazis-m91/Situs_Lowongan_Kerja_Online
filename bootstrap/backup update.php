<?php
include 'koneksi1.php';

$id_lowongan = $_POST['id_lowongan'];
$idp = $_POST['idprusahaan'];
$judul_lowongan=$_POST['judul_lowongan'];
$jenis_pekerjaan=$_POST['jenis_pekerjaan'];
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
$image=$_FILES['image'];



$sql = mysql_query("UPDATE lowongan SET judul_lowongan='$judul_lowongan', jenis_pekerjaan='$jenis_pekerjaan', bidang_keahlian='$bidang_keahlian', jenis_kelamin='$jenis_kelamin' , membutuhkan='$membutuhkan', batas_waktu='$batas_waktu', isi='$isi', gaji='$gaji', syarat_pendidikan='$syarat_pendidikan', awal_waktu='$awal_waktu', aktif='$aktif',wilayah='$wilayah', foto='$image' WHERE id_lowongan='$id_lowongan'");
if ($sql) {

	// Simpan di Folder Gambar
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
	echo"<script>alert('Gambar Berhasil diupdate !');history.go(-1);</script>";
}
else{
	echo "<script>alert('Gambar Tidak diupdate'); window.location = 'lowongan.php'</script>";
}
?>


