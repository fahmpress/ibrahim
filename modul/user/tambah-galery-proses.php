<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";
include "../../config/fungsi_thumb2.php";

session_start();
//periksa apakah user telah login atau memiliki session
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
include "index.php?module=login";
} else {} 

$module=$_GET['module'];
$act=$_GET['act'];
$idpengajuan=$_GET['idpengajuan'];

if($module=='user' AND $act=='add' ){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['
  name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	Uploadfoto($nama_file_unik);
	mysql_query("insert into tbfasilitas set idpengajuan='$idpengajuan', fasilitas='$_POST[required2]', ket_fasilitas='$_POST[ket]', foto='$nama_file_unik'");
	
	header('location:../../index.php?module=status&echo=berhasil');
	} else {
            mysql_query("insert into tbfasilitas set idpengajuan='$idpengajuan', fasilitas='$_POST[required2]', ket_fasilitas='$_POST[ket]'");
        header('location:../../index.php?module=status&echo=berhasil');
}
}