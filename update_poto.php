<?php
include "koneksi.php";

$id=$_POST['id_pencari_kerja'];
$nama=$_POST['nama'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$sumber = $_FILES['image']['name'];
	$nama_gambar = $_FILES['image']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$sumber;
	
	// Set path folder tempat menyimpan fotonya
	$path = "profil/".$fotobaru;

	if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data user berdasarkan id_user yang dikirim
		$query = "SELECT * FROM pencari_kerja WHERE id_pencari_kerja='".$id."'";
		$sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysql_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file gambar sebelumnya ada di folder foto
		if(is_file("profil/".$data['gambar'])) // Jika gambar ada
			unlink("profil/".$data['gambar']); // Hapus file gambar sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$sql = mysql_query("UPDATE pencari_kerja set nama='$nama', gambar='$fotobaru' where id_pencari_kerja='$id'");


		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='index.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 
				location = 'index.php'; 
				</script>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "update user set nama='$nama' where id_pencari_kerja='$id' ";
	$sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='index.php'>Kembali Ke Form</a>";
	}
}

?>