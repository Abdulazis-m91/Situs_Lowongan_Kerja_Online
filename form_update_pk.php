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
$na = mysql_fetch_array($l);

$id=$_GET['id'];
$cari=  mysql_query("SELECT * from pencari_kerja where id_pencari_kerja='$id' ");
$n =mysql_fetch_array($cari);
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
            	
             <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="home.php">Cari Lowongan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_lamaran.php">Lamaran</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="info_prsu.php">Profil perusahaan</a>
            </li> -->

							 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item active active">
              <a class="nav-link" href="user-profile.php">Hi!&nbsp;<? echo "$na[nama]";?></a>
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
						<div>
							
							<img src="profil/<? echo "$n[gambar]";?>" class="avatar img-circle img-thumbnail" alt="avatar">
							
						</div>
						<!-- User Name -->
						<h5 class="text-center"><? echo "$n[nama]";?></h5>
					</div>
					<!-- Dashboard Links -->
					<div class="widget dashboard-links">
						<ul>
							<?php 
								
									$sql = mysql_query("SELECT * from pencari_kerja where id_pencari_kerja='$id'");
									while($data=mysql_fetch_array($sql)){
										
								?>
							<li class="nav-item text-center">
								<a class="nav-link login-button" href="edit_poto.php?id_pencari_kerja=<?php echo $data['id_pencari_kerja']; ?>">Ubah Foto Profil</a>
								
							</li><br>

								<li class="nav-item text-center">
								<a class="nav-link login-button" href="edit_cv.php?id_pencari_kerja=<?php echo $data['id_pencari_kerja']; ?>">Ubah File CV & Ijazah</a>
								
							</li><p>
								<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Update profile</h2>
					<p></p>
				</div>
				<!-- Edit Personal Info -->
				 <form class="form-horizontal" method="POST" action="update_pk.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Personal Informasi</h3>
							<form action="#">
								<!-- First Name -->

							  <input type="hidden" name="id_login" value="<? echo "$n[id_login]";?>">
							   <input type="hidden" name="id_pencari_kerja" value="<? echo "$n[id_pencari_kerja]";?>">
								<div class="form-group">
									<label for="first-name">Name</label>
									 <input type="text" class="form-control" value="<?php echo $n['nama'];?>" name="nama">
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="first-name">Name Panggilan</label>
									 <input type="text" class="form-control" value="<?php echo $n['nama_pangilan'];?>" name="nama_pangilan">
								</div>
								<!-- Comunity Name -->
								<div class="form-group">
									<label for="first-name">Tanggal Lahir</label>
									 <input type="date" class="form-control" value="<?php echo $n['tanggal_lahir'];?>" name="tanggal_lahir">
								</div>

								<div class="form-group">
									<label for="first-name">Usia</label>
									 <input type="text" class="form-control" value="<?php echo $n['usia'];?>" name="usia">
								</div>
								<!-- Checkbox -->
								<div class="form-group">
									<label for="first-name">Jenis Kelmain</label>
							<select name="jenis_kelamin" id="inputGroupSelect" class="form-control">
		                        <option <?php if($n['jenis_kelamin']=="pria"){echo "selected";}?>>pria</option>
		                        <option <?php if($n['jenis_kelamin']=="wanita"){echo "selected";}?>>wanita</option>
		                    </select>
								</div>
								<!-- Zip Code -->
								<div class="form-group">
									<label for="first-name">Alamat</label>
									 <textarea type="text" class="form-control" name="alamat"><?php echo $n['alamat'];?></textarea> 
								</div>

								<div class="form-group">
									<label for="first-name">Agama</label>
								<select name="agama" class="form-control">
				                      <option <?php if($n['agama']=="Islam"){echo "selected";}?>>Islam</option>
				                      <option <?php if($n['agama']=="Kristen"){echo "selected";}?>>Kristen</option>
				                      <option <?php if($n['agama']=="Hindu"){echo "selected";}?>>Hindu</option>
				                      <option <?php if($n['agama']=="Buddha"){echo "selected";}?>>Buddha</option>
				                      <option <?php if($n['agama']=="Katolik"){echo "selected";}?>>Katolik</option>
				                      <option <?php if($n['agama']=="Kong Hu Cu"){echo "selected";}?>>Kong Hu Cu</option>
				              	</select>
								</div>

								<div class="form-group">
									<label for="first-name">Status</label>
									  <select name="status" class="form-control">
				                      <option <?php if($n['status']=="Lajang"){echo "selected";}?>>Lajang</option>
				                      <option <?php if($n['status']=="Menikah"){echo "selected";}?>>Menikah</option>
				              	</select>
								</div>
								<div class="form-group">
									<label for="first-name">Riwayat Penyakit</label>
									 <input type="text" class="form-control" value="<?php echo $n['riwayat_penyakit'];?>" name="riwayat_penyakit">
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
									 <input type="text" class="form-control" value="<?php echo $n['pendidikan'];?>" name="pendidikan">
								</div>
							<!-- New Password -->
							<div class="form-group">
									<label for="first-name">pengalaman_kerja</label>
									  <textarea type="text" class="form-control" name="pengalaman_kerja" ><?php echo $n['pengalaman_kerja'];?></textarea>
								</div>
							<!-- Confirm New Password -->
							<div class="form-group">
		     					 <label for="exampleInputFile">CV & Ijazah (.RAR/Zip)</label><br>
		    					 <!-- <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
		     					 <small id="fileHelp" class="form-text text-muted"</small> -->
		     					 <input type="text" readonly="" class="form-control" value="<?php echo $n['file'];?>" name="file">
    						</div>
    						<hr>
    						<label for="first-name">Jika ingin mengubah File baru silahkan lihat menu dibawah foto profil anda</label>
    						 <!-- <label for="exampleInputFile">Uplode CV yang sudah anda buat (.DOC/PDF)</label><br>
    					 <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
    						<hr>
    						 <label for="exampleInputFile">Uplode Scan Ijazah Terakhir</label><br>
    					 <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" /> -->
					</div>

					
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Email dan Nomor hp</h3>
						
							<!-- Current Password -->
							<div class="form-group">
									<label for="first-name">Alamat Email</label>
									 <input type="text" class="form-control" value="<?php echo $n['email'];?>" name="email">
								</div>
							<!-- New email -->
							<div class="form-group">
									<label for="first-name">No Hp</label>
									 <input type="doubel" class="form-control" value="<?php echo $n['hp'];?>" name="hp">
								</div>
						
					</div>
					<hr>
					<div class="form-group">
          <div class="col-md-14">
            <input type="submit" class="btn btn-primary" name="simpan" value="SIMPAN">
            <span></span>
            <input class="btn btn-primary" value="Cancel" type="button" onclick="history.back(-1)" >
           
          </div>
        </div>
					</div>
					 

			</form>
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