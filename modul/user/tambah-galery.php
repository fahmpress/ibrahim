<?php
include "../../config/koneksi.php";
session_start();
//periksa apakah user telah login atau memiliki session
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
include "index.php?module=login";
} else {} 
$q=mysql_query("select count(*) as jum from tbfasilitas where idpengajuan='$_GET[idpengajuan]?>'");
$dt=mysql_fetch_array($q);
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Tambah Galery Foto</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
	    		<?php if($dt[jum]==6) { ?>
	    		<div class="alert alert-success alert-dismissable">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    	Galery anda telah limit. 
                    	</div>
	    		<?php } else { ?>
				<div class="row">
                    <div class="col-md-7">
                    <h4><i class="fa fa-photo"></i> Tambah foto tentang fasilitas yang tersedia pada objek wisata</h4>    
	        			<div class="pricing-wrapper">
								<form role="form" method="post" action="modul/user/tambah-galery-proses.php?module=user&act=add&idpengajuan=<?php echo $_GET[idpengajuan] ?>" enctype='multipart/form-data' class='f-r' id="block-validate">
									<div class="form-group">
		        				 		<label for="register-username"><b>Nama Fasilitas</b></label>
										<input id="required2" name="required2" class="form-control" type="text" placeholder="misal: Kolam Renang">
                                    </div>
                                    <div class="form-group">
		        				 		<label for="register-username"><b>Keterangan Fasilitas</b></label>
										<textarea name="ket" class="form-control" name="desc" type="text" placeholder="misal: Luas 6x5 meter, air jernih, dll"></textarea>
                                    </div>
									<div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Pilih gambar</span><span class="fileupload-exists">Ganti</span><input name='fupload' type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                </div>
                            </div>
                                    <div class="form-group">
										<button type="submit" class="btn pull-right">Tambah</button>
										<div class="clearfix"></div>
									</div>
								</form>	
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
