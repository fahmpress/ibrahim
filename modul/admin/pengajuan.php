<?php include "../../config/koneksi.php"; 
$q1=mysql_query("SELECT * FROM tbuser, tbpengajuan, tbpaket WHERE tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.status='pending'");
?>
<div id="content">
    <div class="inner">
    	<div class="row">
                    <div class="col-lg-12">
                        <h2> Daftar Pengajuan </h2>
                    </div>
                </div>
           		<hr>
    <div class="container">     		
        <div class="row">

        	<div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                                    		<thead>
                                        		<tr>
                                            		<th><center>No</center></th>
                                            		<th>ID Pengajuan</th>
                                            		<th>Nama User</th>
                                            		<th>Nama Wisata</th>
                                            		<th>Kategori</th>
                                            		<th>Foto</th>
                                            		<th>Paket</th>
                                            		<th>Status</th>
                                            		<th>Auditor</th>
                                            		<th></th>
                                        		</tr>
                                    		</thead>
                                    		<tbody>
                                    		

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
                    while($dt=mysql_fetch_array($tampil)){ ?>

                                				<tr>
                                            		<td><center><?php echo $no ?></center></td>
                                            		<td><?php echo $dt[idpengajuan]?></td>
                                            		<td><?php echo $dt[nama_user]?></td>
                                            		<td><?php echo $dt[nama_wisata]?></td>
                                            		<td><?php echo $dt[nama_kategori]?></td>
                                            		<td>
                                            			<a data-toggle="modal" href="#buttonedModal">
                                            				<img src="img_objekwisata/small_<?php echo $dt[foto] ?>" alt="Project Name">
                                            			</a>
                                            		</td>
                                            		<td>Rp. <?php echo number_format("$data2[harga]") ?></td>
                                            		<td class="center" style="text-align: center;">
                                            			<a href="index-admin.php?module=konfirmasi-detail&idbayar=<?php echo $data2[idbayar]?>" class="btn btn-default btn-xs btn-grad"><i class="fa fa-folder-open"></i> Detail</a>
                                            		</td>
                                            	</tr>

                                            	<!--modal-->
                                            	<div class="col-lg-12">
                        <div class="modal fade" id="buttonedModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H1">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img_objekwisata/<?php echo $dt[foto] ?>" alt="Project Name"><hr>
                                            <p class="text-center">a</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div> 
<?php
$query = "SELECT COUNT(*) AS jumData from tbpengajuan, tbuser where tbuser.iduser=tbpengajuan.iduser" ;
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
// menampilkan link previous
if ($noPage > 1) echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='&lt;&lt;Prev' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=pengajuan&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=pengajuan&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>
        </div>
    </div>

    

	</div>
</div>