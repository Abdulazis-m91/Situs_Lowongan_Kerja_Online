<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "kerja";

mysql_connect($server, $username, $password) or die("koneksi gagal");

mysql_select_db($database) or die("data tidak dapat di buka");
?>