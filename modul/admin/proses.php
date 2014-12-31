<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";
include "../../config/fungsi_thumb.php";

$module = $_GET['module'];
$act    = $_GET['act'];
$iduser=$_SESSION['id'];
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