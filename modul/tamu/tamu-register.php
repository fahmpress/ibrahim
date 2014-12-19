<html>
    <body>
        <div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Halaman Registrasi</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
					<h4>Silahkan isi form registrasi dengan benar</h4><br>
						<div class="basic-login">
                                                    <form role="form" method="post" action="modul/tamu/tamu-register-proses.php?module=tamu&act=register" id="block-validate" enctype='multipart/form-data' class='f-r'>
								<div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-user"></i> <b>Username</b></label>
									<input class="form-control" id="required2" name="required2" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="fa fa-unlock-alt"></i> <b>Password</b></label>
									<input class="form-control" id="password2" name="password2" type="password" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="fa fa-unlock-alt"></i> <b>Re-enter Password</b></label>
									<input class="form-control" id="confirm_password2" name="confirm_password2" type="password" placeholder="">
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-credit-card"></i> <b>Nama</b></label>
									<input class="form-control" id="required2" name="nama" type="text" placeholder="">
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-warning"></i> <b>Umur</b></label>
									<input class="form-control" name="umur" id="register-username" type="text" placeholder="">
								</div>
                                                                <div class="form-group">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Gender</b></label>
									<div class="col-sm-9">
                                                                            <select class="form-control" id="prependedInput" name="jk">
											<option></option>
											<option value="Laki-laki">Laki-laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-map-marker"></i> <b>Alamat</b></label>
									<input class="form-control" name="alamat" id="register-username" type="text" placeholder="">
                                                                </div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-envelope"></i> <b>Email</b></label>
									<input class="form-control" name="email" id="register-username" type="text" placeholder="">
                                                                </div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-phone"></i> <b>No Tlp/HP</b></label>
									<input class="form-control" name="nope" id="register-username" type="text" placeholder="">
                                                                </div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-image"></i> <b>Foto</b></label>
									<input name='fupload' type='file' />
                                                                </div>
                                                                <div class="form-group">
									<button type="submit" class="btn pull-right">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
                                    
                                    <div class="col-sm-5 col-md-offset-1">
						<h4>Ketentuan Registrasi</h4><br>
                                                <ul>
                                                <li>Masukan data registrasi dengan benar sesuai dengan kartu identitas (KTP)</li>
                                                <li>Validitas data akun sangat menentukan proses pemeriksaan saat mengajukan Objek Wisata</li>
                                                </ul>
					</div>
					
				</div>
			</div>
		</div>

    </body>
</html>