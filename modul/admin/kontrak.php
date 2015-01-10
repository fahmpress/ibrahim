<?php include "../../config/koneksi.php"; ?>
<div id="content">
    <div class="inner">
        <div class="row">
                    <div class="col-lg-12">
                        <h2> Kontrak </h2>
                    </div>
                </div>
                <hr>
    <div class="container">             
        <div class="row">
            <div class="col-lg-7">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Daftar Paket</h4>
                        </div>
                        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover"> 
                                            <thead>
                                                <tr>
                                                    <th>ID Paket</th>
                                                    <th>Nama</th>
                                                    <th>Harga</th>
                                                    <th>Tayang</th>
                                                    <th>Galery</th>
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
                                                    <a href="#formModal<?php echo $dt[idpaket]?>" class="btn btn-default btn-sm btn-grad" data-toggle="modal" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="modul/admin/proses.php?module=adm&act=delete-paket&idpkt=<?php echo $dt[idpaket]?>" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
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
        </div></div></div>

<div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Tambah Paket</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="modul/admin/proses.php?module=adm&act=add-paket" id="block-validate" enctype='multipart/form-data' class='f-r'>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-anchor"></i> <b>ID Paket</b></label>
                                    <input class="form-control" name="id" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-align-right"></i> <b>Nama Paket</b></label>
                                    <input class="form-control" name="nama" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-money"></i> <b>Harga</b></label>
                                    <input class="form-control" name="harga" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-film"></i> <b>Tayang</b></label>
                                    <input class="form-control" name="tayang" type="text" required>
                                </div>required
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-photo"></i> <b>Galery</b></label>
                                    <input class="form-control" name="galery" type="text" required>
                                </div>
                                <button type="submit" class="btn btn-info"><i class="fa fa-plus-circle fa-lg"></i> Tambah Paket</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    </div>
</div>

<?php $tampil=mysql_query("select * from tbpaket order by idpaket ASC LIMIT $offset, $dataPerPage");
while($dt=mysql_fetch_array($tampil)){ ?>
<div class="col-lg-12">
<div class="modal fade" id="formModal<?php echo $dt[idpaket]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Edit Paket</h4>
                                        </div>
                                    <form method="post" action="modul/admin/proses.php?module=adm&act=edit-paket&idpkt=<?php echo $dt[idpaket] ?>">
                                <div class="modal-body">
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-anchor"></i> <b>ID Paket</b></label>
                                    <input value="<?php echo $dt[idpaket]?>" class="form-control" name="id" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-align-right"></i> <b>Nama Paket</b></label>
                                    <input value="<?php echo $dt[nama_paket]?>" class="form-control" name="nama" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-money"></i> <b>Harga</b></label>
                                    <input value="<?php echo $dt[harga]?>" class="form-control" name="harga" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-film"></i> <b>Tayang</b></label>
                                    <input value="<?php echo $dt[tayang]?>" class="form-control" name="tayang" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-photo"></i> <b>Galery</b></label>
                                    <input value="<?php echo $dt[galery]?>" class="form-control" name="galery" type="text" required>
                                </div>
                                </div>
                                <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Perbaharui</button>
                                        </div>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>

<script>
    $("#commentForm").validate();
</script>