<?php
include "../../config/koneksi.php";


  	mysql_query("delete from tbfasilitas where idfasilitas='$_GET[id]'");
	header('location:../../index.php?module=galery');