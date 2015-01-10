<?php
include "../../config/koneksi.php";
session_start();
//periksa apakah user telah login atau memiliki session
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
include "index.php?module=login";
} else {} 
$nama=$_SESSION['nama'];
$iduser=$_SESSION['id'];
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Pengajuan Objek Wisata</h1>
					</div>
				</div>
			</div>
		</div>
        

        <div class="section">
	    	<div class="container">
				<div class="row">
                                    
                                    <div class="col-md-7">
                                        <h3><i class="fa fa-shopping-cart fa-lg"></i> Daftar Paket Pengajuan Objek Wisata</h3>    
	        			<div class="pricing-wrapper">
                                                        <div class="pricing-plan">
								<h2 class="pricing-plan-title">Beginner</h2>
								<div class="pricing-plan-price"><span>Rp.</span> 150K</div>
								<!-- Pricing Plan Features -->
								<ul class="pricing-plan-features">
									<li><strong>Iklan online</strong> 1 Bln</li>
									<li><strong>Galery</strong> 6 Foto</li>
									<li><strong>Support</strong> 3 Hari kerja</li>
								</ul>
							</div>
                                                        <div class="pricing-plan">
                                                                <div class="ribbon-wrapper">
									<div class="price-ribbon ribbon-red">HOT</div>
								</div>
								<h2 class="pricing-plan-title">Reguler</h2>
								<div class="pricing-plan-price"><span>Rp.</span> 600K</div>
								<!-- Pricing Plan Features -->
								<ul class="pricing-plan-features">
									<li><strong>Iklan online</strong> 6 Bln</li>
									<li><strong>Galery</strong> 6 Foto</li>
									<li><strong>Support</strong> 3 Hari kerja</li>
								</ul>
							</div>
                                                        <div class="pricing-plan">
								<h2 class="pricing-plan-title">Gold</h2>
								<div class="pricing-plan-price"><span>Rp.</span> 950K</div>
								<!-- Pricing Plan Features -->
								<ul class="pricing-plan-features">
									<li><strong>Iklan online</strong> 1 Thn</li>
									<li><strong>Galery</strong> 6 Foto</li>
									<li><strong>Support</strong> 3 Hari kerja</li>
								</ul>
							</div>
                                                        <div class="pricing-plan pricing-plan-promote">
                                                                <div class="ribbon-wrapper">
								<div class="price-ribbon ribbon-green">New</div>
								</div>
								<h2 class="pricing-plan-title">Premium</h2>
								<div class="pricing-plan-price"><span>Rp.</span> 2500K</div>
								<ul class="pricing-plan-features">
                                                                        <li><strong>Online</strong> 3 Thn</li>
									<li><strong>Galery</strong> 6 Foto</li>
                                                                        <li><strong>Support</strong> 24 Jam</li>
								</ul>
						    </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
					<div class="col-sm-5 ">
					<h4>Silahkan isi form registrasi dengan benar</h4><br>
						<div class="basic-login">
                                                    <form role="form" method="post" action="modul/user/pengajuan-proses.php?module=user&act=pengajuan" enctype='multipart/form-data' class='f-r'>
								
                                                                <div class="form-group">
		        				 	<label for="register-username"><b>Nama User</b></label>
                                                                <input class="form-control" <?php echo "value='$nama'" ?> type="text" placeholder="" disabled="true">
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"> <b>Nama Wisata</b></label>
									<input class="form-control" name="n_wisata" type="text" placeholder="">
								</div>
                                                                <div class="form-group">
                                                                    <label for="Name"><b>Kategori</b></label>
                                                                            <select class="form-control" id="prependedInput" name="kategori">
											<option>Pilih kategori..</option>
											<?php
                                                                                $kategori=mysql_query("select * from tbkategori");
                                                                                while($hasil=mysql_fetch_array($kategori)){
                                                                                echo "<option value='$hasil[idkategori]'>$hasil[nama_kategori]</option>";
                                                                                }
                                                                                ?>

										</select>
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><b>Alamat</b></label>
									<input class="form-control" name="alamat" type="text" placeholder="">
                                                                </div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><b>Deskripsi</b></label>
									<input class="form-control" name="desc" type="text" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Name"><b>Paket</b></label>
                                                                            <select class="form-control" name="paket">
											<option>Pilih paket..</option>
											<?php
                                                                                $paket=mysql_query("select * from tbpaket");
                                                                                while($hasil=mysql_fetch_array($paket)){
                                                                                echo "<option value='$hasil[idpaket]'>$hasil[nama_paket]</option>";
                                                                                }
                                                                                ?>
										</select>
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-username"><b>Foto</b></label>
									<input name='fupload' type='file' />
                                                                </div>
                                                                <div class="form-group">
									<button type="submit" class="btn pull-right">Ajukan</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
                                    
                            </div>
                </div>
        </div>
