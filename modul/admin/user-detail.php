<?php include "../../config/koneksi.php"; 
$iduser=$_GET['id'];
$namauser=$_SESSION['nama'];
$q=mysql_query("select * from tbuser where iduser='$iduser'");
$dt=mysql_fetch_array($q);
$echo=$_GET['echo'];
?>

<div id="content">
    <div class="inner">
    	<div class="row">
            <div class="col-lg-12">
                <h2> Detail User </h2>
            </div>
        </div>

<div class="section">
	<div class="container">
		<div class="row">
	    	<div class="col-sm-6">
	    				
									<div class="author-photo">
										<img src="img_user/medium_<?php echo $dt[foto] ?>" alt="Author 1">
									</div><br />
										<p><strong>ID : </strong><?php echo $dt[iduser] ?></p>
										<p><strong>Nama : </strong><?php echo $dt[nama_user] ?></p>
										<p><strong>Umur : </strong><?php echo $dt[umur] ?></p>
										<p><strong>Gender : </strong><?php echo $dt[jk] ?></p>
										<p><strong>Alamat : </strong><?php echo $dt[alamat] ?></p>
										<p><strong>Email : </strong><?php echo $dt[email] ?></p>
										<p><strong>No. HP : </strong><?php echo $dt[nope] ?></p>
								</div>
								</div>
							</div>
						</div>