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
                <h2> Edit User </h2>
            </div>
        </div>

<div class="section">
	<div class="container">
		<div class="row">
	    	<div class="col-sm-6">
	    				
									<form role="form" method="post" action="modul/admin/proses.php?module=user&act=edit&iduser=<?php echo $dt[iduser] ?>" enctype='multipart/form-data' class='f-r' id="block-validate">

									<div class="fileupload fileupload-new" data-provides="fileupload">
                                	<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="img_user/medium_<?php echo $dt[foto] ?>" alt="" /></div>
                                	<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                	<div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Ganti foto</span><span class="fileupload-exists">Ganti</span><input name='fupload' type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                	</div>
                            		</div>

                            		<div class="form-group">
		        				 		<label for="register-username"><b>ID User</b></label>
										<input value="<?php echo $dt[iduser] ?>" class="form-control" type="text" placeholder="" >
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Nama</b></label>
										<input value="<?php echo $dt[nama_user] ?>" class="form-control" type="text" placeholder="" >
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Umur</b></label>
										<input value="<?php echo $dt[umur] ?>" class="form-control" type="text" placeholder="" >
                                    </div>

                                    <div class="form-group">
		        				 		<label for="register-username"><b>Gender</b></label>
										<input value="<?php echo $dt[jk] ?>" class="form-control" type="text" placeholder="" >
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
		        				 		<label for="register-username"><b>Usernmae</b></label>
										<input value="<?php echo $dt[username] ?>" class="form-control" type="text" id="digits" name="digits">
                                    </div>
                                    <div class="form-group">
		        				 		<label for="register-username"><b>Password</b></label>
										<input value="<?php echo $dt[password] ?>" class="form-control" type="text" id="digits" name="digits">
                                    </div>
                                    <div class="form-group">
		        				 		<label for="register-username"><b>Level</b></label>
										<input value="<?php echo $dt[level] ?>" class="form-control" type="text" id="digits" name="digits">
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