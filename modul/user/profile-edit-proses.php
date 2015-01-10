<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";
include "../../config/fungsi_thumb.php";

$module = $_GET['module'];
$act    = $_GET['act'];
$iduser=$_SESSION['id'];

if($module=='user' AND $act=='edit' ){ 
  	mysql_query("update tbuser set alamat='$_POST[required2]', email='$_POST[email2]', nope='$_POST[digits]' where iduser='$_GET[iduser]'");
	header('location:../../index.php?module=profile&echo=berhasil');
	} 

	else if($module=='user' AND $act=='editpass' ){ 
		mysql_query("update tbuser set password='$_POST[password2]' where iduser='$_GET[iduser]'");
		header('location:../../index.php?module=passwd&echo=berhasil');
	}
	 else {
}