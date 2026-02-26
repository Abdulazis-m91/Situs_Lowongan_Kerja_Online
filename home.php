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

$t = mysql_query("SELECT * from lowongan ");
$d = mysql_fetch_array($t);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);

?> 


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
                
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="home.php">Cari Lowongan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_lamaran.php">Lamaran</a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="info_prus.php">Profil perusahaan</a>
            </li> -->

                             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
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
<!--  -->
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
					
         <!--  <div class="widget category-list">
          <form action="home.php" method="GET">
					     <h4 class="widget-header">Mencari Kriteria</h4>
					     <input type="text" class="form-control" placeholder="Judul Lowongan" name="cari" > 
                &nbsp;&nbsp;<button type="submit" class="btn btn-secondary">Cari lowongan</button>
					</form>
          <form action="home.php" method="GET">
               <input type="text" class="form-control" placeholder="Keahlian" name="keahlian" >
                &nbsp;&nbsp;<button type="submit" class="btn btn-secondary">Cari lowongan</button>
          </form>
          </div> -->
      <div class="card border-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header">PENCARIAN</div>
          <div class="card-body">

        <form action="home.php" method="GET">
        <div class="form-group">
          <div class="input-group">
         <input type="text" class="form-control" placeholder="Lowongan" name="cari" autocomplete="off">&nbsp; 
        <button class="input-group-text" type="submit">Cari</button>
          </div>
        </div>
        </form>

       <!--  <form action="home.php" method="GET">
        <div class="form-group">
          <div class="input-group">
         <input type="text" class="form-control" placeholder="Keahlian" name="keahlian" >&nbsp;
        <button class="input-group-text" type="submit">Cari</button>
          </div>
        </div>
        </form> -->

        <form action="home.php" method="GET">
        <div class="form-group">
          <div class="input-group">
            <select  name="keahlian" class="form-control">
                      <option  class="form-control" >Keahlian Anda</option>
                      <option value="Akutansi/Keuangan">Akutansi/Keuangan</option>
                      <option value="Arsitek/Desain Interior">Arsitek/Desain Interior</option>
                      <option value="Dokter/Diagnos">Dokter/Diagnos</option>
                      <option value="E-Commerce">E-Commerce</option>
                      <option value="Farmasi">Farmasi</option>
                      <option value="IT Perangkat Keras">IT Perangkat Keras</option>
                      <option value="IT Perangkat Lunak">IT Perangkat Lunak</option>
                       <option value="IT Programer">IT Programer</option>
                       <option value="IT Jaringan/Sistem/Database">IT Jaringan/Sistem/Database</option>
                       <option value="Pendidikan">Pendidikan</option>
                       <option value="Penjualan">Penjualan</option>
                       <option value="Pelayanan Pelangan">Pelayanan Pelangan</option>
                      <option value="Pekerjaan Umum">Pekerjaan Umum</option>
                      <option value="Sekretaris">Sekretaris</option>
                      <option value="Seni/Desain Kreatif">Seni/Desain Kreatif</option>
                      <option value="Teknik Elektro/Elektroni">Teknik Elektro/Elektronik</option>
                      </select>&nbsp;
        <button class="input-group-text" type="submit">Cari</button>
          </div>
        </div>
        </form>

        <form action="home.php" method="GET">
        <div class="form-group">
          <div class="input-group">
            <select name="wilayah" class="form-control">
                      <option  class="form-control" >Wilayah</option>
                      <option value="sleman">Sleman</option>
                      <option value="bantul">Bantul</option>
                      <option value="yogyakarta">Yogyakarta</option>
                      <option value="kaliurang">Kaliurang</option>
                      <option value="gunung_kidul">Gunung_Kidul</option>
                      <option value="Prambanan">Prambanan</option>
                      </select>&nbsp;
        <button class="input-group-text" type="submit">Cari</button>
          </div>
        </div>
        </form>
        
        </div>
      </div>

