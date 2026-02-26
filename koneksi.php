<?php

$server = "localhost";
$username = "indokosj_ta";
$password = "indokosj_kerja1";
$database = "indokosj_kerja";

mysql_connect($server, $username, $password) or die("koneksi gagal");

mysql_select_db($database) or die("data tidak dapat di buka");
?>