<?php
include "../../config/koneksi.php";
include "../../config/fungsi_thumb.php";

$module = $_GET['module'];
$act    = $_GET['act'];

if($module=='adt' AND $act=='pengajuan-proses' ){ 
  mysql_query("update tbpengajuan set keterangan='$_POST[keterangan]' where idpengajuan='$_GET[id]'");
	header('location:../../index-admin.php?module=adt');
	} else {
}


if($module=='adt' AND $act=='edit-akun' ){ 
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	$tll="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
	$tm="$_POST[tm]-$_POST[bm]-$_POST[hm]";
	Uploadfoto($nama_file_unik);
  	mysql_query("update tbuser set password='$_POST[password]',
										 nama_user='$_POST[namauser]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]',
										 foto='$nama_file_unik' where iduser='$_GET[iduser]'");
	header('location:../../index-admin.php?module=edit-akun');
	} else {
		mysql_query("update tbuser set password='$_POST[password]',
										 nama_user='$_POST[namauser]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]' where iduser='$_GET[iduser]'");
	header('location:../../index-admin.php?module=edit-akun');

}
}