<?php
session_start();
//periksa apakah user telah login atau memiliki session
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
include "index.php?module=login";
} else {} 
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
								<h2 class="pricing-plan-title">Trial</h2>
								<div class="pricing-plan-price">FREE</div>
								<!-- Pricing Plan Features -->
								<ul class="pricing-plan-features">
									<li><strong>Iklan online</strong> 1 Bln</li>
									<li><strong>Galery</strong> 2 Foto</li>
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
									<li><strong>Galery</strong> 3 Foto</li>
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
                                    
                                    <div class="col-sm-5 col-sm-offset-0">
                                        <h3><i class="fa fa-file-text"></i> Form Pengajuan</h3><br>
	        			<div class="contact-form-wrapper">
		        			<form class="form-horizontal" role="form" action="test.php">
		        				 <div class="form-group">
		        				 	<label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>
		        				 	<div class="col-sm-9">
										<input class="form-control" id="Name" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Judul Wisata</b></label>
									<div class="col-sm-9">
                                                                                <input class="form-control" id="contact-email" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Kategori</b></label>
									<div class="col-sm-9">
                                                                            <select class="form-control" id="prependedInput">
											<option>Pilih Kategori...</option>
											<option>Kuliner</option>
											<option>Situs Sejarah</option>
											<option>Bahari</option>
										</select>
									</div>
								</div>
                                                                <div class="form-group">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Alamat</b></label>
									<div class="col-sm-9">
                                                                            <input class="form-control" id="contact-email" type="text" placeholder="">
									</div>
								</div>
                                                                <div class="form-">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Foto</b></label>
									<div class="col-sm-9">
                                                                            <input type="file" placeholder="Foto">
                                                                        </div><br><br>
								</div>
								<div class="form-group">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Profile</b></label>
									<div class="col-sm-9">
										<textarea class="form-control" rows="5" id="contact-message"></textarea>
									</div>
								</div>
                                                                <div class="form-group">
                                                                    <label for="Name" class="col-sm-3 control-label"><b>Paket Bayar</b></label>
									<div class="col-sm-9">
                                                                            <select class="form-control" id="prependedInput">
											<option>Pilih paket...</option>
											<option>Paket 6 bln</option>
											<option>Paket 1 thn</option>
											<option>Paket 3 thn</option>
										</select>
									</div>
                                                                </div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn pull-right">Send</button>
									</div>
								</div>
		        			</form>
		        		</div>
                                    </div>
                            </div>
                </div>
        </div>
