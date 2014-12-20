<?php include "../../config/koneksi.php"; ?>
<?php 
$ambil=mysql_query("select tbpaket.nama_paket, tbpengajuan.waktu_pengajuan, tbpengajuan.waktu_penerimaan, tbpengajuan.status, tbkategori.nama_kategori, tbpengajuan.deskripsi, tbpengajuan.foto, tbpengajuan.nama_wisata, tbpengajuan.nama_wisata, tbpengajuan.alamat_wisata, tbuser.nama_user from tbpaket, tbkategori, tbpengajuan, tbuser where tbpaket.idpaket=tbpengajuan.idpaket and tbkategori.idkategori=tbpengajuan.idkategori and tbuser.iduser=tbpengajuan.iduser");
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
								<a href="#"><img src="img_objekwisata/<?php echo $data[foto] ?>" alt="Project Name"></a>
							</div>
						</div>
					</div>
					<!-- End Image Column -->
					<!-- Project Info Column -->
					<div class="portfolio-item-description col-sm-6">
						<h3>Informasi Objek Wisata</h3>
						<ul class="no-list-style">
							<li><b>Judul Wisata:</b> <?php echo $data[nama_wisata] ?></li>
							<li><b>Kategori:</b> <?php echo $data[nama_kategori] ?></li>
							<li><b>Deskripsi:</b> <?php echo $data[deskripsi] ?></li>
                                                        <li><b>Alamat:</b> <?php echo $data[alamat_wisata] ?></li>
						</ul>
                                                <h3>Informasi Penerimaan</h3>
                                                <ul class="no-list-style">
							<li><b>Status:</b> <?php echo $data[status] ?></li>
							<li><b>Paket:</b> <?php echo $data[nama_paket] ?></li>
							<li><b>Waktu Pengajuan:</b> <?php echo $data[waktu_pengajuan] ?></li>
                                                        <li><b>Waktu Penerimaan:</b> <?php echo $data[waktu_penerimaan]?></li>
							<li class="portfolio-visit-btn"><a href="#" class="btn">Lihat status pembayaran</a></li>
						</ul>
					</div>
					<!-- End Project Info Column -->
				</div>
                </div>
        </div>