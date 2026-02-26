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
        <!-- side bar -->
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">

<div class="widget category-list">
	<b class="widget-header">Informasi</b>
	<ul class="category-list">
		<b>Iklan Lowongan</b><p><br>
   Pastikan update iklan lowongan jika mencapai tanggal expait agar lowongan aktif.<br>dan hapus lowongan jika sudah mendapat tenaga kerja <a href="daftar_lowongan2.php" onClick="">cek disini</a>.</p>
              <hr>
    <b>Pendaftar Lowongan</b><p><br>
      segera proses para pendaftar.anda bisa menolak pendaftar dan jika anda menerima pendaftar segera hubungi lewat email atau nomor telphon <a href="daftar_pendaftar.php" onClick="">cek disni</a>.
	</ul>
  <hr>
</div>

<!-- <div class="card border-secondary mb-3" style="max-width: 20rem;">
  <div class="card-header">Informasi</div>
  <div class="card-body">
    <h4 class="card-title">Iklan Lowongan Kerja</h4>
    <p class="card-text"> Pastikan update iklan lowongan jika mencapai tanggal expait agar lowongan aktif.<br>dan hapus lowongan jika sudah mendapat tenaga kerja <a href="daftar_lowongan.php" onClick="">cek disini</a></p>
    <hr>
    <h4 class="card-title">Pendaftar Lowongan</h4>
    <p class="card-text"> segera proses para pendaftar.anda bisa menolak pendaftar dan jika anda menerima pendaftar segera hubungi lewat email atau nomor telphon <a href="daftar_pendaftar.php" onClick="">cek disni</a>.</p>
    <hr>
  </div>
</div> -->

				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong></strong>
							<!-- <select>
								<option>Pilih</option>
								<option value="1">Gaji Terbesar</option>
								<option value="2">Gaji Terkecil</option>
								<option value="4">Banyak Pendaftar</option>
							</select> -->

						</div>
					
						
					</div>
				</div>
<br>
						<?php if ($ada['id_login']==$ada1['id_login']) {
             				  ?> 
             				<?php } 
             				else { ?>
             				<div class="panel-footer text-center ">
						Lengkapi Profil perusahaan anda! &nbsp;&nbsp;<a href="form_tambah_prus.php" onClick="">Klik daftar disini </a>
						</div>
             				
						<?php }?>

	<!-- ad listing list  posting -->
<?php
            $no=1;
            $cari=  mysql_query("SELECT * from lowongan where idprusahaan='$ada1[idprusahaan]'");
            while ($tampil =mysql_fetch_array($cari)){
            ?>

<tr>
<div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-4 align-self-center">
           <div class="col-md-25 col-sm-15 col-xs-5">
           <img src="logo/<?php
                        $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM perusahaan WHERE idprusahaan='$tampil[idprusahaan]'"));
                       echo $naruto1['logo']; ?>" class="img-fluid p-lg-3 p-sm-5 p-4" alt="">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">

                        <div>
                       <h3><a href="detail.php?id=<?php echo $tampil['id_lowongan']; ?>" class="font-weight-bold" title="Judul"><?php echo $tampil['judul_lowongan']; ?></a></h3>
                        </div>

                         <?php
                          $mulai = $tampil['awal_waktu']; // waktu mulai
                          $exp = $tampil['batas_waktu']; // batas waktu
                          if (!(strtotime($mulai) < time() AND time() >= strtotime($exp))) {
                          echo "";
                          } else {
                          echo "| <font color='#ff0000'><b>Lowongan sudah tidak Aktif</b></font>";
                          }
                          ?>

                          <?php
                          $lama = 2; // lama data adalah 3 hari
                           
                          // proses penghapusan data
                           
                          $query = "DELETE FROM lowongan
                                    WHERE DATEDIFF(CURDATE(), batas_waktu) > $lama";
                          $hasil = mysql_query($query);
                           
                          ?>
                        <a class="font-weight" title="Perusahaan" href="detail.php?id=<?php echo $tampil['id_lowongan']; ?>">By :<?php
                        $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM perusahaan WHERE idprusahaan='$tampil[idprusahaan]'"));
                       echo $naruto1['nama_prusahaan']; ?></a>

                        <ul class="list-inline mt-2 mb-3">
                        <li class="list-inline-item" title="Memiliki Keahlian"><a href="category.html"> <i class="fa fa-building"></i>&nbsp;<?php echo $tampil['keahlian']; ?></a></li>&nbsp;&nbsp;
                        <li class="list-inline-item" title="Pendaftaran Sampai"><a href=""><i class="fa fa-calendar"></i>&nbsp;
                        <?php echo $tampil['awal_waktu']; ?>&nbsp;/&nbsp;<?php echo $tampil['batas_waktu']; ?></a></a></li>
                         <p>
                         <li class="list-inline-item" title="Lokasi Kerja">Lokasi Kerja:&nbsp;&nbsp;<?php echo $tampil['wilayah']; ?></a></li>&nbsp;&nbsp;
                        </ul>
                        <p class="pr-5"></p>
                      </div>

                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-ratings float-lg-right pb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</tr>
<?php
}
?>
				<!-- ad listing list  -->

				<!-- pagination -->
				  <?php if ($ada['id_login']==$ada1['id_login']) {
             				  # code...?> 

				<!-- <div class="pagination justify-content-center py-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div> -->
						<?php } 
             				else { ?>
             				<?php }?>
             			</li><p>
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
} ?>