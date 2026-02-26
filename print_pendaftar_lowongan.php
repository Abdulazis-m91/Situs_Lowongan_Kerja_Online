<?php
Include 'koneksi.php';
session_start();
$share = mysql_query("SELECT * from login where email='$_SESSION[email]' and password='$_SESSION[password]'");
$ada = mysql_fetch_array($share);

$share1 = mysql_query("SELECT * from perusahaan where id_login='$ada[id_login]' ");
$ada1 = mysql_fetch_array($share1);

$t = mysql_query("SELECT * from lowongan ");
$a = mysql_fetch_array($t);
?>
<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 400px;}
   table td {word-wrap:break-word;width: 18%;}
   </style>
</head>
<body >

<h2 style="text-align: center;">Data Pendaftar Lowongan kerja</h2>
<p  align="center">
Seluruh daftar pencari kerja yang sudah melakukan pendaftaran kerja online
<br><!-- <b>
<?php echo  $ada1['nama_prusahaan'];?></b>|Telpon : <b><?php echo  $ada1['No_telpon'];?></b> -->
</p>


<table  border="1" width="100%" style="text-align: center;" align="center">
<tr>
                <th>Nama</th>
                <th>Lowongan</th> 
                <th>Pendidikan</th>
                <th>Keahlian</th>
                <th>Status</th>
</tr>
<?php

            $no=1;
            $cari=  mysql_query("SELECT * FROM daftar WHERE idprusahaan='$ada1[idprusahaan]'")or die ("data kosong");
            while ($tampil =mysql_fetch_array($cari)){
            ?>
            
            <tr>
                <!-- <td><?php echo $no++ ?></td>
 -->
  
                 <td>
                    <?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM pencari_kerja WHERE id_pencari_kerja='$tampil[id_pencari_kerja]'"));
                 echo $naruto['nama']; ?></td>

                 <td>
                  <?php
                  $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM lowongan WHERE id_lowongan='$tampil[id_lowongan]'"));
                 echo $naruto1['judul_lowongan']; ?></td>
                 
                 <td><?php
                  $naruto=mysql_fetch_array(mysql_query("SELECT * FROM pencari_kerja WHERE id_pencari_kerja='$tampil[id_pencari_kerja]'"));
                 echo $naruto['pendidikan']; ?></td>

                  <td><?php
                  $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM lowongan WHERE id_lowongan='$tampil[id_lowongan]'"));
                 echo $naruto1['keahlian']; ?></td>

                  <td> <?php
                  $naruto1=mysql_fetch_array(mysql_query("SELECT * FROM daftar WHERE id_daftar='$tampil[id_daftar]'"));
                 echo $naruto1['posisi_status']; ?></td>
            </tr>
            <?php
            }
            ?>

</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Pendaftar Kerja.pdf', 'D');
?>