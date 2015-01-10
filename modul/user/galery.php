<?php include "../../config/koneksi.php"; ?>
<?php 
$nama=$_SESSION['nama'];
$iduser=$_SESSION['id'];
$ambil=mysql_query("select * from tbpengajuan, tbfasilitas where tbpengajuan.idpengajuan=tbfasilitas.idpengajuan");
?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Galery (Fasilitas Wisata)</h1>
					</div>
				</div>
			</div>
		</div>

       <div class="section">
	    	<div class="container">
	    		<h2>Daftar Galery</h2>
	    		<div class="row">
	    			<div class="col-md-9">
	    				<table class="jobs-list">
	    					<tr>
	    						<th>No</th>
	    						<th>Nama Wisata</th>
	    						<th>Foto</th>
	    						<th>Nama Fasilitas</th>
	    						<th>Deskripsi</th>
	    						<th></th>
	    					</tr>
	    					<?php
	    					$jml="";
	    					$no=1;
	    					while($data=mysql_fetch_array($ambil)) {
	    					?>
	    					<tr>
	    						<td class="job-location">
	    							<?php echo $no ?>
	    						</td>
	    						<td class="job-location">
	    							<?php echo $data[nama_wisata] ?>
	    						</td>
	    						<td class="job-location">
	    							<img src="img_objekwisata/small_<?php echo $data[foto] ?>" alt="">
	    						</td>
	    						<td class="job-location">
	    							<?php echo $data[fasilitas] ?>
	    						</td>
	    						<td class="job-location">
	    							<?php echo $data[ket_fasilitas] ?>
	    						</td>
	    						<td class="job-location">
	    						<a href="index.php?module=add-galery&idpengajuan=<?php echo $data[idpengajuan] ?>" class="btn btn-info btn-grad" title="Tambah galery"><i class="fa fa-edit"></i></a>
	    							<a href="modul/user/galery-proses.php?id=<?php echo $data[idfasilitas]?>" class="btn btn-info btn-grad" title="Delete"><i class="fa fa-trash-o"></i></a>
	    						</td>
	    					</tr>
	    					<?php $no++; }?> 
	    				</table>
	    			</div>

	    			

                    
				</div>
                </div>
        </div>