<div class="card border-secondary mb-3" style="max-width: 20rem;">
  <div class="card-header">INFORMASI</div>
  <div class="card-body">
    <h4 class="card-title">Setelah melakukan Pendaftaran</h4>
    <p class="card-text">Jika anda di terima maka anda akan di hubungi oleh pihak perusahaan melalui email dan status di daftar lamaran akan berubah <a href="daftar_lamaran.php" onClick="">Cek Disini </a></p>
    <hr>
    <h4 class="card-title">Mengubah Profile</h4>
    <p class="card-text">anda dapat mengubah informasi profil anda di halaman profil</p>
    <hr>
     <h4 class="card-title">Info lowongan Kerja</h4>
    <p class="card-text">Jika informasi lowongan kerja kurang jelas, anda dapat menghubungi instansi melalui email atau nomor telpon yang tersedia di profil Perusahaan/ instansi.</p>
  </div>
</div>

				</div>
			</div>
      
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
          <div class="row">
            <div class="col-md-6">
           
              
            </div>
            <div class="col-md-6">
              <div class="view">
               <!-- <strong>Urutkan</strong>
                <select>
                <option>Pilih</option>
                <option value="1">Gaji Terbesar</option>
                <option value="2">Gaji Terkecil</option>
                <option value="4">Banyak Pendaftar</option>
              </select> -->
              </div>
            </div>
            
          </div>
        </div>
<br>

	<!-- ad listing list  posting -->

            <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysql_query("SELECT * from lowongan where judul_lowongan like '%".$cari."%'");     
  }
  elseif (isset($_GET['keahlian'])){
    $keahlian = $_GET['keahlian'];
    $data = mysql_query("SELECT * from lowongan where keahlian like '%".$keahlian."%'");   
  }

 elseif (isset($_GET['wilayah'])){
    $wilayah = $_GET['wilayah'];
    $data = mysql_query("SELECT * from lowongan where wilayah like '%".$wilayah."%'");    
  }

  else{
    $data = mysql_query("SELECT * from lowongan order by id_lowongan desc");
  }

  $no = 1;
  while($d = mysql_fetch_array($data)){
  ?>
   		
<tr>

<div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-4 align-self-center">
             <div class="col-md-20 col-sm-10 col-xs-0">
           <img src="logo/<?php
                        $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM perusahaan WHERE idprusahaan='$d[idprusahaan]'"));
                       echo $naruto1['logo']; ?>" class="img-fluid p-lg-3 p-sm-5 p-4" alt="">
            </div>
            
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">

                        <div>
                       <h3><a href="detail.php?id=<?php echo $d['id_lowongan']; ?>" class="font-weight-bold" title="Judul"><?php echo $d['judul_lowongan']; ?></a></h3>
                        </div>

                         <?php
                          $mulai = $d['awal_waktu']; // waktu mulai
                          $exp = $d['batas_waktu']; // batas waktu
                          if (!(strtotime($mulai) < time() AND time() >= strtotime($exp))) {
                          echo "";
                          } else {
                          echo "| <font color='#ff0000'><b>Lowongan sudah tidak Aktif</b></font>";
                          }
                          ?>

                          <?php
                          $lama = 2; // lama data adalah 2 hari
                           
                          // proses penghapusan data
                           
                          $query = "DELETE FROM lowongan
                                    WHERE DATEDIFF(CURDATE(), batas_waktu) > $lama";
                          $hasil = mysql_query($query);
                           
                          ?>
                        <a class="font-weight" title="Perusahaan" href="detail.php?id=<?php echo $d['id_lowongan']; ?>">By :<?php
                        $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM perusahaan WHERE idprusahaan='$d[idprusahaan]'"));
                       echo $naruto1['nama_prusahaan']; ?></a>

                        <ul class="list-inline mt-2 mb-3">
                        <li class="list-inline-item" title="Memiliki Keahlian"><a href="category.html"> <i class="fa fa-building"></i>&nbsp;<?php echo $d['keahlian']; ?></a></li>&nbsp;&nbsp;
                        <li class="list-inline-item" title="Pendaftaran Sampai"><a href=""><i class="fa fa-calendar"></i>&nbsp;
                        <?php echo $d['awal_waktu']; ?>&nbsp;/&nbsp;<?php echo $d['batas_waktu']; ?></a></a></li>
                         <p>
                         <li class="list-inline-item" title="Lokasi Kerja">Lokasi Kerja&nbsp;:&nbsp;<?php echo $d['wilayah']; ?></a></li>&nbsp;&nbsp;
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
<?php } ?>
				<!-- ad listing list  -->

				<!-- pagination -->
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
            </script></p>
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