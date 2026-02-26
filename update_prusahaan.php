<?php
include_once 'koneksi.php';

$id_login=$_POST['id_login'];
$idprusahaan=$_POST['idprusahaan'];
$nama_prusahaan=$_POST['nama_prusahaan'];
$alamat_prusahaan=$_POST['alamat_prusahaan'];
$siup=$_POST['siup'];

$No_telpon=$_POST['No_telpon'];
$email_prusahaan=$_POST['email_prusahaan'];
$Bidang_usaha=$_POST['Bidang_usaha'];
$gaya_pakaian=$_POST['gaya_pakaian'];
$gambaran=$_POST['gambaran'];

$jam_kerja=$_POST['jam_kerja'];
$bahasa=$_POST['bahasa'];
$website=$_POST['website'];
$hari_kerja=$_POST['hari_kerja'];
$ukuran_prusahaan=$_POST['ukuran_prusahaan'];

$naruto=mysql_query("UPDATE perusahaan SET id_login='$id_login',
										   idprusahaan='$idprusahaan',
										   nama_prusahaan='$nama_prusahaan', 
										   alamat_prusahaan='$alamat_prusahaan',
										   siup='$siup', 
										   No_telpon='$No_telpon', 
										   email_prusahaan='$email_prusahaan', 
										   Bidang_usaha='$Bidang_usaha', 
										   gaya_pakaian='$gaya_pakaian', 
										   gambaran='$gambaran',
										   jam_kerja='$jam_kerja',
										   bahasa='$bahasa',
										   website='$website',
										   hari_kerja='$hari_kerja',
										   ukuran_prusahaan='$ukuran_prusahaan' 
										   WHERE idprusahaan='$idprusahaan'");

if ($naruto){
echo "<script>alert('Berhasil Mengubah Data'); window.location = 'uprus-profile.php'</script>";

} else {
echo "<script>alert('Gagal Mengubah Data'); window.location = 'uprus-profile.php'</script>";

}
?>