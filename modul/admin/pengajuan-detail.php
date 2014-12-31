<?php include "../../config/koneksi.php"; 
$q=mysql_query("SELECT * FROM tbuser, tbpengajuan, tbpaket, tbkategori WHERE tbpengajuan.idkategori=tbkategori.idkategori and tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.idpengajuan='$_GET[idpengajuan]'");
$data=mysql_fetch_array($q);
?>

<div id="content">
    <div class="inner">
    	<div class="row">
            <div class="col-lg-12">
                <h2> Detail Pengajuan </h2>
            </div>
        </div>

<div class="row">
        <div class="panel-body col-lg-8">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>ID User</th>
                        <td><?php echo $data[iduser]?></td>
                        <th>Alamat</th>
                        <td><?php echo $data[alamat]?></td>
                    </tr>
                    <tr>
                        <th>Nama User</th>
                        <td><?php echo $data[nama_user]?></td>
                        <th>Email / No. HP</th>
                        <td><?php echo $data[email]?> / <?php echo $data[nope]?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

        <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Informasi Pengajuan</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form role="form" role="form" method="post" action="modul/admin/proses.php?module=adm&act=pengajuan-proses">
                                        <div class="form-group">
                                            <label>ID Pengajuan</label>
                                            <input value="<?php echo $data[idpengajuan]?>" name="id" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Objek Wisata</label>
                                            <input value="<?php echo $data[nama_wisata]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="ket" class="form-control" type="text" readonly><?php echo $data[deskripsi]?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <input value="<?php echo $data[nama_kategori]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="ket" class="form-control" type="text" readonly><?php echo $data[alamat_wisata]?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <img src="img_objekwisata/medium_<?php echo $data[foto]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input value="<?php echo $data[nama_paket]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Pengajuan</label>
                                            <input value="<?php echo $data[waktu_pengajuan]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <!--<button type="submit" class="btn btn-gradien btn-info"><i class="fa fa-check fa-lg"></i> Approve Pengajuan</button>-->
            			             </form>
                                </div>
                            </div>
        			    </div>
    			    </div>
			    </div>
		</div>
    </div>
</div>
