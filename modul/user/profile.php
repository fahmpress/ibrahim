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
						<h1>Profile</h1>
					</div>
				</div>
			</div>
		</div>

		<?php 
        if($echo=='berhasil'){ ?>
        <div class="col-md-7">
        <div class="alert alert-success">
        Profile berhasil diperbaharui.
        </div>
    	</div>
        <?php } ?>

<div class="section">
	<div class="container">
		<div class="row">
	    	<div class="col-sm-6">
	    				<div class="tabbable">
	    					<!-- Tabs -->
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Profile</a></li>
								<li><a href="#tab2" data-toggle="tab">Perbaharui</a></li>
							</ul>
							<!-- Tab Content (Full Description) -->
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">
									<div class="author-photo">
										<img src="img_user/small_<?php echo $dt[foto] ?>" alt="Author 1">
									</div><br />
										<p><strong>ID : </strong><?php echo $dt[iduser] ?></p>
										<p><strong>Nama : </strong><?php echo $dt[nama_user] ?></p>
										<p><strong>Umur : </strong><?php echo $dt[umur] ?></p>
										<p><strong>Gender : </strong><?php echo $dt[jk] ?></p>
										<p><strong>Alamat : </strong><?php echo $dt[alamat] ?></p>
										<p><strong>Email : </strong><?php echo $dt[email] ?></p>
										<p><strong>No. HP : </strong><?php echo $dt[nope] ?></p>
								</div>
								<!-- Tab Content (Specification) -->
								<div class="tab-pane" id="tab2">
									<form role="form" method="post" action="modul/user/profile-edit-proses.php?module=user&act=edit&iduser=<?php echo $dt[iduser] ?>" enctype='multipart/form-data' class='f-r' id="block-validate">

									<div class="fileupload fileupload-new" data-provides="fileupload">
                                	<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="img_user/small_<?php echo $dt[foto] ?>" alt="" /></div>
                                	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                	<div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Ganti foto</span><span class="fileupload-exists">Ganti</span><input name='fupload' type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                	</div>
                            		</div>

                            		<div class="form-group">
		        				 		<label for="register-username"><b>ID User</b></label>
										<input value="<?php echo $dt[iduser] ?>" class="form-control" type="text" placeholder="misal: Kolam Renang" readonly>
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Nama</b></label>
										<input value="<?php echo $dt[nama_user] ?>" class="form-control" type="text" placeholder="misal: Kolam Renang" readonly>
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Umur</b></label>
										<input value="<?php echo $dt[umur] ?>" class="form-control" type="text" placeholder="misal: Kolam Renang" readonly>
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Gender</b></label>
										<input value="<?php echo $dt[jk] ?>" class="form-control" type="text" placeholder="misal: Kolam Renang" readonly>
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Alamat</b></label>
										<input value="<?php echo $dt[alamat] ?>" class="form-control" type="text" id="required2" name="required2">
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Email</b></label>
										<input value="<?php echo $dt[email] ?>" class="form-control" type="email" id="email2" name="email2">
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>No. HP</b></label>
										<input value="<?php echo $dt[nope] ?>" class="form-control" type="text" id="digits" name="digits">
                                    </div>

                                    <div class="form-group">
										<button type="submit" class="btn pull-left">Perbaharui</button>
										<div class="clearfix"></div>
									</div>
								</form>	
							
								</div>
							</div>
						</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>