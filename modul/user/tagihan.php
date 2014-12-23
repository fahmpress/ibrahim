<?php include "../../config/koneksi.php"; ?>
<?php 
$nama=$_SESSION['nama'];
$iduser=$_SESSION['id'];
$ambil=mysql_query("select tbpengajuan.status, tbpengajuan.idpengajuan, tbuser.nama_user, tbuser.iduser, tbpengajuan.nama_wisata, tbpaket.nama_paket, tbpaket.tayang, tbpaket.harga
        from tbuser, tbpengajuan, tbpaket 
        where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.idpaket=tbpaket.idpaket and 
        tbuser.iduser='$iduser' and (tbpengajuan.status='Approve' or tbpengajuan.status='Pending')");
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Tagihan dan Konfirmasi Pembayaran</h1>
					</div>
				</div>
			</div>
		</div>

       <div class="section">
	    	<div class="container">
	    		<h2>Semua Tagihan</h2>
	    		<div class="row">
	    			<div class="col-md-8">
	    				<table class="jobs-list">
	    					<tr>
	    						<th>ID</th>
	    						<th>Nama Wisata</th>
	    						<th>Paket</th>
	    						<th>Tayang</th>
	    						<th>Bayar</th>
	    						<th></th>
	    					</tr>
	    					<?php
	    					$jml="";
	    					while($data=mysql_fetch_array($ambil)) {
	    					?>
	    					<tr>
	    						<td class="job-location">
	    							<?php echo $data[idpengajuan] ?>
	    						</td>
	    						<td class="job-location">
	    							<?php echo $data[nama_wisata] ?>
	    						</td>
	    						<td class="job-location">
	    							<?php echo $data[nama_paket] ?>
	    						</td>
	    						<td class="job-location">
	    							<?php echo $data[tayang] ?> Bulan
	    						</td>
	    						<td class="job-location">
	    							Rp. <?php echo number_format("$data[harga]") ?>
	    						</td>
	    						<td class="job-location">
	    							<?php 
	    							if($data['status']=="Approve") {
	    							?>
	    							<div class="job-country"><a href="index.php?module=konfirmasi&id=<?php echo $data[idpengajuan]?>&nm=<?php echo $data[nama_wisata]?>"><span class="label label-warning">Konfirmasi</span></a></div>
	    							<?php } 
	    							else { ?>
	    							<div class="job-country"><span class="label label-danger">Pending</span></div>	
	    							<?php } ?>

	    						</td>
	    					</tr>
	    					<?php $jml+=$data[harga]; }?> 
	    					<tr>
	    						<td></td>
	    						<td></td>
	    						<td></td>
	    						<td><strong>TOTAL</strong></td>
	    						<td class="job-location"><strong>
	    							Rp. <?php echo number_format("$jml") ?>
	    						</strong></td>
	    					</tr>
	    				</table>
	    			</div>

	    			<div class="col-md-4 col-sm-6">
	    				<div class="join-us-promo">
	    					<!-- Quote -->
							<div class="join-us-bubble">
								<blockquote>
									<p class="quote">
			                            "Untuk pembayaran paket silahkan kirim ke Rek. 10001 a/n PT. Wisata SMI."
	                        		</p>
	                        		<cite class="author-info">
	                        			- Santi,<br>Admin Web
	                        		</cite>
	                        	</blockquote>
	                        	<div class="sprite arrow-speech-bubble"></div>
	                        </div>
	                        <!-- Team Member Photo -->
	                        <div class="author-photo">
								<img src="img/user2.jpg" alt="Name Surname">
							</div>
	    				</div>
	    			</div>

                    
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

