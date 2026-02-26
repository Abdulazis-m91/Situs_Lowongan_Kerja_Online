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

$t = mysql_query("SELECT * from pencari_kerja ");
$a = mysql_fetch_array($t);

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

                             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <a class="nav-link">Hi!&nbsp;Admin</a>
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
<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
         
          <!-- Dashboard Links -->
         <div class="card border-secondary mb-3" style="max-width: 20rem;">
  <div class="card-header">INFORMASI</div>
  <div class="card-body">
     <h4 class="card-title">Setelah melakukan Pendaftaran</h4>
    <p class="card-text">Pencari kerja yang telah melakukan pendaftaran akan di data dan hanya pencari kerja yang berhak menghapus / membatalkan lamarannya</a></p>
    <hr>
    <h4 class="card-title">Iklan Lowongan</h4>
    <p class="card-text">Yang berhak menghapus dan mengubah lowongan adalah perusahaan, jika perusahaan tidak menghapus lowongan yang tidak aktif lebih dari 1minggu maka admin berhak menghapusnya.</p>
    <hr>
     <h4 class="card-title">Pencari Kerja</h4>
    <p class="card-text">Admin berhak menghapus akun pencari kerja jika tidak sesuai / mencurigakan.</p>
  </div>
</div>

          <!-- delete-account modal -->
                        <!-- delete account popup modal start-->
                <!-- Modal -->
               
                <!-- delete account popup modal end-->
          <!-- delete-account modal -->

        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">Pendaftar Seluruh Akun Pencari Kerja</h3>
            <table class="table table-bordered">
                   <tr>
                    <!-- <a class="nav-link login-button text-center" href="print_pendaftar_lowongan.php">Cetak Daftar </a> -->
                    <p>
                <!-- <th>No</th> -->
                <th>Nama</th>
                <th>Kelamin</th> 
                <th>Pendidikan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

            
                <?php
            $no=1;
            $cari=  mysql_query("SELECT * FROM pencari_kerja")or die ("data kosong");
            while ($tampil =mysql_fetch_array($cari)){
            ?>
            
            <tr>
                <!-- <td><?php echo $no++ ?></td>
 -->
  
                 <td>
                  <a href="info_pk.php?id=<?php echo $tampil['id_pencari_kerja']; ?>" title="Liat Profil Pendaftar" >
                    <?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM pencari_kerja WHERE id_pencari_kerja='$tampil[id_pencari_kerja]'"));
                 echo $naruto['nama']; ?></td>

                 <td> 
                 <?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM pencari_kerja WHERE id_pencari_kerja='$tampil[id_pencari_kerja]'"));
                 echo $naruto['jenis_kelamin']; ?></td>
                 
                 <td><?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM pencari_kerja WHERE id_pencari_kerja='$tampil[id_pencari_kerja]'"));
                 echo $naruto['pendidikan']; ?></td>

            <td><?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM pencari_kerja WHERE id_pencari_kerja='$tampil[id_pencari_kerja]'"));
                 echo $naruto['email']; ?></td>
              
               <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="Lihat" class="view" href="info_pk.php?id=<?php echo $tampil['id_pencari_kerja']; ?>" title="Liat Profil Pendaftar" >
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Hapus" href="hapus_pk.php?id=<?php echo $tampil['id_pencari_kerja'];?>
                    "onclick="return confirm('Anda yakin ingin menghapus ini..?')">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    
                    </ul>
                  </div>
                </td>
            </tr>
            <?php
            }
            ?>
                
              
               
              </table>
          
                

        </div>

        <!-- pagination -->
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
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
<?php
} ?>