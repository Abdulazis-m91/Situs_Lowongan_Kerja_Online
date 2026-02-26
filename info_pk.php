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
$tampil1 = mysql_fetch_array($share1);

$t = mysql_query("SELECT * from lowongan ");
$a = mysql_fetch_array($t);


$id=$_GET['id'];
$l = mysql_query("SELECT * from pencari_kerja where id_pencari_kerja='$id'");
$tampil = mysql_fetch_array($l);


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
            	
            <?php if ($ada['id_login']==$tampil1['id_login']) {
               # code...?> 
               <li class="nav-item">
                <a class="nav-link" href="home_perusahaan.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_lowongan2.php">Lowongan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="daftar_pendaftar.php">Pendaftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form_lowongan.php">Buat Lowongan</a>
            </li>
           <?php } 
             else { ?>
            <li class="nav-item">
                <a class="nav-link" href="admin_home.php">Home</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="admin_pk.php">Pencari Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_prus.php">Perusahaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_lowongan.php">Lowongan</a>
            </li>
             <?php }?>
                             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <li class="nav-item">
              <a class="nav-link" href="uprus-profile.php">Hi!&nbsp;
              	<?php if ($ada['id_login']==$tampil1['id_login']) {
               # code...?> 
               <? echo "$tampil1[nama_prusahaan]";?></a>
             <?php } 
             else{ ?>           
              Admin</a> 
             <?php }?>
            </li>
 -->

 			<?php if ($ada['id_login']==$tampil1['id_login']) {
               # code...?> 
              <a class="nav-link" href="uprus-profile.php">Hi!
              <? echo "$tampil1[nama_prusahaan]";?></a>
             <?php } 
             
             else { ?>
            <a class="nav-link">Hi! Admin</a> 
             <?php }?>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="keluar.php"onclick="return confirm('Apakah anda yakin ingin keluar?')">Keluar</a>
            </li>
          </ul>
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
							<img src="profil/<? echo "$tampil[gambar]";?>" alt="gambar" class="avatar img-circle img-thumbnail">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><? echo "$tampil[nama]";?></h5>
					</div>
					<!-- Dashboard Links -->
					<div class="widget dashboard-links">
						<ul>
							<!--  -->
							<?php if ($ada['id_login']==$tampil1['id_login']) {
					               # code...?> 
					             <?php } 
					             
					             else { ?>
  
							<li class="nav-item text-center">
								<a class="nav-link login-button" href="admin_lamaran_pk.php?id=<?php echo $tampil['id_pencari_kerja']; ?>">Cek Lamaran <? echo "$tampil[nama_pangilan]";?></a>
								<!-- <a class="nav-link login-button" href="javascript:window.print()">Cetak Profil</a> -->
							</li><p>
								 <?php }?>
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
							<h3 class="widget-header user">Personal Informasi</h3>
							<form action="#">
								<!-- First Name -->
								<div class="form-group">
									<label for="first-name">Name Lengkap</label>
									<h6 class="text"><? echo "$tampil[nama]";?></h6>
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="first-name">Name Panggilan</label>
									<h6 class="text"><? echo "$tampil[nama_pangilan]";?></h6>
								</div>
								<!-- Comunity Name -->
								<div class="form-group">
									<label for="first-name">Tanggal Lahir</label>
									<h6 class="text"><? echo "$tampil[tanggal_lahir]";?></h6>
								</div>
								<!-- Checkbox -->
								<div class="form-group">
									<label for="first-name">Jenis Kelamin</label>
									<h6 class="text"><? echo "$tampil[jenis_kelamin]";?></h6>
								</div>
								<!-- Zip Code -->
								<div class="form-group">
									<label for="first-name">Alamat</label>
									<h6 class="text"><? echo "$tampil[alamat]";?></h6>
								</div>
								<div class="form-group">
									<label for="first-name">Agama</label>
									<h6 class="text"><? echo "$tampil[agama]";?></h6>
								</div>
								<div class="form-group">
									<label for="first-name">Status</label>
									<h6 class="text"><? echo "$tampil[status]";?></h6>
								</div>
								<div class="form-group">
									<label for="first-name">Riwayat Penyakit</label>
									<h6 class="text"><? echo "$tampil[riwayat_penyakit]";?></h6>
								</div>
							</form>
						</div></div>

					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Pendidikan dana Pengalaman kerja</h3>
						
							<!-- Current Password -->
							<div class="form-group">
									<label for="first-name">Pendidikan</label>
									<h6 class="text"><? echo "$tampil[pendidikan]";?></h6>
								</div>
							<!-- New Password -->
							<div class="form-group">
									<label for="first-name">Pengalaman Keja</label>
									<h6 class="text"><? echo "$tampil[pengalaman_kerja]";?></h6>
								</div>
							<!-- Confirm New Password -->
						
					</div>
					

					
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Email dan Nomor hp</h3>
						
							<!-- Current Password -->
							<div class="form-group">
									<label for="first-name">Alamat Email</label>
									<h6 class="text"><? echo "$tampil[email]";?></h6>
								</div>
							<!-- New email -->
							<div class="form-group">
									<label for="first-name">Nomor Hp</label>
									<h6 class="text"><? echo "$tampil[hp]";?></h6>
								</div>
						
					</div>
					<br>
					<div class="widget change-email mb-0" id="example">
						<h3 class="widget-header user">CV Dan Ijazah</h3>
						
							<!-- download Cv -->
							    <?php
						            
						            $query = mysql_query("SELECT * from pencari_kerja where id_pencari_kerja='$id'"); 
						            while($data = mysql_fetch_array($query)){
						        ?>
						   
						        <div class="form-group">
									<br><label class="text"><? echo "$data[file]";?></label><br>
						        <td><a href="downloadpk.php?filename=<?=$data['file']?>">Download</a></td>    
						    </div>
						        <?php 
						        } 
						        ?>
             			</li><p>
						
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
          <p>Disnaker Sleman © <script>
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

<script>
 $(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'colvis'
    ]
  } );
} );
</script>