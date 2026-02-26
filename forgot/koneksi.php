<?php

$server = "localhost";
$dbuser = "indokosj_ta";
$dbpass = "indokosj_kerja1";
$dbname = "indokosj_kerja";

$x = mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname,$x);
?>
