<?php include "../../config/koneksi.php"; ?>
<div id="content">
    <div class="inner">
        <div class="row">
                    <div class="col-lg-12">
                        <h2> Daftar Paket </h2>
                    </div>
                </div>
                <hr>
    <div class="container">             
        <div class="row">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover"> 
                                            <thead>
                                                <tr>
                                                    <th>ID Paket</th>
                                                    <th>Nama</th>
                                                    <th>Harga</th>
                                                    <th>Tayang</th>
                                                    <th>Galery</th>
                                                    <th>
                                                        <a href="#" class="btn btn-default btn-sm btn-grad btn-block"><i class="fa fa-plus-circle fa-lg"></i> Tambah Paket</a>
                                                    </th>
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
                    $tampil=mysql_query("select * from tbpaket order by idpaket ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){ ?>

                                                <tr>
                                                    <td><?php echo $dt[idpaket]?></td>
                                                    <td><?php echo $dt[nama_paket]?></td>
                                                    <td><?php echo $dt[harga]?></td>
                                                    <td><?php echo $dt[tayang]?></td>
                                                    <td><?php echo $dt[galery]?></td>
                                                    <td class="text-center">
                                                    
                                                    <a href="" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>

                    <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div> 
<?php
$query = "SELECT COUNT(*) AS jumData from tbpaket" ;
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
// menampilkan link previous
if ($noPage > 1) echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='&lt;&lt;Prev' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=konrak&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=kontrak&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>
        </div>
    </div>

    </div>
</div>

