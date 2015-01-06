<?php include "../../config/koneksi.php"; ?>
<div id="content">
    <div class="inner">
        <div class="row">
                    <div class="col-lg-12">
                        <h2> Daftar User </h2>
                    </div>
                </div>
                <hr>
    <div class="container">             
        <div class="row">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover"> 
                                            <thead>
                                                <tr>
                                                    <th>ID User</th>
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Level</th>
                                                    <th>
                                                        <a href="index-admin.php?module=tambah-user" class="btn btn-default btn-sm btn-grad btn-block"><i class="fa fa-plus-circle fa-lg"></i> Tambah</a>
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
                    $tampil=mysql_query("select * from tbuser order by iduser ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){ ?>

                                                <tr>
                                                    <td><?php echo $dt[iduser]?></td>
                                                    <td><?php echo $dt[nama_user]?></td>
                                                    <td><?php echo $dt[username]?></td>
                                                    <td><?php echo $dt[password]?></td>
                                                    <td><?php echo $dt[level]?></td>
                                                    <td class="text-center">
                                                    <a href="index-admin.php?module=detail-user&id=<?php echo $dt[iduser]?>" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Detail"><i class="fa fa-folder-open"></i></a>
                                                    <a href="index-admin.php?module=edit-user&id=<?php echo $dt[iduser]?>" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="modul/admin/proses.php?module=adm&act=user-delete&id=<?php echo $dt[iduser]?>" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>

                    <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div> 
<?php
$query = "SELECT COUNT(*) AS jumData from tbuser" ;
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
// menampilkan link previous
if ($noPage > 1) echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='&lt;&lt;Prev' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=data-user&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=data-user&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>
        </div>
    </div>

    </div>
</div>

