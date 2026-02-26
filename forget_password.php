<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="bootstrap/js/bootstrap.min.js">
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
<link href="css/blog-home.css" rel="stylesheet">

// <?php
// Include 'koneksi.php';

// $s = mysql_query("SELECT * from logoin where email='$a[email]'");
// $a = mysql_fetch_array($s);
// //======================================
// ?> 

    <div class="container" style="margin-top:40px">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            
                        <strong>Daftar Member baru</strong>
          </div><br><br />
          <div class="panel-body">
                        <form class="form-signin" method="POST" action="kirim.php">
              <fieldset>
                <div class="row">
                  <div class="center-block">
                    <img class="profile-img"
                      src="img/n.png?sz=120" alt="">
                  </div>
                </div><br><br />
                
                                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                  
                    

            <input type="email" placeholder="Email *" class="form-control" id="email" name="usermail"  type="text" autocomplete="off" required>
                      </div>
                    </div>
                    
                                       
                                               
                                        <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Kirim Sekarang">
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          
                    <div class="panel-footer ">
            Sudah punya akun? <a href="form_login.php" onClick="">Masuk disini</a>
          </div>
                </div>
      </div>
    </div>
  </div> -->

  <!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Buker_Sembada | Cari Lolongan Kerja<</title>
  
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
        <img src="img/Untitled-5.png" alt="logo" ></a>
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
          </ul>
        </div>
      </div>
    </nav>
<br><br><br>

<!-- page title -->
<!--================================
=            Page Title            =
=================================-->
<!-- contact us start-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-content p-4">
                   <h2>Reset Password</h2>
                    <h1 class="pt-3">Lupa Password</h1>
                    <p class="pt-3 pb-5">
                      Lupa password, kamu akan di kirimkan random password hanya untuk masuk saja. <br>
                      Setelah masuk perbarui Password anda<br>
                    <br>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                   <form class="form-signin" method="POST" action="kirim.php">
                        <fieldset class="p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-10 py-2">
                                        <input type="email" placeholder="Email *" class="form-control" id="email" name="email"  type="text" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-grounp">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>

                        </fieldset>
                    </form>
                     <hr>
                     <p class="pt pb-5">
                     Sudah Mendaftar? <a href="form_login.php" onClick="">Klik disini..</p>
                     
                     <!--<li class="list-inline-item">-->
                     <!--   <a class="edit" data-toggle="tooltip" data-placement="top" title="Kirim Email" href="forget.php?email=<?php echo $a['email'];?>">-->
                     <!--   <i class="far fa-envelope"></i>-->
                     <!--   </a>-->
                     <!-- </i>-->
            </div>
        </div>
    </div>
</section>
<!-- contact us end -->

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