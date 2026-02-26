<?php
include "koneksi.php";

$id=$_POST['id_pencari_kerja'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$sumber = $_FILES['file']['name'];
	$nama_gambar = $_FILES['file']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$sumber;
	
	// Set path folder tempat menyimpan fotonya
	$path = "files/".$fotobaru;

	if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data user berdasarkan id_user yang dikirim
		$query = "SELECT * FROM pencari_kerja WHERE id_pencari_kerja='".$id."'";
		$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysql_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file gambar sebelumnya ada di folder foto
		if(is_file("files/".$data['file'])) // Jika gambar ada
			unlink("files/".$data['file']); // Hapus file gambar sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$sql = mysql_query("UPDATE pencari_kerja set file='$fotobaru' where id_pencari_kerja='$id'");


		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: user-profile.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='home.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 
				location = 'home.php'; 
				</script>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "update user set where id_pencari_kerja='$id' ";
	$sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: home.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='home.php'>Kembali Ke Form</a>";
	}
}

?>