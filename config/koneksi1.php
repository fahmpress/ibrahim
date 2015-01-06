<?php
// definisikan koneksi ke database
$server = "mysql.idhostinger.com";
$username = "u482260257_db";
$password = "123456";
$database = "u482260257_db";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");


