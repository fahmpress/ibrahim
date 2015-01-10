<?php include "../../config/koneksi.php"; 
$iduser=$_SESSION['id'];
$namauser=$_SESSION['nama'];
$q=mysql_query("select * from tbuser where iduser='$iduser'");
$dt=mysql_fetch_array($q);
$echo=$_GET['echo'];
?>

		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Ganti Password</h1>
					</div>
				</div>
			</div>
		</div>

		<?php 
        if($echo=='berhasil'){ ?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Password berhasil diganti.
        </div>
        <?php } ?>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5 col-sm-offset-3">
						<div class="basic-login">
							<form role="form" role="form" method="post" action="modul/user/profile-edit-proses.php?module=user&act=editpass&iduser=<?php echo $dt[iduser] ?>" id="block-validate">
								<div class="form-group">
									<input class="form-control" id="password2" name="password2" type="password" placeholder="Password baru">
								</div>
								<div class="form-group">
									<input class="form-control" id="confirm_password2" name="confirm_password2" type="password" placeholder="Ulangi Password baru">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Ganti</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> 	