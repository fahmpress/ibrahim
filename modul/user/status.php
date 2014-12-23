<?php include "../../config/koneksi.php"; 
$iduser=$_SESSION['id'];
$q=mysql_query("select * from tbpengajuan, tbuser where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.iduser='$iduser'");
$dt=mysql_fetch_array($q);
?>

<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Daftar Pengajuan <?php echo $dt[nama_user] ?></h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">

	    		<?php 
				$tampil=mysql_query("select tbpaket.nama_paket, tbpengajuan.waktu_pengajuan, tbpengajuan.waktu_penerimaan, tbpengajuan.status, tbkategori.nama_kategori, tbpengajuan.deskripsi, tbpengajuan.foto, tbpengajuan.nama_wisata, tbpengajuan.nama_wisata, tbpengajuan.alamat_wisata, tbuser.nama_user 
										from tbpaket, tbkategori, tbpengajuan, tbuser 
										where tbpaket.idpaket=tbpengajuan.idpaket and tbkategori.idkategori=tbpengajuan.idkategori and tbuser.iduser=tbpengajuan.iduser 
										and tbpengajuan.iduser='$iduser'");
				$no=1;
                while($data=mysql_fetch_array($tampil)){ ?>
				
				<div class="row service-wrapper-row">
        			<div class="col-sm-4">
        				<div class="service-image">
								<a href="#"><img src="img_objekwisata/<?php echo $data[foto] ?>" alt="Project Name"></a>
							</div>
					</div>
					<div class="col-sm-8">
						<h3><?php echo $data[nama_wisata] ?></h3>
						<ul class="no-list-style">
                        	<?php 
                        	if($data['status']=="Pending") {$color="label label-danger";}
                        		else if($data[status]=="Approve") {$color="label label-warning";}
                        			else if($data[status]=="Pembayaran") {$color="label label-info";}
                        				else {$color="label label-success";}
                        	?>
							<li><b>Status : </b><span class="<?php echo $color ?>"><?php echo $data[status] ?></span></li>
							<li><b>Paket : </b> <?php echo $data[nama_paket] ?></li>
							<li><b>Waktu Pengajuan : </b><?php echo $data[waktu_pengajuan]?></li>
                            <li><b>Waktu Penerimaan : </b><?php echo $data[waktu_penerimaan]?></li>
                            <?php 
                        	if($data['status']=="Approve") {
                        	?>
							<li><a href="index.php?module=tagihan" class="btn">Lihat tagihan</a></li>
							<?php 
							} else if($data['status']=="Pembayaran" || $data['status']=="Aktif") { ?>
							<li><a href="#" class="btn">Lihat invoice</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<?php $no++; } ?>
			</div>
		</div>