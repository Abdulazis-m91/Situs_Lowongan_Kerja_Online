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

?> 


<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buker_Sembada | Cari Wolongan Kerja<</title>
  
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
              
           <!--  <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lamaran.php">Lamaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prsu.php">Profil perusahaan</a>
            </li> -->

               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item active">
              <a class="nav-link">Hi!&nbsp;<? echo "$ada[nama_pang]";?></a>
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
          <!-- <div class="widget user"> -->
            <!-- User Image -->
               <!-- <script type="text/javascript">

                    function PreviewImage() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                    oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                      };
                      };

                </script>
            <div> -->
              <!-- <img id="uploadPreview" style="width: 200px; height: 250px;" /><br><br>
            </div> -->
            <!-- User Name -->
           
            
          <!-- </div> -->

          <!-- Dashboard Links -->
          
            <ul>
             <div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Penting</h4></div>
            <div class="card-body">
              <h4 class="card-title">Email</h4>
              <p class="card-text">Gunakan Email Asli atau email aktif untuk pemberitahuan prihal lowongan kerja.
              dan informasi penerimaan kerja dilakukan melalui email.</p><hr>
              <h4 class="card-title">Nomor handphone / phonsel</h4>
              <p class="card-text">Gunakan Nomor yang aktif. karena untuk melengkapi data diri anda.</p>
            </div></div>
          
        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
        <!-- Edit Profile Welcome Text -->
        <div class="widget welcome-message">
          <h2>Lengkapi Informasi Data Diri Anda</h2>
          <p>Lengkapi sesuai dengan data diri anda</p>
        </div>
        <!-- Edit Personal Info -->
  
     <form class="form-horizontal" method="POST" action="simpan_pk.php"   enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" name="id_login" value="<? echo "$ada[id_login]";?>"><br>
          <div class="col-lg-8">
          <input type="hidden" class="form-control" name="nama" value="<? echo "$ada[nama_lengkap]";?>">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-lg-8">
            <input type="hidden" class="form-control" name="nama_pangilan" value="<? echo "$ada[nama_pang]";?>">
          </div>
        </div>
        
        <div class="form-group">
          <h6 class="col-lg-3 control-label">Tanggal Lahir</h6>
          <div class="col-lg-8">
             <input class="form-control" type="date" name="tanggal_lahir">
          </div>
        </div>
        

        <div class="form-group">
          <h6 class="col-lg-3 control-label">Usia</h6>
          <div class="col-lg-8">

            <input type="text" class="form-control" name="usia" placeholder="<? echo "$diff";?>" autocomplete="off" required>
          </div>
        </div>
        
         <div class="form-group">
          <h6 class="col-lg-3 control-label">Jenis Kelamin</h6>
          <div class="col-lg-8">
                      <select name="jenis_kelamin" class="form-control" >
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
                      </select></div></div>

         <div class="form-group">
          <div class="col-lg-8">
            <input type="hidden" class="form-control" name="email" value="<? echo "$ada[email]";?>">
          </div>
        </div>

         <div class="form-group">
          <h6 class="col-lg-3 control-label">Alamat</h6>
          <div class="col-lg-8">
              <textarea type="text" class="form-control" name="alamat" placeholder="Alamat" autocomplete="off" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <h6 class="col-lg-3 control-label">Nomor Handphone</h6>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="hp" placeholder="Nomor Handpone" autocomplete="off" required>
          </div>
        </div>

        <div class="form-group">
          <h6 class="col-lg-3 control-label">Pendidikan Terakhir</h6>
          <div class="col-lg-8">
            <select name="pendidikan" class="form-control">
                      <option value="SMP/SLTA">SMP/SLTA</option>
                      <option value="SMK/SMA">SMA/SMK</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
            </select>
          </div>
        </div>

         <div class="form-group">
          <h6 class="col-lg control-label">Agama</h6>
          <div class="col-lg-8">
              <select name="agama" class="form-control">
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Kong Hu Cu">Kong Hu Cu</option>
              </select>
          </div>
        </div>

             <div class="form-group">
          <h6 class="col-lg control-label">Status</h6>
          <div class="col-lg-8">
              <select name="status" class="form-control">
                      <option value="Lajang">Lajang</option>
                      <option value="Menikah">Menikah</option>
              </select>
          </div>
        </div>


         <div class="form-group">
          <h6 class="col-lg-3 control-label">Pengalaman Kerja</h6>
          <div class="col-lg-8">
              <textarea type="text" class="form-control" name="pengalaman_kerja" placeholder="pengalaman" autocomplete="off" required></textarea> 
          </div>
        </div>

          <div class="form-group">
          <h6 class="col-lg-3 control-label">Riwayat Penyakit</h6>
          <div class="col-lg-8">
              <textarea type="text" class="form-control" name="riwayat_penyakit" placeholder="riwayat" autocomplete="off" required></textarea>
          </div>
        </div>
        <!--  -->
       <!-- <div class="card-footer text-muted">
        <div class="text-center">
         Gambar<br>
         Gunakan gambar/foto profil formal anda<br><br>
        <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
        <br><br>
        </div>
      </div> -->
      <!--  -->

      <!-- <div class="form-group">
        <label class="col-lg-3 control-label">Uplode Foto Profil anda</label>
          <div class="col-lg-8">
             <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
               <small id="fileHelp" class="form-text text-muted"</small>
          </div>
        </div> -->
        <!--  -->
        <!--  -->
    
<!--  -->
    <div class="form-group">
    <h6 class="col-lg-10 control-label">Uplode Berkas CV & Ijazah (.RAR/Zip)</h6>
     <div class="col-lg-8">
      <div class="custom-file">
        <input class="form-control" type="file" name="file">
      </div>
    </div>
  </div>
  <div class="col-lg-8"><p class="text-danger">
  *Gabungkan file CV dan Ijazah kedalam bentuk RAR/Zip untuk mempermudah perusahaan dalam melakukan seleksi / melakukan cek berkas anda.</p></div>
  <hr>
  <br>
<!--  -->
<!--   <div class="form-group">
    <label class="col-lg-10 control-label">Uplode Foto Profil (Foto Formal)</label>
     <div class="col-lg-8">
      <div class="custom-file">
        <input id="uploadImage" type="file" name="image" class="custom-file-input" onchange="PreviewImage();" />
        <label class="custom-file-label" for="inputGroupFile02" >Gunakan Foto Formal</label>
      </div>
    </div>
  </div> -->

    <div class="form-group">
    <h6 class="col-lg-10 control-label">Uplode Foto Profil (Foto Formal)</h6>
     <div class="col-lg-8">
      <div class="custom-file">
         <input id="uploadImage" class="form-control" type="file" name="image" onchange="PreviewImage();" />
      </div>
    </div>
  </div>
            <br>
                <script type="text/javascript">

                    function PreviewImage() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                    oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                      };
                      };

                </script>
            <div class="col-lg-8">
              <!-- <img src="images/user/<? echo "$na[gambar]";?>" alt="foto" class=""> -->
              <img id="uploadPreview" style="width: 200px; height: 250px;" /><br><br>
            </div>
<!-- <div class="form-group">
      <label for="exampleInputFile">Ungah Foto Profil</label><br>
       <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
      <small id="uploadImage" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div> -->
<!-- 
       <label class="col-lg-9 control-label">Perikasa kembali informasi profil anda</label>
        <hr> -->
<!---->      
   <hr>
        <div class="form-group">
          <div class="col-md-8">
            <input type="submit" class="btn btn-primary" name="simpan" value="SIMPAN">
            <span></span>
            <input class="btn btn-primary" value="Cancel" type="reset">
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