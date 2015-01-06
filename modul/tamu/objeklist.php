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
                    $tampil=mysql_query("select tbkategori.nama_kategori, tbpengajuan.idpengajuan, tbpengajuan.deskripsi, tbpengajuan.foto, tbpengajuan.nama_wisata, tbpengajuan.nama_wisata, tbpengajuan.alamat_wisata, tbuser.nama_user 
                        from tbpengajuan, tbuser, tbkategori where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.idkategori=tbkategori.idkategori and 
                        tbpengajuan.status='Aktif' order by idpengajuan ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){
                        echo    
                    "<div class='row service-wrapper-row'>
                    <div class='col-sm-6'>
                    <div class='portfolio-item'>
                        <div class='portfolio-image'>
                            <img src='img_objekwisata/$dt[foto]' alt='Service Name'>
                        </div>
                    </div>
                    </div>
                    <div class='portfolio-item-description col-sm-6'>
                        <h3>$dt[nama_wisata]</h3>
                        <p><strong><i class='fa fa-map-marker'></i> Alamat : </strong>$dt[alamat_wisata]</p>
                        <p><strong><i class='fa fa-tag'></i> Kategori : </strong>$dt[nama_kategori]</p>
                        <p><strong><i class='fa fa-user'></i> Di posting oleh : </strong>$dt[nama_user]</p>
                        <a href='index.php?module=detail&idpengajuan=$dt[idpengajuan]' class='btn'>Lihat selengkapnya</a>
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
if ($noPage > 1) echo "<input type=button class='btn btn-primary btn-grad btn-sm' value='&lt;&lt;Prev' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=objeklist&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type=button class='btn btn-primary btn-grad btn-sm' value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=objeklist&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>
	    </div>
</div>