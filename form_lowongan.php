<!DOCTYPE html>
<html>
<?php
Include 'koneksi.php';
session_start();
error_reporting(0);
if (empty($_SESSION['email']) and empty($_SESSION['password'])){
  Include "index.php";
}
else{

session_start();
$share = mysql_query("SELECT * from login where email='$_SESSION[email]' and password='$_SESSION[password]'");
$ada = mysql_fetch_array($share);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);

$t = mysql_query("SELECT * from lowongan ");
$d = mysql_fetch_array($t);

$tanggal = date('yy-mm-dd');
$aktif='tidak';
mysql_query("UPDATE lowongan set aktif='$aktif' where batas_waktu='$tanggal'");

?>
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buker_Sembada | Cari Lowongan Kerja</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="img/Untitled-5.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <ul class="navbar-nav ml-auto mt-10">
                
             <li class="nav-item">
                <a class="nav-link" href="home_perusahaan.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_lowongan2.php">Lowongan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_pendaftar.php">Pendaftar</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="form_lowongan.php">Buat Lowongan</a>
            </li>

                             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <a class="nav-link" href="uprus-profile.php">Hi!&nbsp;<? echo "$ada1[nama_prusahaan]";?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keluar.php"onclick="return confirm('Apakah anda yakin ingin keluar?')">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
			</div>
		</div>
	</div>
