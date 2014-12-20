<?php include "../../config/koneksi.php"; ?>
<?php 
$ambil=mysql_query("select tbpengajuan.deskripsi, tbpengajuan.foto, tbpengajuan.nama_wisata, tbpengajuan.nama_wisata, tbpengajuan.alamat_wisata, tbuser.nama_user from tbpengajuan, tbuser where tbuser.iduser=tbpengajuan.iduser");
$data=mysql_fetch_array($ambil);
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Daftar Pengajuan <?php echo $data[nama_user] ?></h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Image Column -->
					<div class="col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img_objekwisata/<?php $data[foto] ?>" alt="Project Name"></a>
							</div>
						</div>
					</div>
					<!-- End Image Column -->
					<!-- Project Info Column -->
					<div class="portfolio-item-description col-sm-6">
						<h3>Project Description</h3>
						<p>
							Mauris auctor blandit neque eu cursus. Nunc vel commodo dui, sed tempus mi. Fusce eleifend, orci ut elementum porta, mauris leo porta purus.
						</p>
						<p>
							Etiam aliquet tempor est nec pharetra. Etiam interdum tincidunt orci vitae elementum. Donec sollicitudin quis risus sit amet lobortis. Fusce sed tincidunt nisl.
						</p>
						<ul class="no-list-style">
							<li><b>Client:</b> Some Client LTD</li>
							<li><b>Date:</b> 01, September 2012 - 23, February 2013</li>
							<li><b>Technologies:</b> HTML5, CSS3, jQuery, PHP, MySQL</li>
							<li class="portfolio-visit-btn"><a href="#" class="btn">Visit Website</a></li>
						</ul>
					</div>
					<!-- End Project Info Column -->
				</div>
                </div>
        </div>