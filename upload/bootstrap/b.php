<?php
include 'koneksi1.php';


if (isset($_POST['simpan'])){
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


