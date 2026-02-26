<html>
<?php
Include 'koneksi.php';
session_start();

$id=$_GET['id'];
$cari=  mysql_query("SELECT * from lowongan where id_lowongan='$id'");
$tampil =mysql_fetch_array($cari);

// 
$butuh= $tampil['membutuhkan']; //sintak membutuhkan jumlah lowongan

$total = mysql_num_rows(mysql_query("SELECT * FROM daftar where id_lowongan ='$id'"));
// 

$cari1=  mysql_query("SELECT * from perusahaan where idprusahaan='$tampil[idprusahaan]'");
$tampil1 =mysql_fetch_array($cari1);

$tanggal = date('yy-mm-dd');
$aktif='tidak';
mysql_query("UPDATE lowongan set aktif='$aktif' where batas_waktu='$tanggal'");


?>
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buker_Sembada | Cari Lowongan Kerja<</title>
  
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a href="index.php">
        <img src="img/Untitled-5.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <ul class="navbar-nav ml-auto mt-10">
          
          <li class="nav-item">
                <a class="nav-link login-button" href="form_login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link login-button" href="form_daftar.php"><i class="fa fa-plus-circle"></i>&nbsp;Buat Akun</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white add-button" href="form_daftar_perusahaan.php"><i class="fa fa-plus-circle"></i>&nbsp;Perusahaan</a>
              </li>      
          </ul></li></ul>
        </div>
      </div>
    </nav>
<br><br><br>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="col-md-25 col-sm-15 col-xs-5">
							<img src="logo/<? echo "$tampil1[logo]";?>" class="avatar img-circle img-thumbnail">
						</div>
						<!-- User Name -->
							<div class="text-center">
							<b><a href="info_p2.php?id=<?php echo $tampil['idprusahaan']; ?>"><? echo "$tampil1[nama_prusahaan]";?></a></b>
					</div></div>
					<!-- Dashboard Links -->

          <!-- Sidebar Menu -->
          
<!-- end sidebar -->
				</div>
			</div>


			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-9">
							<strong><h1 class="mt-4"><? echo "$tampil[judul_lowongan]";?></h1></strong>
							<!-- <p class="lead">Perusahaan
             		<a href="info_p.php?id=<?php echo $tampil['idprusahaan']; ?>"><? echo "$tampil1[nama_prusahaan]";?></a>
        		</p> --><li class="list-inline-item">Pendaftaran Dimulai :&nbsp;&nbsp;<? echo "$tampil[awal_waktu]";?>&nbsp;/&nbsp;<? echo "$tampil[batas_waktu]";?></li>
            <?php
$mulai = $tampil['awal_waktu']; // waktu mulai
$exp = $tampil['batas_waktu']; // batas waktu
if (!(strtotime($mulai) < time() AND time() >= strtotime($exp))) {
echo "| <b>Lowongan Aktif</b>";
} else {
echo "| <font color='#ff0000'><b>Lowongan sudah tidak Aktif</b></font>";
}
?>
						</div>

					</div>
				</div>
					<br>
				<!-- Edit Profile Welcome Text -->
				<!-- <div class="widget welcome-message">
					<h2>Edit profile</h2>
					<p>Kamu dapat mengubah profile kamu Edit </p>
				</div> -->
				<!-- Edit Personal Info -->

				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Deskripsi Pekerjaan</h3>
							<form class="form-horizontal" method="POST" action="simpan_daftar.php">
							  <input type="hidden" name="id_lowongan" value="<? echo "$tampil[id_lowongan]";?>">
					          <input type="hidden" name="id_login" value="<? echo "$ada[id_login]";?>">
					          <input type="hidden" name="idprusahaan" value="<? echo "$tampil1[idprusahaan]";?>">
					          <input type="hidden" name="id_pencari_kerja" value="<? echo "$na[id_pencari_kerja]";?>">
													<!-- First Name -->
							<div class="form-group">
                  <h6 for="first-name">Bidang keahlian</h6>
                  <label class="text"><? echo "$tampil[keahlian]";?></label>
                </div>
                <!-- Last Name -->
                <div class="form-group">
                  <h6 for="first-name">Membutuhkan</h6>
                  <label class="text"><? echo "$tampil[membutuhkan]";?>&nbsp;Orang</label>
                </div>
                <div class="form-group">
                  <h6 for="first-name">Jenis_Kelamin</h6>
                  <label class="text"><? echo "$tampil[jenis_kelamin]";?></label>
                </div>
                <!-- Comunity Name -->
                <div class="form-group">
                  <h6 for="first-name">Gambaran pekerjaan</h6>
                  <label class="text"><? echo "$tampil[isi]";?></label>
                </div>
            
          </div>
           <div class="widget change-password">
            <h3 class="widget-header user">INFORMASI</h3>
              <!-- Current Password -->
             <div class="form-group">
                  <h6 for="first-name">Penawaran Gaji</h6>
                  <label class="text">Rp.<? echo "$tampil[gaji]";?></label>
                </div>
                <!-- Checkbox -->
               <!--  <div class="form-group">
                  <label for="first-name">Ahli Dalam Bidang</label>
                  <h6 class="text"><? echo "$tampil[keahlian]";?></h6>
                </div> -->
                 <div class="form-group">
                  <h6 for="first-name">Jam Kerja</h6>
                  <label class="text">
                  <?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM perusahaan WHERE idprusahaan='$tampil[idprusahaan]'"));
                 echo $naruto['jam_kerja']; ?>
               </label>
                </div>

                 <div class="form-group">
                  <h6 for="first-name">Hari Kerja</h6>
                  <label class="text">
                    <?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM perusahaan WHERE idprusahaan='$tampil[idprusahaan]'"));
                 echo $naruto['hari_kerja']; ?></td>
                  </label>
                </div>
                <div class="form-group">
                  <h6 for="first-name">Ditempatkan Posisi</h6>
                  <label class="text"><? echo "$tampil[posisi]";?></label>
                </div>
              <!-- Confirm New Password -->
              <div class="form-group">
                  <h6 for="first-name">Lokasi Kerja</></h6>
                  <label class="text"><? echo "$tampil[wilayah]";?></label>
                </div>
                </div>
          </div>

              <div class="col-lg-6 col-md-6">
            <!-- Change Password -->
          <div class="widget change-password">
            <h3 class="widget-header user">PERSYARATAN</h3>
              <!-- Current Password -->
             <div class="form-group">
                  <h6 for="first-name">Pendidikan Minimal</h6>
                  <label class="text"><? echo "$tampil[syarat_pendidikan]";?></label>
                </div>
                <!-- Checkbox -->
                <div class="form-group">
                  <h6 for="first-name">Syarat</h6>
                  <label class="text"><? echo "$tampil[syarat]";?></label>
                </div>
                <div class="form-group">
                  <h6 for="first-name">Pengalaman kerja</h6>
                  <label class="text"><? echo "$tampil[pengalaman_kerja]";?></label>
                </div>
                </div>
                <hr>
              
              <a href="form_login.php" class="btn btn-primary" onclick="return confirm('Kamu harus Login terlebih dahulu')">Silahkan Login terlebih dahulu &rarr;</a>
      </form>

          </div>
          </div>
				</div>
			</div>
		</div>
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
          <p>Dinas Tenaga Kerja Sleman© <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
       
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

</body>

</html>
