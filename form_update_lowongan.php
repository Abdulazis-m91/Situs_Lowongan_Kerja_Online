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

$id=$_GET['id'];
$cari=  mysql_query("SELECT * from lowongan where id_lowongan='$id' ");
$n =mysql_fetch_array($cari);

?>
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buker_Sembada | Cari Wolongan Kerja</title>
  
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
            <li class="nav-item active">
              <a class="nav-link" href="daftar_lowongan2.php">Lowongan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_pendaftar.php">Pendaftar</a>
            </li>
            <li class="nav-item ">
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

         <form class="form-horizontal" method="POST" action="update_lowongan.php"  enctype="multipart/form-data">
            <!-- Post Your ad start -->
            <div class="form-group">
          
           <div class="form-group">
            <div class="col-lg-8">
          
        </div></div>
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Perbarui Lowongan Pekerjaan</h3>
                        </div>
                        <div class="col-lg-6">

                             <input type="hidden" name="id_lowongan" value="<?php echo $n['id_lowongan'];?>">
                              <input type="hidden" name="idprusahaan" value="<? echo "$ada1[idprusahaan]";?>">

                            <h6 class="font-weight-bold pt-4 pb-1">Judul Lowongan</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="judul_lowongan" value="<? echo "$n[judul_lowongan]";?>">

                         
                           <h6 class="font-weight-bold pt-4 pb-1">Membutuhkan/Jumlah pekerja</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="membutuhkan" value="<? echo "$n[membutuhkan]";?>">

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
                            <textarea name="isi" placeholder="Gambaran pekerjaan"class="border p-3 w-100" rows="7" ><? echo "$n[isi]";?>"</textarea>

                        </div>

                        <!--  -->
                        <div class="col-lg-6">
                        <!--  -->
                            <!-- <div class="price">
                                <h6 class="font-weight-bold pt-3 pb-1">Pendaftaran Dimulai-Sampai</h6>
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <input value="<? echo "$n[awal_waktu]";?>" type="date" name="awal_waktu" class="border-0 py-2 w-100 price">
                                    </div>
                                    <div class="col-lg-4 mrx-4 rounded bg-white my-2 ">
                                       <input type="date" value="Negotiable" name="batas_waktu" class="border-0 py-2 w-100 price">
                                    </div>
                                </div>
                            </div> -->

                            <h6 class="font-weight-bold pt-3 pb-1">Mulai Pendaftaran</h6>
                            <input type="date" class="border w-100 p-2 bg-white text-capitalize"  name="awal_waktu" value="<? echo "$n[awal_waktu]";?>">

                            <h6 class="font-weight-bold pt-3 pb-1">Sampai</h6>
                            <input type="date" class="border w-100 p-2 bg-white text-capitalize"  name="batas_waktu" value="<? echo "$n[batas_waktu]";?>">
                            

                            <h6 class="font-weight-bold pt-3 pb-1">Iklan Lowongan</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="aktif" readonly="" value="<? echo "$n[aktif]";?>">

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
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  name="posisi" value="<? echo "$n[posisi]";?>">

                            <h6 class="font-weight-bold pt-3 pb-1">Gaji Yang Diberikan</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize"  onkeyup="convertToRupiah(this);" name="gaji" value="<? echo "$n[gaji]";?>">

                        </div>
                    </div>
            </fieldset>
            <!-- Post Your ad end -->

            <!-- seller-information start -->
            <fieldset class="border p-4 my-3 seller-information bg-gray">
                <div class="row">
                    <div class="col-lg-12">
                    </div>

                    <div class="col-lg-6">
                      <!--  -->
                        <h6 class="font-weight-bold pt-4 pb-1">Jenis Kelamin</h6>
                        <select name="jenis_kelamin" id="inputGroupSelect" class="border w-100 p-2">
                        <option <?php if($n['jenis_kelamin']=="pria"){echo "selected";}?>>pria</option>
                        <option <?php if($n['jenis_kelamin']=="wanita"){echo "selected";}?>>wanita</option>
                        <option <?php if($n['jenis_kelamin']=="pria & wanita"){echo "selected";}?>>pria & wanita</option>
                        </select>
              
                        <h6 class="font-weight-bold pt-4 pb-1">Syarat Pendidikan</h6>
                      <input type="text" name="syarat_pendidikan" value="<? echo "$n[syarat_pendidikan]";?>" class="border w-100 p-2">
                      
                        <h6 class="font-weight-bold pt-4 pb-1">Domisi Wilayah</h6>
                        <select name="wilayah" id="inputGroupSelect" class="border w-100 p-2">
                                      <option <?php if($n['wilayah']=="Yogyakarta"){echo "selected";}?>>Yogyakarta</option>
                                      <option <?php if($n['wilayah']=="Sleman"){echo "selected";}?>>Sleman</option>
                                      <option <?php if($n['wilayah']=="Bantul"){echo "selected";}?>>Bantul</option>
                                      <option <?php if($n['wilayah']=="Kaliurang"){echo "selected";}?>>Kaliurang</option>
                                      <option <?php if($n['wilayah']=="Gunung kidul"){echo "selected";}?>>Gunung_Kidul</option>
                                      <option <?php if($n['wilayah']=="Prambanan"){echo "selected";}?>>Prambanan</option>
                            </select>


                        <h6 class="font-weight-bold pt-4 pb-1">Keahlian Bidang</h6>
                            <select name="keahlian" id="inputGroupSelect" class="border w-100 p-2">
                                <option <?php if($n['keahlian']=="Sekretaris"){echo "selected";}?>>Sekretaris</option>
                                <option <?php if($n['keahlian']=="Seni/Desain Kreatif"){echo "selected";}?>>Seni/Desain Kreatif</option>
                                <option <?php if($n['keahlian']=="Arsitektur/Desain Interior"){echo "selected";}?>>Arsitektur/Desain Interior</option>
                                <option <?php if($n['keahlian']=="IT Perangkat Keras"){echo "selected";}?>>IT Perangkat Keras</option>
                                <option <?php if($n['keahlian']=="Seni/Desain Kreatif"){echo "selected";}?>>Seni/Desain Kreatif</option>
                                <option <?php if($n['keahlian']=="Akutansi/Keuangan"){echo "selected";}?>>Akutansi/Keuangan</option>
                                <option <?php if($n['keahlian']=="IT Perangkat Lunak"){echo "selected";}?>>IT Perangkat Lunak</option>
                                <option<?php if($n['keahlian']=="IT Programer"){echo "selected";}?>>IT Programer</option>
                            </select>

                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Pengalaman kerja</h6>
                            <textarea name="pengalaman_kerja" placeholder="Syarat Pengalaman kerja"class="border p-3 w-100" rows="7" ><? echo "$n[pengalaman_kerja]";?></textarea>

                             <h6 class="font-weight-bold pt-4 pb-1">syarat</h6>
                            <textarea name="syarat" placeholder="dengan Persyaratan"class="border p-3 w-100" rows="7" ><? echo "$n[syarat]";?>"</textarea>
                    </div>
                </div>
            </fieldset>

              <input type="submit" class="btn btn-primary" value="Buat Lowongan">
							<a onclick="history.back(-1)" class="btn btn-warning"> Kembali</a>
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
<link href="bootstrap/js/bootstrap.min.js">
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="style/jquery.js"></script>
  <script type="text/javascript"  src="style/rupiah.js"></script>
</body>

</html>
<?php
} ?>