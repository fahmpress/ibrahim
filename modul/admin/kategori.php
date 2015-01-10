<?php include "../../config/koneksi.php"; ?>
<div id="content">
    <div class="inner">
        <div class="row">
                    <div class="col-lg-12">
                        <h2> Kategori Wisata </h2>
                    </div>
                </div>
                <hr>
    <div class="container">             
        <div class="row">
            <div class="col-lg-7">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Daftar Kategori</h4>
                        </div>
                        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover"> 
                                            <thead>
                                                <tr>
                                                    <th>ID Kategori</th>
                                                    <th>Nama</th>
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
                    $tampil=mysql_query("select * from tbkategori order by idkategori ASC LIMIT $offset, $dataPerPage");
                    $no=1;
                    while($dt=mysql_fetch_array($tampil)){ ?>

                                                <tr>
                                                    <td><?php echo $dt[idkategori]?></td>
                                                    <td><?php echo $dt[nama_kategori]?></td>
                                                    <td class="text-center">
                                                    
                                                    <a href="#formModal<?php echo $dt[idkategori]?>" class="btn btn-default btn-sm btn-grad" data-toggle="modal" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="modul/admin/proses.php?module=adm&act=delete-kategori&idktg=<?php echo $dt[idkategori] ?>" class="btn btn-default btn-sm btn-grad" data-toogle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
<?php $no++; } ?>
                                </tbody>
                            </table>
                        </div> 
<?php
$query = "SELECT COUNT(*) AS jumData from tbkategori" ;
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
// menampilkan link previous
if ($noPage > 1) echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='&lt;&lt;Prev' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=kategori&page=".($noPage-1)."';\">";
// memunculkan nomor halaman dan linknya
for($page = 1; $page <= $jumPage; $page++)
{
if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
{
if (($showPage == 1) && ($page != 2)) echo "...";
if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) echo "...";
if ($page == $noPage) echo " <b>".$page."</b> ";
else echo "<input type='button' class='btn btn-default btn-grad btn-sm' value='".$page."' 
    onclick=\"window.location.href='".$_SERVER['PHP_SELF']."?module=kategori&page=".$page."';\">";
$showPage = $page;
}
}
                    ?>
        </div></div></div>

<div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Tambah Kategori</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="modul/admin/proses.php?module=adm&act=add-kategori" id="block-validate" enctype='multipart/form-data' class='f-r'>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-anchor"></i> <b>ID Kategori</b></label>
                                    <input class="form-control" name="id" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-align-right"></i> <b>Nama Kategori</b></label>
                                    <input class="form-control" name="nama" type="text" required>
                                </div>
                                <button type="submit" class="btn btn-info"><i class="fa fa-plus-circle fa-lg"></i> Tambah Kategori</button>
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
<?php $tampil=mysql_query("select * from tbkategori order by idkategori ASC LIMIT $offset, $dataPerPage");
while($dt=mysql_fetch_array($tampil)){ ?>
<div class="col-lg-12">
<div class="modal fade" id="formModal<?php echo $dt[idkategori]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Edit Kategori</h4>
                                        </div>
                                        <form method="post" action="modul/admin/proses.php?module=adm&act=edit-kategori&idktg=<?php echo $dt[idkategori] ?>">
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="id" value="<?php echo $dt[idkategori]?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input class="form-control" name="nama" value="<?php echo $dt[nama_kategori]?>"/>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Perbaharui</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div></div>
<?php } ?>
<script>
    $("#commentForm").validate();
</script>

