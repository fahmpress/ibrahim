<?php
include "config/koneksi.php";

$user = $_POST['required2'];
$pass = $_POST['password2'];

// pastikan username dan password adalah berupa huruf atau angka.
$login=mysql_query("select * from tbuser where username='$user' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION[id]           = $r[iduser];
  $_SESSION[username]     = $r[username];
  $_SESSION[password]     = $r[password];
  $_SESSION[nama]         = $r[nama_user];
  $_SESSION[level]        = $r[level];
  $_SESSION[foto]         = $r[foto];
  
  
  if($_SESSION[level]==1){
	header('location:media.php?module=adm');
  } else if($_SESSION[level]==2){
	header('location:media.php?module=adt');
  } else {
	header('location:login-error.php');
  }
}
else{
  header('location:login-error.php');
}
?>
