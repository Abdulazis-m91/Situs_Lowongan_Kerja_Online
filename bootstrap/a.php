<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/blog-home.css" rel="stylesheet">
<link href="bootstrap/js/bootstrap.min.js">
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
Include 'koneksi1.php';
session_start();
$share = mysql_query("SELECT * from login where username='$_SESSION[username]' and password='$_SESSION[password]'");
$ada = mysql_fetch_array($share);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);

$t = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]'");
$n = mysql_fetch_array($t);
?> 



<!-- Nav  -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand">
           <img src="img/Untitled-5.png" alt="logo"></a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home_prusahaan.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lowongan.php">Lowongan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Pendaftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form_lowongan.php">Buat Lowongan</a>
            </li>
           <!--  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Prusahaan
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="form_lowongan.php">Buat Lowongan</a>
                <a class="dropdown-item" href="portfolio-1-col.html">Perbarui</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Edit Profil</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Pendaftar</a>
                
              </div>
            </li> -->
            
            &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <style>
              .vl {
                  border-left: 1px solid gray;
                  height: 35px;
                  }
          </style>
          <div class="vl"></div> -->
            &nbsp;&nbsp;&nbsp;&nbsp;

             <li class="nav-item">
             <a class="nav-link" href="profil1.php">Hi!&nbsp;<? echo "$n[nama_prusahaan]";?></a>
           </li>
            <li class="nav-item">
              
              <a class="nav-link" href="keluar.php"onclick="return confirm('Apakah anda yakin ingin keluar?')">Keluar</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

<!--  end -->
<div class="container" style="padding-top: 60px;">
  <h2 class="my-2">INFORMASI PRUSAHAAN</h2>
  <hr>
  <div class="row">



<!-- uplode foto column -->
 <script type="text/javascript">

        function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
        };

    </script>


        <form name="visi" method="post" action="b.php" enctype="multipart/form-data">
        Gambar<br>
        <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
        <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
        <br><br>
        <input type="submit" width="120" height="24" name="simpan" value="Submit" >
         <a href="c.php" class="btn btn-primary">tampil</a>
        </form>

    <!-- </div> -->

<!-- end uplode foto column -->



    <!-- simpan form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <!--  -->

     
        
      

       
        
     
        

       
        <!--  <div class="form-group">
          <label class="col-lg-3 control-label"><b>Mulai Pendaftaran</b></label> -->
          <!-- <div class="col-lg-8">
           <input type="text" class="form-control" name="awal_waktu" >
          </div> -->



       

       


      <!--   </div> -->

        <!--  <div class="form-group">
          <label class="col-lg-3 control-label"><b>Sampai</b></label>
          <div class="col-lg-8">
           <input type="text" class="form-control" name="batas_waktu" >
          </div>
        </div> -->

       
        

        

        
         

      

        

<!---->      
   
  
    </div>
  </div>
</div>

<br><br><br>
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>
