<?php
include_once 'koneksi.php';
$id_login = $_POST['id_login'];
$id_pencari_kerja = $_POST['id_pencari_kerja'];
$nama=$_POST['nama'];
$nama_pangilan=$_POST['nama_pangilan'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$usia=$_POST['usia'];

$email=$_POST['email'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];
$pendidikan=$_POST['pendidikan'];
$agama=$_POST['agama'];

$status=$_POST['status'];
$pengalaman_kerja=$_POST['pengalaman_kerja'];
$riwayat_penyakit=$_POST['riwayat_penyakit'];


$naruto = mysql_query("UPDATE pencari_kerja SET id_login='$id_login', id_pencari_kerja='$id_pencari_kerja', nama='$nama', nama_pangilan='$nama_pangilan', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', usia='$usia', email='$email', hp='$hp', alamat='$alamat', pendidikan='$pendidikan', agama='$agama', status='$status', pengalaman_kerja='$pengalaman_kerja', riwayat_penyakit='$riwayat_penyakit' WHERE id_pencari_kerja='$id_pencari_kerja'");

if ($naruto){
echo "<script>alert('Berhasil Memperbarui Profil'); window.location = 'user-profile.php'</script>";

} else {
echo "<script>alert('Gagal Memperbarui'); window.location = 'home.php'</script>";

}
?>

