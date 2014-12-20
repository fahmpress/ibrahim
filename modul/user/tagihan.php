<?php include "../../config/koneksi.php"; ?>
<?php 

$nama=$_SESSION['nama'];
$iduser=$_SESSION['id'];
$ambil=mysql_query("select tbpengajuan.idpengajuan, tbuser.nama_user, tbuser.iduser, tbpengajuan.nama_wisata, tbpaket.nama_paket, tbpaket.tayang, tbpaket.harga
        from tbuser, tbpengajuan, tbpaket 
        where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.idpaket=tbpaket.idpaket and 
        tbuser.iduser='$iduser'");
$data=mysql_fetch_array($ambil);
$idpengajuan=$data[idpengajuan];
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Tagihan dan Konfirmasi Pembayaran <?php echo $data[nama_user] ?></h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
                                    <div class="col-sm-6">
					
                                        <?php 
                                        $ambil2=mysql_query("select * from tbbayar where idpengajuan='$idpengajuan'");
                                        $data2=mysql_fetch_array($ambil2);
                                        $konfirmasi=$data2[konfirm_admin];
                                        if($konfirmasi=='Pending'){ ?>
                                        <h4>Pembayaran anda menunggu konfirmasi Admin</h4><br>
                                        <?php }
                                        if($konfirmasi=='Lunas'){
                                        ?>
                                        <h4>Tidak ada daftar tagihan saat ini (LUNAS)</h4><br>
                                        <?php } 
                                        if($konfirmasi==null ){
                                        ?>
                                            <h4>Konfirmasi pembayaran</h4><br>
						<div class="basic-login">
                                                    <form role="form" method="post" action="modul/user/tagihan-proses.php?module=user&act=konfirmasi" id="block-validate" enctype='multipart/form-data' class='f-r'>
                                                                <div class="form-group">
		        				 	<label for="register-password"><b>ID Pengajuan</b></label>
                                                                        <input class="form-control" id="required2" name="idpengajuan" <?php echo "value='$idpengajuan'" ?>type="text" placeholder="" readOnly="true">
								</div>
                                                                <div class="form-group">
		        				 	<label for="register-password"><b>Tanggal Pembayaran</b></label>
									<input class="form-control" id="required2" name="required2" type="text" placeholder="dd-mm-yyyy">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><b>Rekening User</b></label>
									<input class="form-control" id="password2" name="password2" type="text" placeholder="Bank Abc No. Rek. 12345 a/n Xyz">
								</div>
                                                                <div class="form-group">
									<button type="submit" class="btn pull-right">Konfirmasi</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
                                        <?php } ?>
					</div>
                                    
                                    <div class="portfolio-item-description col-sm-5 col-sm-offset-1">
                                        <h4>Informasi Tagihan</h4><br>
						<ul class="no-list-style">
							<li><b>Nama User:</b> <?php echo $data[nama_user] ?></li>
							<li><b>Nama Objek Wisata:</b> <?php echo $data[nama_wisata] ?></li>
                                                        <li><b>Jenis Paket:</b> <?php echo $data[nama_paket] ?></li>
                                                        <li><b>Lama Tayang Iklan:</b> <?php echo $data[tayang] ?></li>
							<li><b>Harga:</b> <?php echo $data[harga] ?></li>
						</ul>
                                        
                                        <p><i>Pembayaran dilakukan via transfer ke Rekening <strong>0987878 a/n PT. Wisata Sukabumi</strong>, setelah ada konfirmasi dari admin bahwa objek wisata yang diajukan di aprove</i></p>
					</div>
                                   
					<!-- End Project Info Column -->
				</div>
                </div>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

