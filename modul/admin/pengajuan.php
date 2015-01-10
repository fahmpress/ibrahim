<?php include "../../config/koneksi.php"; ?>
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
                                            		<th>Action</th>
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
                    $tampil=mysql_query("select tbpengajuan.status, tbpengajuan.keterangan, tbpaket.nama_paket, tbkategori.nama_kategori, tbpengajuan.idpengajuan, tbpengajuan.deskripsi, tbpengajuan.foto, tbpengajuan.nama_wisata, tbpengajuan.nama_wisata, tbpengajuan.alamat_wisata, tbuser.nama_user 
                        from tbpaket, tbpengajuan, tbuser, tbkategori where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.idkategori=tbkategori.idkategori and tbpaket.idpaket=tbpengajuan.idpaket 
                        order by idpengajuan ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){ ?>

                                				<tr>
                                            		<td><center><?php echo $no ?></center></td>
                                            		<td><?php echo $dt[idpengajuan]?></td>
                                            		<td><?php echo $dt[nama_user]?></td>
                                            		<td><?php echo $dt[nama_wisata]?></td>
                                            		<td><?php echo $dt[nama_kategori]?></td>
                                            		<td>
                                            			<img src="img_objekwisata/small_<?php echo $dt[foto] ?>" alt="Project Name">
                                            		</td>
                                                    <td><?php echo $dt[nama_paket]?></td>
                                                    <td><?php echo $dt[status]?></td>
                                                    <td><?php echo $dt[keterangan]?></td>
                                            		<td>
                                            			<div class="btn-group">
                                              <button data-toggle="dropdown" class="btn btn-default btn-xs btn-grad dropdown-toggle"><i class="fa fa-gear"></i> <span class="caret"></span></button>
                                              <ul class="dropdown-menu">
                                                <li><a href="index-admin.php?module=pengajuan-detail&idpengajuan=<?php echo $dt[idpengajuan]?>"><i class="fa fa-folder-open"></i> Detail</a></li>
                                                <li><a href="index-admin.php?module=pengajuan-edit&idpengajuan=<?php echo $dt[idpengajuan]?>"><i class="fa fa-pencil-square-o"></i> Edit</a></li>
                                                <li><a href="modul/admin/proses.php?module=adm&act=pengajuan-delete&idpengajuan=<?php echo $dt[idpengajuan]?>"><i class="fa fa-trash-o"></i> Delete</a></li>
                                              </ul>
                                            </div>
                                            		</td>
                                            	</tr>

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

