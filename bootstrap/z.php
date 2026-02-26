	<?php
include_once 'koneksi1.php';
{
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
$wilayah=$_POST['wilayah']
$nama_file	= $_FILES['nama_file'];



	//Cek File
		if (strlen($nama_file)>0) {
			//upload Photo
			if (is_uploaded_file($_FILES['nama_file']['tmp_name'])) {
				move_uploaded_file ($_FILES['nama_file']['tmp_name'], "file/".$nama_file);
			}
		}
		
	$q = mysql_query("INSERT INTO lowongan VALUES('','$idp','$judul_lowongan','$jenis_pekerjaan','$bidang_keahlian','$jenis_kelamin' ,'$membutuhkan','$batas_waktu','$isi','$gaji','$syarat_pendidikan','$awal_waktu','$aktif','$wilayah','$nama_file')");
	$query_input =mysql_query($input);
	if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Upload File Gambar Berhasil!');
				document.location='form-upload-file.php';
				</script>
		<?php
	}
	else {
	//Jika Gagal
	echo "Upload File Gambar Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
}
?>
