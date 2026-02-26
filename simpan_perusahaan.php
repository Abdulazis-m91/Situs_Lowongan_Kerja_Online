<?php
include 'koneksi.php';

$nama_prusahaan=$_POST['nama_prusahaan'];
$alamat_prusahaan=$_POST['alamat_prusahaan'];
$siup=$_POST['siup'];

$no_telphon=$_POST['no_telphon'];
$email_prusahaan=$_POST['email_prusahaan'];
$bidang_usaha=$_POST['bidang_usaha'];
$gaya_pakaian=$_POST['gaya_pakaian'];
$id = $_POST['id_login'];
$gambaran=$_POST['gambaran'];

$jam_kerja=$_POST['jam_kerja'];
$bahasa=$_POST['bahasa'];
$website=$_POST['website'];
$hari_kerja=$_POST['hari_kerja'];
$ukuran_prusahaan=$_POST['ukuran_prusahaan'];

if (isset($_POST['simpan'])){
	$fileName = $_FILES['image']['name'];

    // Simpan ke Database
	$sql = "INSERT INTO perusahaan VALUES('','$nama_prusahaan','$alamat_prusahaan','$siup','$no_telphon','$email_prusahaan','$bidang_usaha','$gaya_pakaian','$id','$gambaran', '$jam_kerja','$bahasa','$website','$hari_kerja','$ukuran_prusahaan' ,'$fileName')";
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['image']['tmp_name'], "logo/".$_FILES['image']['name']);
	echo"<script>alert('Berhasil Mempebarui Profil! Akun anda akan diverifikasi terlebih dulu sebelum diaktifkan.'); window.location = 'index.php'</script>";
}else {
echo "<script>alert('Gagal Membuat profil'); window.location = 'index.php'</script>";
}

?>


<!-- if (isset($_POST['simpan'])){
	$fileName = $_FILES['image']['name'];

    // Simpan ke Database
	$sql = "INSERT into uplod1 Values ('', '$fileName')";
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['image']['tmp_name'], "profil/".$_FILES['image']['name']);
	echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
}else {
echo "<script>alert('gagal disimpan'); window.location = 'form_lowongan.php'</script>";
}

?>
 -->