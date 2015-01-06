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
                                                    <th>ID Bayar</th>
                                                    <th>Nama User</th>
                                                    <th>Nama Wisata</th>
                                                    <th>Paket</th>
                                                    <th>Harga</th>
                                                    <th>Tgl Bayar</th>
                                                    <th>Rekening</th>
                                                    <th>Status</th>
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
                    $tampil=mysql_query("select tbbayar.konfirm_admin, tbbayar.idbayar, tbuser.nama_user, tbpengajuan.nama_wisata, tbpaket.nama_paket, tbpaket.harga, tbbayar.tgl_pembayaran, tbbayar.rek_user FROM tbpaket, tbuser, tbpengajuan, tbbayar WHERE tbbayar.idpengajuan=tbpengajuan.idpengajuan and tbuser.iduser=tbpengajuan.iduser and tbpaket.idpaket=tbpengajuan.idpaket order by tbpengajuan.idpengajuan ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){ ?>

                                                <tr>
                                                    <td><center><?php echo $no ?></center></td>
                                                    <td><?php echo $dt[idbayar]?></td>
                                                    <td><?php echo $dt[nama_user]?></td>
                                                    <td><?php echo $dt[nama_wisata]?></td>
                                                    <td><?php echo $dt[nama_paket]?></td>
                                                    <td>Rp. <?php echo number_format("$dt[harga]") ?></td>
                                                    <td><?php echo $dt[tgl_pembayaran]?></td>
                                                    <td><?php echo $dt[rek_user]?></td>
                                                    <td><?php echo $dt[konfirm_admin] ?></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-default btn-sm btn-grad" data-toggle="tooltip" title="Edit" href="index-admin.php?module=pembayaran-edit&id=<?php echo $dt[idbayar]?>"><i class="fa fa-pencil-square-o"></i></a>
                                                        <a class="btn btn-default btn-sm btn-grad" data-toggle="tooltip" title="Hapus" href="modul/admin/proses.php?module=adm&act=pembayaran-delete&id=<?php echo $dt[idbayar]?>"><i class="fa fa-trash-o"></i></a>
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
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=pembayaran&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=pembayaran&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>

    </div>

    </div>
</div>

