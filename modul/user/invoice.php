<?php include "../../config/koneksi.php"; 
$iduser=$_SESSION['id'];
$namauser=$_SESSION['nama'];
$q=mysql_query("SELECT tbbayar.idbayar, tbbayar.tgl_pembayaran, tbbayar.rek_user, tbbayar.konfirm_admin, tbpengajuan.nama_wisata, tbpengajuan.idpengajuan, tbpaket.nama_paket, tbpaket.harga, tbuser.nama_user
from tbbayar, tbpengajuan, tbpaket, tbuser
where tbbayar.idpengajuan=tbpengajuan.idpengajuan and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.idpaket=tbpaket.idpaket
and tbpengajuan.idpengajuan='$_GET[idpengajuan]'");
$data=mysql_fetch_array($q);
?>

		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Bukti Pembayaran</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-8">
	    					<ul class="no-list-style">
	    						<li><b>Invoice : </b><?php echo $data[idbayar] ?></li>
	    						<li><b>Nama Wisata : </b><?php echo $data[nama_wisata] ?></li>
	    						<li><b>Nama User : </b><?php echo $namauser ?></li>
	    						<li><b>Nama Paket : </b><?php echo $data[nama_paket] ?></li>
	    						<li><b>Tanggal Pembayaran : </b><?php echo $data[tgl_pembayaran] ?></li>
	    						<li><b>Dari Rekening : </b><?php echo $data[rek_user] ?></li>
	    						<li><b>Total Bayar : </b>Rp. <?php echo number_format("$data[harga]") ?></li>
	    						<li><b>Status : </b><?php echo $data[konfirm_admin] ?></li>
	    					</ul>
	    			</div>
	    		</div>
	    	</div>
	    </div>