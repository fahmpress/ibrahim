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

$iduser=$_SESSION['id'];
$waktu=date("Y-m-d | h:i:sa");

$module=$_GET['module'];
$act=$_GET['act'];

if($module=='user' AND $act=='pengajuan' ){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	Uploadfoto($nama_file_unik);
	mysql_query("insert into tbpengajuan set iduser='$iduser', nama_wisata='$_POST[n_wisata]', idkategori='$_POST[kategori]', alamat_wisata='$_POST[alamat]', deskripsi='$_POST[desc]', idpaket='$_POST[paket]', waktu_pengajuan='$waktu', foto='$nama_file_unik'");
	
	header('location:../../index.php?module=sukses');
	} else {
            mysql_query("insert into tbpengajuan set iduser='$iduser', nama_wisata='$_POST[n_wisata]', idkategori='$_POST[kategori]', alamat_wisata='$_POST[alamat]', deskripsi='$_POST[desc]', idpaket='$_POST[paket]', waktu_pengajuan='$waktu'");
        header('location:../../index.php?module=sukses');
}
}