
<?php
include 'koneksi1.php';

$nama=$_POST['nama'];
$nama_pangilan=$_POST['nama_panggilan'];
$tanggal_lahir= date("d-m-y");
$kelamin=$_POST['kelamin'];
$usia=$_POST['usia'];

$email=$_POST['email'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];
$pendidikan=$_POST['pendidikan'];
$agama=$_POST['agama'];

$status=$_POST['status'];
$hunian=$_POST['hunian'];
$ktp=$_POST['ktp'];
$riwayat_penyakit=$_POST['riwayat_penyakit'];
$id = $_POST['id_login'];

if (isset($_POST['simpan'])){
$fileName = $_FILES['image']['name'];

    // Simpan ke Database
	$sql = mysql_query ("INSERT INTO latihan1 VALUES('','$nama','$nama_pangilan','$tanggal_lahir','$kelamin','$usia','$email','$hp','$alamat','$pendidikan','$agama','$status','$hunian','$ktp','$riwayat_penyakit','$id','$fileName')");
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
	echo"<script>alert('Berhasil Membuat Lowongan !'); window.location = 'profil_warga2.php'</script>";
	
	}else {
	echo "<script>alert('Gagal Membuat Lowongan'); window.location = 'form_warga.php'</script>";
}

?>

