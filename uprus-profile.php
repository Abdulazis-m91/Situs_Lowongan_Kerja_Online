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

$l = mysql_query("SELECT * from pencari_kerja where id_login='$ada[id_login]'");
$n = mysql_fetch_array($l);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);
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
            <li class="nav-item">
              <a class="nav-link" href="form_lowongan.php">Buat Lowongan</a>
            </li>
             

                             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item active">
              <a class="nav-link" href="uprus-profile.php">Hi!     
               <? echo "$ada1[nama_prusahaan]";?></a>        
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="keluar.php"onclick="return confirm('Apakah anda yakin ingin keluar?')">Keluar</a>
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
							<img src="logo/<? echo "$ada1[logo]";?>" class="avatar img-circle img-thumbnail" alt="avatar">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><? echo "$ada1[nama_prusahaan]";?></h5>
					</div>
					<!-- Dashboard Links -->

          <!--  -->
					<div class="widget dashboard-links">
						<ul>
						<li class="nav-item text-center">
          				  <?php if ($ada['id_login']==$ada1['id_login']) {
             				  # code...?> 
              <li class="nav-item text-center">
                <a class="nav-link login-button" href="form_update_prus.php?id=<?php echo $ada1['idprusahaan']; ?>">Perbarui Profil</a>
              </li><p>
              <!-- <li class="nav-item text-center">
                <a class="nav-link login-button" href="form_update_pk.php?id=<?php echo $na['id_pencari_kerja']; ?>">Ubah Password</a>
              </li><p> -->
              <li class="nav-item text-center">
                <a class="nav-link login-button" href="keluar.php"onclick="return confirm('Apakah anda yakin ingin keluar?')">Keluar</a>
              </li>
             				<?php } 
             				else { ?>
             				 <a href="form_tambah_prus.php" class="nav-link login-button">Buat Profil</a>
             				<?php }?>
             			</li><p>

					<!-- <li><a href="form_update_pk.php?id=<?php echo $na['id_pencari_kerja']; ?>">Perbarui</a></li> -->
							
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<!-- <div class="widget welcome-message">
					<h2>Edit profile</h2>
					<p>Kamu dapat mengubah profile kamu Edit </p>
				</div> -->
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Informasi Perusahaan</h3>
							<form action="#">
								<!-- First Name -->
								<div class="form-group">
									<h6 for="first-name">Name Perusahaan</h6>
									<label class="text"><? echo "$ada1[nama_prusahaan]";?></label>
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<h6 for="first-name">Alamat Perusahaan</h6>
									<label class="text"><? echo "$ada1[alamat_prusahaan]";?></label>
								</div>
								<div class="form-group">
									<h6 for="first-name">Bidang</h6>
									<label class="text"><? echo "$ada1[Bidang_usaha]";?></label>
								</div>
								<!-- Comunity Name -->

                <div class="form-group">
                  <h6 for="first-name">Nomor Telphone</h6>
                  <label class="text"><? echo "$ada1[No_telpon]";?></label>
                </div>
                <!-- Checkbox -->
                <div class="form-group">
                  <h6 for="first-name">Alamat Email</h6>
                  <label class="text"><? echo "$ada1[email_prusahaan]";?></label>
                </div>
                <div class="form-group">
                  <h6 for="first-name">Siup</h6>
                  <label class="text"><? echo "$ada1[siup]";?></label>
                </div>
						</form>
					</div>
					</div>

              <div class="col-lg-6 col-md-6">
            <!-- Change Password -->
          <div class="widget change-password">
            <h3 class="widget-header user">Informasi</h3>
            <form action="#">
              <!-- Current Password -->
              <div class="form-group">
                  <h6 for="first-name">Gambaran Prusahaan</h6>
                  <label class="text"><? echo "$ada1[gambaran]";?></label>
                  <!-- <h6><template class="text"><? echo "$ada1[gambaran]";?></template></h6> -->
                </div>
                <div class="form-group">
                  <h6 for="first-name">Hari Kerja</h6>
                  <label class="text"><? echo "$ada1[hari_kerja]";?></label>
                </div>
                 <div class="form-group">
                  <h6 for="first-name">Jam Kerja</h6>
                  <label class="text"><? echo "$ada1[jam_kerja]";?></label>
                </div>
                 <div class="form-group">
                  <h6 for="first-name">Gaya Berpakaian</h6>
                  <label class="text"><? echo "$ada1[gaya_pakaian]";?></label>
                </div>
               <div class="form-group">
                  <h6 for="first-name">Bahasa yang di gunakan</h6>
                  <label class="text"><? echo "$ada1[bahasa]";?></label>
                </div>
                 <div class="form-group">
                  <h6 for="first-name">Ukuran Perusahaan</h6>
                  <label class="text"><? echo "$ada1[ukuran_prusahaan]";?>-Karyawan</label>
                </div>
                <div class="form-group">
                  <h6 for="first-name">Website</h6>
                  <label class="text"><? echo "$ada1[website]";?></label>
                </div>
                
                
             
              <!-- Confirm New Password -->
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

</body>

</html>
<?php
}
?>