</section>
<br><br><br>
<section class="ad-post bg-gray py-5">
    <div class="container">

         <form class="form-horizontal" method="POST" action="simpan_lowongan.php"  enctype="multipart/form-data">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Buat Lowongan Pekerjaan</h3>
                        </div>
                        <div class="col-lg-6">

                           
                              <input type="hidden" name="idprusahaan" value="<? echo "$ada1[idprusahaan]";?>">

                            <h6 class="font-weight-bold pt-4 pb-1">Judul Lowongan</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="judul_lowongan" placeholder="Judul Lowongan Kerja" autocomplete="off" required>

                         
                           <h6 class="font-weight-bold pt-4 pb-1">Membutuhkan/Jumlah pekerja</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="membutuhkan" placeholder="membutuhkan Jumlah Pekerja" autocomplete="off" required>

                            <!-- <h6 class="font-weight-bold pt-4 pb-1">Judul Lowongan</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                    <input type="radio" name="itemName" value="personal" id="personal">
                                    <label for="personal" class="py-2">Personal</label>
                                </div>

                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                    <input type="radio" name="itemName" value="business" id="business">
                                    <label for="business" class="py-2">Business</label>
                                </div>
                            </div> -->

                            <h6 class="font-weight-bold pt-4 pb-1">Gambaran Pekerjaan</h6>
                            <textarea name="isi" placeholder="Gambaran pekerjaan"class="border p-3 w-100" rows="7" ></textarea>

                        </div>

                        <div class="col-lg-6">
                           

                         <!--    <div class="price">
                                <h6 class="font-weight-bold pt-3 pb-1">Pendaftaran Dimulai-Sampai</h6>
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <input type="date"  name="awal_waktu" class="border-0 py-2 w-100 price">
                                    </div>
                                    <div class="col-lg-4 mrx-4 rounded bg-white my-2 ">
                                       <input type="date" value="Negotiable" name="batas_waktu" class="border-0 py-2 w-100 price">
                                    </div>
                                </div>
                            </div> -->
                            <h6 class="font-weight-bold pt-3 pb-1">Mulai Pendaftaran</h6>
                            <input type="date" class="border w-100 p-2 bg-white text-capitalize"name="awal_waktu" autocomplete="off" required>

                            <h6 class="font-weight-bold pt-3 pb-1">Sampai</h6>
                            <input type="date" class="border w-100 p-2 bg-white text-capitalize"name="batas_waktu" autocomplete="off" required>


                            <h6 class="font-weight-bold pt-3 pb-1">Iklan Lowongan</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="aktif" readonly="" placeholder="aktif" value="aktif" autocomplete="off" required>

                            <!-- <div class="choose-file text-center my-4 py-4 rounded">
                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                    <span class="d-block">or</span>
                                    <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                                    <span class="d-block">Maximum upload file size: 500 KB</span>
                                    <input type="file" class="form-control-file d-none" id="file-upload" name="file">
                                </label>
                            </div> -->
                            <h6 class="font-weight-bold pt-3 pb-1">Ditempatkan Diposisi</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="posisi" placeholder="Posisi Sebagai" autocomplete="off" required>


                            <h6 class="font-weight-bold pt-3 pb-1">Gaji Yang Ditawarkan</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="gaji" placeholder="Gaji" onkeyup="convertToRupiah(this);" autocomplete="off" required>


                        </div>
                    </div>
            </fieldset>
            <!-- Post Your ad end -->

            <!-- seller-information start -->
            <fieldset class="border p-4 my-3 seller-information bg-gray">
                <div class="row">
                    <div class="col-lg-12">
                        <h3></h3>
                    </div>
                    <div class="col-lg-6">
                       <!--  <h6 class="font-weight-bold pt-4 pb-1">Jenis Kelamin</h6>
                        <input type="text" placeholder="Jenis kelamin" class="border w-100 p-2"> -->
                        <h6 class="font-weight-bold pt-4 pb-1">Menerima Pekerja</h6>
                            <select name="jenis_kelamin" id="inputGroupSelect" class="border w-100 p-2">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Pria & Wanita">Pria & Wanita</option>
                            </select>

                        <h6 class="font-weight-bold pt-4 pb-1">Syarat Pendidikan</h6>
                        <input type="text" name="syarat_pendidikan" placeholder="Syarat Pendidikan" class="border w-100 p-2" autocomplete="off" required>
                        
                        <h6 class="font-weight-bold pt-4 pb-1">Domisili Wilayah</h6>
                            <select name="wilayah" id="inputGroupSelect" class="border w-100 p-2">
                                      <option value="Yogyakarta">Yogyakarta</option>
                                      <option value="Sleman">Sleman</option>
                                      <option value="Bantul">Bantul</option>
                                      <option value="Kaliurang">Kaliurang</option>
                                      <option value="Gunung_kidul">Gunung_Kidul</option>
                                      <option value="Prambanan">Prambanan</option>
                            </select>

                        
                  <h6 class="font-weight-bold pt-4 pb-1">Keahlian Bidang</h6>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Akutansi/Keuangan">Akutansi/Keuangan
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Arsitek/Desain Interior">Arsitek/Desain Interior
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Dokter/Diagnos">Dokter/Diagnos
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="E-Commerce">E-Commerce
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Farmasi">Farmasi
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="IT Perangkat Keras">IT Perangkat Keras
                      </label><br>
                      
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="IT Perangkat Lunak">IT Perangkat Lunak
                      </label><br>
                      
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="IT Programer">IT Programer
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="IT Jaringan/Sistem/Database">IT Jaringan/Sistem/Database
                      </label><br>
                      
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Pendidikan">Pendidikan
                      </label><br>
                      
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Penjualan">Penjualan 
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Pelayanan Pelangan">Pelayanan Pelangan
                      </label><br>
                      
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Pekerjaan Umum">Pekerjaan Umum
                      </label><br>
                      
                       <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Sekretaris">Sekretaris 
                      </label><br>

                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Seni/Desain Kreatif">Seni/Desain Kreatif
                      </label><br>
                      
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="keahlian" value="Teknik Elektro/Elektronik">Teknik Elektro/Elektronik
                      </label><br>
                      </div>
                    </div>

                    </div>

                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Pengalaman kerja</h6>
                        <!-- <input type="text" name="pengalaman_kerja" placeholder="Your address" class="border w-100 p-2"> -->
                        <textarea name="pengalaman_kerja" placeholder="Pengalaman Kerja" class="border p-3 w-100" rows="7" ></textarea>

                         <h6 class="font-weight-bold pt-4 pb-1">Syarat</h6>
                        <!-- <input type="text" name="pengalaman_kerja" placeholder="Your address" class="border w-100 p-2"> -->
                        <textarea name="syarat" placeholder="Dengan Persyaratan" class="border p-3 w-100" rows="7" ></textarea>
                        
                    </div>
                </div>
            </fieldset>

            <!--  <button type="submit" class="btn btn-primary d-block mt-2">Buat Lowongan kerja</button> -->
              <input type="submit" class="btn btn-primary" value="Perbarui Lowongan">
							<a onclick="history.back(-1)" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</section>
<!--============================
=            Footer            =
=============================-->
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Dinas Tenaga Kerja Sleman©<script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>
  <script type="text/javascript" src="style/jquery.js"></script>
  <script type="text/javascript"  src="style/rupiah.js"></script>
</body>

</html>
<?php
} ?>