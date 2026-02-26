
<?php
include 'koneksi.php';
$file = $_FILES['upload'];
$nama=$_POST['nama'];
$nama_pangilan=$_POST['nama_pangilan'];
// $tanggal_lahir=  date('yy-mm-dd');
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
$id = $_POST['id_login'];

if (isset($_POST['simpan'])){
$fileName = $_FILES['image']['name'];
$file = $_FILES ['file']['name'];


    // Simpan ke Database
	$sql = mysql_query ("INSERT INTO pencari_kerja VALUES('','$nama','$nama_pangilan','$tanggal_lahir','$jenis_kelamin','$usia','$email','$hp','$alamat','$pendidikan','$agama','$status','$pengalaman_kerja','$riwayat_penyakit','$id','$fileName','$file')");
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['image']['tmp_name'], "profil/".$_FILES['image']['name']);
	move_uploaded_file($_FILES ['file']['tmp_name'], "files/".$_FILES ['file']['name']);

	echo"<script>alert('Berhasil Membuat Profil'); window.location = 'user-profile.php'</script>";
	
	}else {
	echo "<script>alert('Gagal Membuat Profil'); window.location = 'home.php'</script>";
}

?>

