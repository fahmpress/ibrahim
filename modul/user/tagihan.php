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
	    		<h2>Semua Tagihan</h2>
	    		<div class="row">
	    			<!-- Open Vacancies List -->
	    			<div class="col-md-8">
	    				<table class="jobs-list">
	    					<tr>
	    						<th>Position</th>
	    						<th>Location</th>
	    						<th>Type</th>
	    					</tr>
	    					<tr>
	    						<!-- Position -->
	    						<td class="job-position">
	    							<a href="page-job-details.html">Front End Developer</a> <span class="label label-danger">New</span>
	    						</td>
	    						<!-- Location -->
	    						<td class="job-location">
	    							<div class="job-country">United Kingdom</div>
	    							<div class="job-city">London</div>
	    						</td>
	    						<!-- Job Type -->
	    						<td class="job-type hidden-phone">FULL-TIME</td>
	    					</tr>
	    					<tr>
	    						<td class="job-position">
	    							<a href="page-job-details.html">Back-end Developer</a> <span class="label label-danger">New</span>
	    						</td>
	    						<td class="job-location">
	    							<div class="job-country">United Kingdom</div>
	    							<div class="job-city">Manchester</div>
	    						</td>
	    						<td class="job-type hidden-phone">PART-TIME</td>
	    					</tr>
	    					<tr>
	    						<td class="job-position">
	    							<a href="page-job-details.html">Creative Director</a>
	    						</td>
	    						<td class="job-location">
	    							<div class="job-country">United Kingdom</div>
	    							<div class="job-city">Manchester</div>
	    						</td>
	    						<td class="job-type hidden-phone">PART-TIME</td>
	    					</tr>
	    					<tr>
	    						<td class="job-position">
	    							<a href="page-job-details.html">Interactive Developer</a> <span class="label label-danger">New</span>
	    						</td>
	    						<td class="job-location">
	    							<div class="job-country">United Kingdom</div>
	    							<div class="job-city">Manchester</div>
	    						</td>
	    						<td class="job-type hidden-phone">PART-TIME</td>
	    					</tr>
	    					<tr>
	    						<td class="job-position">
	    							<a href="page-job-details.html">Lead Designer</a>
	    						</td>
	    						<td class="job-location">
	    							<div class="job-country">United Kingdom</div>
	    							<div class="job-city">Manchester</div>
	    						</td>
	    						<td class="job-type hidden-phone">PART-TIME</td>
	    					</tr>
	    					<tr>
	    						<td class="job-position">
	    							<a href="page-job-details.html">Ruby on Rails Developer</a>
	    						</td>
	    						<td class="job-location">
	    							<div class="job-country">United Kingdom</div>
	    							<div class="job-city">Manchester</div>
	    						</td>
	    						<td class="job-type hidden-phone">PART-TIME</td>
	    					</tr>
	    				</table>
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

