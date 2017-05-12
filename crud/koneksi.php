<?php
$host = "localhost"; //nama host
$user = "root"; //username phpMyAdmin
$pass = ""; //password phpmy Admin
$name = "web"; //nama database

$koneksi = mysql_connect($host, $user, $pass) or die ("Koneksi ke databse gagal!");
mysql_select_db($name, $koneksi) or die ("Tidak ada database yang dipilih");
?>