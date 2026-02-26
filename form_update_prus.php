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
$share = mysql_query("select * from login where email='$_SESSION[email]' and password='$_SESSION[password]'");
$ada = mysql_fetch_array($share);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);

$id=$_GET['id'];
$cari=  mysql_query("SELECT * from perusahaan where idprusahaan='$id' ");
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
              <a class="nav-link" href="uprus-profile.php">Hi!&nbsp;<? echo "$ada1[nama_prusahaan]";?></a>
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
						   <script type="text/javascript">

        						function PreviewImage() {
        						var oFReader = new FileReader();
        						oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

       							oFReader.onload = function (oFREvent) {
        						document.getElementById("uploadPreview").src = oFREvent.target.result;
        							};
        							};

    						</script>
						<div>
							<!-- <img src="images/user/<? echo "$n[gambar]";?>" alt="foto" class=""> -->
							 <img src="logo/<? echo "$n[logo]";?>" class="avatar img-circle img-thumbnail" alt="avatar">
						</div>
						<!-- User Name -->
						
					</div>
					<!-- Dashboard Links -->
				
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Perbarui Informasi Perusahaan</h2>
					<p></p>
				</div>
				<!-- Edit Personal Info -->
	
    <form class="form-horizontal" method="POST" action="update_prusahaan.php"  enctype="multipart/form-data">
        <div class="form-group">
           <input type="hidden" name="idprusahaan" value="<? echo "$n[idprusahaan]";?>">
         
           <input type="hidden" name="id_login" value="<? echo "$n[id_login]";?>">
          <label class="col-lg-3 control-label">Nama Perusahaan</label>
          <div class="col-lg-8">
          <input type="text" class="form-control" name="nama_prusahaan" value="<?php echo $n['nama_prusahaan'];?>">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Alamat Perusahaan</label>
          <div class="col-lg-8">
            <textarea class="form-control" name="alamat_prusahaan"><?php echo $n['alamat_prusahaan'];?></textarea>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Siup</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="No_npwp" value="<?php echo $n['siup'];?>">
          </div>
        </div>

         <div class="form-group">
          <label class="col-lg-3 control-label">Telphone</label>
          <div class="col-lg-8">
           <input type="text" class="form-control" name="No_telpon" value="<?php echo $n['No_telpon'];?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Alamat Email</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="email_prusahaan" value="<?php echo $n['email_prusahaan'];?>">
          </div>
        </div>

         <div class="form-group">
          <label class="col-lg-3 control-label">Bidang Usaha</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="Bidang_usaha"value="<?php echo $n['Bidang_usaha'];?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Gaya Berpakaian</label>
          <div class="col-lg-8">
              <input type="text" class="form-control" name="gaya_pakaian" value="<?php echo $n['gaya_pakaian'];?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-9 control-label">Gambaran Perusahaan</label>
          <div class="col-lg-8">
              <textarea type="text" class="form-control" name="gambaran" ><?php echo $n['gambaran'];?>"</textarea>
          </div>
        </div>

         <div class="form-group">
          <label class="col-lg-3 control-label">Jam Kerja</label>
          <div class="col-lg-8">
                      <select name="jam_kerja" class="form-control" value="<?php echo $n['jam_kerja'];?>">
                      <option value="08.00 - 16.00">08.00 - 16.00</option>
                      <option value="08.00 - 17.00">08.00 - 17.00</option>
                      <option value="07.00 - 16.00">07.00 -16.00</option>
                      <option value="07.00 - 17.00">07.00 -17.00</option>
                      </select></div></div>

         <div class="form-group">
          <label class="col-lg-3 control-label">Bahasa yang digunakan</label>
          <div class="col-lg-8">
              <input type="text" class="form-control" name="bahasa" value="<?php echo $n['bahasa'];?>">
          </div>
        </div>

         <div class="form-group">
          <label class="col-lg-3 control-label">Situs Perusahaan</label>
          <div class="col-lg-8">
              <input type="text" class="form-control" name="website" value="<?php echo $n['website'];?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Hari Kerja</label>
          <div class="col-lg-8">
                      <select name="hari_kerja" class="form-control" value="<?php echo $n['hari_kerja'];?>">
                      <option value="Senin - Jumat">Senin - Jumat</option>
                      <option value="Senin - Sabtu">Senin - Sabtu</option>
                      <option value="Setiap Hari">Setiap Hari</option>
                      
                      </select></div></div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Ukuran Perusahaan</label>
          <div class="col-lg-8">
              <input type="text" class="form-control" name="ukuran_prusahaan" value="<?php echo $n['ukuran_prusahaan'];?>">
          </div>
        </div>
    <hr>



<!---->      
         <div class="form-group">
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <a onclick="history.back(-1)" class="btn btn-warning"> Kembali</a>
            <span></span>
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

</body>

</html>
<?php
} ?>