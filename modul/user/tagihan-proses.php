<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";
include "../../config/fungsi_thumb.php";

$module = $_GET['module'];
$act    = $_GET['act'];
$iduser=$_SESSION['id'];
$idbayar= uniqid();

if($module=='user' AND $act=='konfirmasi' ){ 
  mysql_query("insert into tbbayar set idbayar='$idbayar', idpengajuan='$_POST[idpengajuan]', tgl_pembayaran='$_POST[date2]', rek_user='$_POST[required2]'");
  mysql_query("update tbpengajuan set status='Pembayaran' where idpengajuan='$_POST[idpengajuan]'");
	header('location:../../index.php?module=konfirm');
	} else {
}