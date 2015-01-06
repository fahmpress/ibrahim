
        <div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Konfirmasi Pembayaran</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5 col-sm-offset-3">
						<div class="basic-login">
							<form role="form" role="form" method="post" action="modul/user/tagihan-proses.php?module=user&act=konfirmasi" id="block-validate">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>ID Pengajuan</b></label>
									<input class="form-control" name="idpengajuan" value="<?php echo $_GET[id];?>" type="text" placeholder="" readonly>
								</div>
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Nama Wisata</b></label>
									<input class="form-control" name="nama_wisata" value="<?php echo $_GET[nm];?>" type="text" placeholder="" readonly>
								</div>
								<div class="form-group">
                                    <label>Telah dibayar pada Tanggal</label>
									<input type="date" id="date2" name="date2" class="form-control" />
                                </div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Dari rekenening</b></label>
									<input class="form-control" id="required2" name="required2" type="text" placeholder="Bank BCD No. Rek. 12345678 a/n Xyz">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Konfirmasi</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					
									
				</div>
			</div>
		</div>

