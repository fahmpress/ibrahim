<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";
include "../../config/fungsi_thumb.php";

$module = $_GET['module'];
$act    = $_GET['act'];
$waktu=date("Y-m-d | h:i:sa");
$idbayar= uniqid();

if($module=='adm' AND $act=='pengajuan-proses' ){ 
  mysql_query("update tbpengajuan set status='Approve', keterangan='Validate' where idpengajuan='$_GET[id]'");
	header('location:../../index-admin.php?module=adm');
	} else {
}

if($module=='adm' AND $act=='pembayaran-proses' ){ 
  mysql_query("update tbpengajuan set status='Aktif', waktu_penerimaan='$waktu' where idpengajuan='$_POST[id]'");
  mysql_query("update tbbayar set konfirm_admin='Lunas' where idbayar='$_POST[idbayar]'");
	header('location:../../index-admin.php?module=adm');
	} else {
}

if($module=='adm' AND $act=='pengajuan-edit' ){ 
  mysql_query("update tbpengajuan set status='$_POST[status]' where idpengajuan='$_POST[id]'");
	header('location:../../index-admin.php?module=pengajuan');
	} else {
}

if($module=='adm' AND $act=='pengajuan-delete' ){ 
  mysql_query("DELETE FROM tbpengajuan where idpengajuan='$_POST[idpengajuan]'");
	header('location:../../index-admin.php?module=pengajuan');
	} else {
}

if($module=='adm' AND $act=='pembayaran-edit' ){ 
  mysql_query("update tbbayar set konfirm_admin='$_POST[konfirm]', idpaket='$_POST[paket]' where idbayar='$_POST[id]'");
	header('location:../../index-admin.php?module=adm');
	} else {
}

if($module=='adm' AND $act=='pembayaran-delete' ){ 
  mysql_query("DELETE FROM tbbayar where idbayar='$_GET[id]'");
	header('location:../../index-admin.php?module=pembayaran');
	} else {
}

if($module=='adm' AND $act=='tambah-user' ){ 
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	$tll="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
	$tm="$_POST[tm]-$_POST[bm]-$_POST[hm]";
	Uploadfoto($nama_file_unik);
	mysql_query("insert into tbuser set username='$_POST[required2]',
										 password='$_POST[password2]',
										 nama_user='$_POST[nama]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]',
										 level='$_POST[level]',
										 foto='$nama_file_unik'
										 ");
	
	header('location:../../index-admin.php?module=data-user');
	} else {
            mysql_query("insert into tbuser set username='$_POST[required2]',
										 password='$_POST[password2]',
										 nama_user='$_POST[nama]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]'
										 level='$_POST[level]',
										 ");
        header('location:../../index-admin.php?module=data-user');
}
}

if($module=='adm' AND $act=='user-delete' ){ 
  mysql_query("DELETE FROM tbuser where iduser='$_GET[id]'");
	header('location:../../index-admin.php?module=data-user');
	} else {
}

if($module=='adm' AND $act=='user-edit' ){ 
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file;
	if (!empty($lokasi_file)){  
	$tll="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
	$tm="$_POST[tm]-$_POST[bm]-$_POST[hm]";
	Uploadfoto($nama_file_unik);
  	mysql_query("update tbuser set iduser='$_POST[id]', username='$_POST[username]',
										 password='$_POST[password]',
										 nama_user='$_POST[namauser]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]',
										 level='$_POST[level]',
										 foto='$nama_file_unik' where iduser='$_GET[iduser]'");
	header('location:../../index-admin.php?module=data-user');
	} else {
		mysql_query("update tbuser set iduser='$_POST[id]', username='$_POST[username]',
										 password='$_POST[password]',
										 nama_user='$_POST[namauser]',
										 umur='$_POST[umur]',
										 jk='$_POST[jk]',
										 alamat='$_POST[alamat]',
										 email='$_POST[email]',
										 nope='$_POST[nope]',
										 level='$_POST[level]' where iduser='$_GET[iduser]'");
	header('location:../../index-admin.php?module=data-user');

}
}

if($module=='adm' AND $act=='edit-kategori' ){ 
  	mysql_query("update tbkategori set idkategori='$_POST[id]', nama_kategori='$_POST[nama]' where idkategori='$_GET[idktg]'");
	header('location:../../index-admin.php?module=kategori');
	} else {

}

if($module=='adm' AND $act=='delete-kategori' ){ 
  	mysql_query("delete from tbkategori where idkategori='$_GET[idktg]'");
	header('location:../../index-admin.php?module=kategori');
	} else {

}

if($module=='adm' AND $act=='add-kategori' ){ 
  	mysql_query("insert into tbkategori set idkategori='$_POST[id]', nama_kategori='$_POST[nama]'");
	header('location:../../index-admin.php?module=kategori');
	} else {

}

if($module=='adm' AND $act=='edit-paket' ){ 
  	mysql_query("update tbpaket set idpaket='$_POST[id]', nama_paket='$_POST[nama]', harga='$_POST[harga]', tayang='$_POST[tayang]', galery='$_POST[galery]' where idpaket='$_GET[idpkt]'");
	header('location:../../index-admin.php?module=kontrak');
	} else {

}

if($module=='adm' AND $act=='delete-paket' ){ 
  	mysql_query("delete from tbpaket where idpaket='$_GET[idpkt]'");
	header('location:../../index-admin.php?module=kontrak');
	} else {

}

if($module=='adm' AND $act=='add-paket' ){ 
  	mysql_query("insert into tbpaket set idpaket='$_POST[id]', nama_paket='$_POST[nama]', harga='$_POST[harga]', tayang='$_POST[tayang]', galery='$_POST[galery]'");
	header('location:../../index-admin.php?module=kontrak');
	} else {

}