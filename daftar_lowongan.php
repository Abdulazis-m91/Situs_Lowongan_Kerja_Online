<html>
<?php
Include 'koneksi.php';
session_start();
error_reporting(0);
if (empty($_SESSION['username']) and empty($_SESSION['password'])){
  Include "index.php";
}
else{

session_start();
$share = mysql_query("SELECT * from login where email='$_SESSION[email]' and password='$_SESSION[password]'");
$ada = mysql_fetch_array($share);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);

$t = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]'");
$n = mysql_fetch_array($t);

$tanggal = date('yy-mm-dd');
$aktif='tidak';
mysql_query("UPDATE lowongan set aktif='$aktif' where batas_waktu='$tanggal'");

?> 


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
                
            <li class="nav-item active">
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
<br><br><br>
<!--  -->
<!-- <section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				
				<div class="advance-search">
					<form>
						<div class="form-row">
							<div class="form-group col-md-10">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-md-2">

								<button type="submit" class="btn btn-primary">Search Now</button>
							</div>
						</div>
					</form>
				</div> -->
                <!-- end -->

			</div>
		</div>
	</div>
</section>

<section class="section-sm">
	<div class="container">
		<!-- <div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "Electronics"</h2>
					<p>123 Results on 12 December, 2017</p>
				</div>
			</div>
		</div> -->
        <!-- side bar -->
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
					<!-- <form action="home2.php" method="get">
					<div class="widget category-list">
					     <h4 class="widget-header">Pilih Kriteria</h4>
					     <input type="text" class="form-control" placeholder="Judul Lowongan" name="cari" >
               <br>
               <div class="input-group">
               <select name="wilayah" class="form-control text-center" autofocus>
                      <option  class="form-control" >Wilayah</option>
                      <option value="sleman">Sleman</option>
                      <option value="bantul">Bantul</option>
                      <option value="yogyakarta">Yogyakarta</option>
                      <option value="kaliurang">Kaliurang</option>
                      <option value="gunung_kidul">Gunung_Kidul</option>
                      <option value="Prambanan">Prambanan</option>
               </select></div><br>
               &nbsp;&nbsp;<button type="submit" class="btn btn-secondary">Cari lowongan</button>
					</div>
					</form>
 -->
<div class="widget category-list">
	<h4 class="widget-header">Nearby</h4>
	<ul class="category-list">
		<li><a href="category.html">New York <span>93</span></a></li>
		<li><a href="category.html">New Jersy <span>233</span></a></li>
		<li><a href="category.html">Florida  <span>183</span></a></li>
		<li><a href="category.html">California <span>120</span></a></li>
		<li><a href="category.html">Texas <span>40</span></a></li>
		<li><a href="category.html">Alaska <span>81</span></a></li>
	</ul>
</div>

<!-- <div class="widget filter">
	<h4 class="widget-header">Show Produts</h4>
	<select>
		<option>Popularity</option>
		<option value="1">Top rated</option>
		<option value="2">Lowest Price</option>
		<option value="4">Highest Price</option>
	</select>
</div> -->

<!-- <div class="widget price-range w-100">
	<h4 class="widget-header">Price Range</h4>
	<div class="block">
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
						data-slider-value="[0,5000]">
				<div class="d-flex justify-content-between mt-2">
						<span class="value">$10 - $5000</span>
				</div>
	</div>
</div> -->

<!-- <div class="widget product-shorting">
	<h4 class="widget-header">By Condition</h4>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Brand New
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Almost New
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Gently New
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Havely New
	  </label>
	</div>
</div> -->

				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Daftar Lowongan Yangsudah Dibuat</strong>
							<!-- <select>
								<option>Pilih</option>
								<option value="1">Gaji Terbesar</option>
								<option value="2">Gaji Terkecil</option>
								<option value="4">Banyak Pendaftar</option>
							</select> -->
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="." class="text-info"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
<br>

	<!-- ad listing list  posting -->
<tr>
 <div class="box-body">
              <table class="table table-bordered">
                   <tr>
                <th>No</th>
                <th>Judul Lowongan</th>
                <th>Keahlian</th> 
                <th>Batas Pendaftaran</th>
                <th>pendidikan</th>
                <th></th>
            </tr>

            
                <?php
            $no=1;
            $cari=  mysql_query("SELECT * FROM lowongan WHERE idprusahaan='$ada1[idprusahaan]'")or die ("data kosong");
            
            
            while ($tampil =mysql_fetch_array($cari)){
            ?>
            
            <tr>
                <td><?php echo $no++ ?></td>

                 <td><a href="info_w.php?id=<?php echo $tampil['id_warga']; ?>"><?php
                  $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM lowongan WHERE id_lowongan='$tampil[id_lowongan]'"));
                 echo $naruto1['judul_lowongan']; ?></td>

                <td><?php
                  $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM lowongan WHERE id_lowongan='$tampil[id_lowongan]'"));
                 echo $naruto1['keahlian']; ?></td>

                 <td><?php
                  $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM lowongan WHERE id_lowongan='$tampil[id_lowongan]'"));
                 echo $naruto1['batas_waktu']; ?></td>

                 <td><?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM lowongan WHERE id_lowongan='$tampil[id_lowongan]'"));
                 echo $naruto['syarat_pendidikan']; ?></td>
               
              
                <td> 
                   <div class="box-header with-border">
                     
                       <a href="detail.php?id=<?php echo $naruto1['id_lowongan']; ?>"><button class="btn btn-success">Hapus</button></a>
                       
               <!-- <a href="hapus_lamaran.php?id=<?php echo $tampil['id_daftar'];?> 
                    "onclick="return confirm('Anda yakin ingin membatalkannya..?')"
                       <button class="btn btn-success">Ubah</button></a> -->
                </td>
            </tr>
            <?php
            }
            ?>
                
              
               
              </table>
            </div>
</tr>

				<!-- ad listing list  -->

				<!-- pagination -->
				
				<!-- pagination -->
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
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