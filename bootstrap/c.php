<?php
Include 'koneksi1.php';



			$kueri = mysql_query(" SELECT * FROM uplod1");
            while ($baris=mysql_fetch_array($kueri))
            {
          
             echo "<img src=image/".$baris['gambar'].">";
             echo"<br><br><hr>";
            }

?>