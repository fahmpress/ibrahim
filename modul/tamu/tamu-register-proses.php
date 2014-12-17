<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";
include "../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

if($module=='tamu' AND $act=='register' ){ 
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	$tll="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
	$tm="$_POST[tm]-$_POST[bm]-$_POST[hm]";
	Uploadfoto($nama_file_unik);
	mysql_query("insert into tbuser set username='$_POST[username]',
										 password='$_POST[password]',
										 nama_user='$_POST[nama]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]',
										 foto='$nama_file_unik'
										 ");
	
	header('location:../../index.php?module=sukses');
	} else {
            mysql_query("insert into tbuser set username='$_POST[username]',
										 password='$_POST[password]',
										 nama_user='$_POST[nama]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]',
										 ");
        header('location:../../index.php?module=sukses');
}
}