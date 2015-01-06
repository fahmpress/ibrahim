<?php include "../../config/koneksi.php"; 
$q=mysql_query("select tbpengajuan.deskripsi, tbpengajuan.rating, tbkategori.nama_kategori, tbpengajuan.nama_wisata, tbpengajuan.foto, tbpengajuan.Deskripsi, tbpengajuan.alamat_wisata, tbuser.nama_user
				from tbpengajuan, tbuser, tbkategori 
				where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.idkategori=tbkategori.idkategori and tbpengajuan.idpengajuan='$_GET[idpengajuan]'");
$data=mysql_fetch_array($q);
$q2=mysql_query("select * from tbfasilitas where idpengajuan='$_GET[idpengajuan]'");
?>



<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo $data[nama_wisata] ?></h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img src="img_objekwisata/<?php echo $data[foto] ?>" alt="Item Name">
	    				</div>
	    			</div>
	    			<div class="col-sm-6 product-details">
	    				<p><?php echo $data[deskripsi] ?></p>
	    				<p><strong><i class="fa fa-map-marker"></i> Alamat : </strong><?php echo $data[alamat_wisata] ?></p>
						<p><strong><i class="fa fa-tag"></i> Kategori : </strong><?php echo $data[nama_kategori] ?></p>
						<p><strong><i class="fa fa-user"></i> Di posting oleh : </strong><?php echo $data[nama_user] ?></p>
						<p><strong><i class="fa fa-star"></i> Rating : </strong><?php echo $data[rating] ?> <a href="#" class="btn btn-primary btn-line">Suka <i class="fa fa-thumbs-o-up"></i></a></p>
					</div>
	    			<!-- End Product Summary & Options -->
	    			
	    <div class="section">
			<div class="container">
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<h2>Galery dan Fasilitas</h2>
	    		<?php
        		while($data2=mysql_fetch_array($q2)){ ?>
				<div class="row service-wrapper-row">
        			<div class="col-sm-4">
        				<div class="service-image">
        					<img src="img_objekwisata/<?php echo $data2[foto] ?>" alt="Service Name">
        				</div>
        			</div>
        			<div class="col-sm-8">
    					<h3><?php echo $data2[fasilitas] ?></h3>
    					<p>
    						<?php echo $data2[ket_fasilitas] ?> 
    					</p>
    				</div>
				</div>
				<?php } ?>
			</div>
	    </div>
	    			<!-- End Full Description & Specification -->
	    		</div>
			</div>
		</div>