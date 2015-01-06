<?php include "../../config/koneksi.php"; 
$q=mysql_query("select tbuser.iduser, tbuser.alamat, tbuser.email, tbbayar.konfirm_admin, tbbayar.idbayar, tbuser.nama_user, tbpengajuan.nama_wisata, tbpaket.nama_paket, tbpaket.harga, tbbayar.tgl_pembayaran, tbbayar.rek_user FROM tbpaket, tbuser, tbpengajuan, tbbayar WHERE tbbayar.idpengajuan=tbpengajuan.idpengajuan and tbuser.iduser=tbpengajuan.iduser and tbpaket.idpaket=tbpengajuan.idpaket and tbbayar.idbayar='$_GET[id]'");
$data=mysql_fetch_array($q);
?>

<div id="content">
    <div class="inner">
    	<div class="row">
            <div class="col-lg-12">
                <h2> Edit Pembayaran </h2>
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
                                    <form role="form" role="form" method="post" action="modul/admin/proses.php?module=adm&act=pembayaran-edit">
                                        <div class="form-group">
                                            <label>ID Bayar</label>
                                            <input value="<?php echo $data[idbayar]?>" name="id" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Objek Wisata</label>
                                            <input value="<?php echo $data[nama_wisata]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input value="Rp. <?php echo number_format("$data[harga]") ?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Bayar</label>
                                            <input value="<?php echo $data[tgl_pembayaran]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                        <label for="Name"><b>Nama Paket</b></label>
                                        <select class="form-control" id="prependedInput" name="paket">
                                        <option><?php echo $data[nama_paket]?></option>
                                        <?php
                                        $pk=mysql_query("select * from tbpaket");
                                        while($hasil=mysql_fetch_array($pk)){
                                        echo "<option value='$hasil[idpaket]'>$hasil[nama_paket]</option>";
                                        }?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input name="konfirm" value="<?php echo $data[konfirm_admin]?>" class="form-control" placeholder="">
                                        </div>
                                        <button type="submit" class="btn btn-gradien btn-info"><i class="fa fa-edit fa-lg"></i> Update</button>
            			             </form>
                                </div>
                            </div>
        			    </div>
    			    </div>
			    </div>
		</div>
    </div>
</div>

