<html>
    <body>
        <div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Halaman login</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5 col-sm-offset-1">
						<h4>Login</h4><br>
						<div class="basic-login">
							<form role="form" role="form" method="post" action="login-cek.php">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Username</b></label>
									<input name="username" class="form-control" id="login-username" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input name="password" class="form-control" id="login-password" type="password" placeholder="">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Login</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="col-sm-5">
					<h4>Atau register jika belum mempunyai akun</h4><br>
						<div class="basic-login">
                                                    <form role="form" method="post" action="modul/tamu/tamu-register-proses.php?module=tamu&act=register" enctype='multipart/form-data' class='f-r'>
								<div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-user"></i> <b>Username</b></label>
									<input class="form-control" name="username" id="register-username" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="fa fa-unlock-alt"></i> <b>Password</b></label>
									<input class="form-control" name="password" id="register-password" type="password" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="fa fa-unlock-alt"></i> <b>Re-enter Password</b></label>
									<input class="form-control" name="password2" id="register-password2" type="password" placeholder="">
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-credit-card"></i> <b>Nama</b></label>
									<input class="form-control" name="nama" id="register-username" type="text" placeholder="">
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><i class="fa fa-warning"></i> <b>Umur</b></label>
									<input class="form-control" name="umur" id="register-username" type="text" placeholder="">
								</div>
                                                                <div class="form-group">
                                                                    <label for="register-username"><i class="fa fa-male"></i> <b>Gender</b></label><br>
									<label class="radio-inline"><input type="radio" name="jk" id="optionsRadiosInline2" value="Laki-laki">Laki-laki</label>
                                                                        <label class="radio-inline"><input type="radio" name="jk" id="optionsRadiosInline3" value="Perempuan">Perempuan</label>
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
					
				</div>
			</div>
		</div>

    </body>
</html>