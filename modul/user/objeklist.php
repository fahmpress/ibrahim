<?php include "../../config/koneksi.php"; ?>
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Daftar Objek Wisata Sukabumi</h1>
					</div>
				</div>
			</div>
		</div>

<div class="section">
	        <div class="container">
                                
                    <?php 
                    $dataPerPage = 5;
            if(isset($_GET['page']))
                    {
$noPage = $_GET['page'];
}
else $noPage = 1;
// perhitungan offset
$offset = ($noPage - 1) * $dataPerPage;
                    $tampil=mysql_query("select tbpengajuan.deskripsi, tbpengajuan.foto, tbpengajuan.nama_wisata, tbpengajuan.nama_wisata, tbpengajuan.alamat_wisata, tbuser.nama_user from tbpengajuan, tbuser where tbuser.iduser=tbpengajuan.iduser order by idpengajuan ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){
                        echo    "<div class='row service-wrapper-row'>
        			<div class='col-sm-4'>
        				<div class='service-image'>
        					<img src='img_objekwisata/$dt[foto]' alt='Service Name'>
        				</div>
        			</div>
        			<div class='col-sm-8'>
    					<h3>$dt[nama_wisata]</h3>
    					<p>
    					$dt[deskripsi]	
                                        </p>
                                        <p>
    					<strong>Alamat : </strong>$dt[alamat_wisata]	
                                        </p>
                                        <p>
    					<strong>Di Postkan oleh : </strong>$dt[nama_user]	
                                        </p>
                                        <a href='index.php?module=detail' class='btn'>Lihat selengkapnya</a>
    				</div>
                                </div>";
                                $no++;
                                }
                                $query = "SELECT COUNT(*) AS jumData from tbpengajuan, tbuser where tbuser.iduser=tbpengajuan.iduser" ;
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
// menampilkan link previous
if ($noPage > 1) echo "<input type=button value='&lt;&lt;Prev' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=objeklist&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type=button value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=objeklist&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>
	    </div>
</div>