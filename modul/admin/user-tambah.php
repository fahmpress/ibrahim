<div id="content">
    <div class="inner">
    	<div class="row">
            <div class="col-lg-12">
                <h2> Data User </h2>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Tambah User</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" method="post" action="modul/admin/proses.php?module=adm&act=tambah-user" id="block-validate" enctype='multipart/form-data' class='f-r'>
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
                                                                    <label for="Name"><i class="fa fa-sitemap"></i> <b>Level</b></label>
                                    <select class="form-control" id="prependedInput" name="level">
                                            <option></option>
                                            <option value="1">Admin</option>
                                            <option value="2">Auditor / Validator</option>
                                            <option value="3">User</option>
                                        </select>
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
                                                                    <label for="Name"><i class="fa fa-female"></i> <b>Gender</b></label>
                                    <select class="form-control" id="prependedInput" name="jk">
                                            <option></option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
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
                                    <button type="submit" class="btn btn-info"><i class="fa fa-plus-circle fa-lg"></i> Tambah User</button>
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
</div>

