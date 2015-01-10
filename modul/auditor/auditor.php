<?php
$q1=mysql_query("SELECT * FROM tbuser, tbpengajuan, tbpaket WHERE tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.status='pending'");
	$count1=mysql_query("SELECT count(*) as pending FROM tbpengajuan WHERE status='Pending'");
	$pending=mysql_fetch_array($count1);
?>

<div id="content">
    <div class="inner">
    	<div class="row">
                    <div class="col-lg-12">
                        <h2> Dashboard Auditor</h2>
                    </div>
                </div>
		
                <div class="row">
                <div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                    <h4>Daftar Pengajuan Objek Wisata</h4>
                    </div>
                    <div class="panel-body">
					<div class="table-responsive">
                                        <?php
                                        if($pending[pending]==0){ echo "<div class='alert alert-success'>Tidak ada pengajuan saat ini.</div>"; }
                                        else { ?>
                                		<table class="table table-striped table-bordered table-hover">
                                    		<thead>
                                        		<tr>
                                            		<th><center>No</center></th>
                                            		<th>ID Pengajuan</th>
                                            		<th>Nama Objek Wisata</th>
                                            		<th>Nama User</th>
                                            		<th>Paket</th>
                                            		<th>Waktu Pengajuan</th>
                                            		<th></th>
                                            	</tr>
                                    		</thead>
                                    		<tbody>
                                    			<?php
                                    			$no=1;
                                    			while ($data1=mysql_fetch_array($q1)){
                                    			?>
                                        		<tr>
                                            		<td><center><?php echo $no ?></center></td>
                                            		<td><?php echo $data1[idpengajuan]?></td>
                                            		<td><?php echo $data1[nama_wisata]?></td>
                                            		<td><?php echo $data1[nama_user]?></td>
                                            		<td><?php echo $data1[nama_paket]?></td>
                                            		<td><?php echo $data1[waktu_pengajuan]?></td>
                                            		<td class="center" style="text-align: center;">
                                            			<a href="index-admin.php?module=pengajuan-detail&idpengajuan=<?php echo $data1[idpengajuan]?>" class="btn btn-default btn-xs btn-grad"><i class="fa fa-folder-open"></i> Detail</a>
                                            			<a href="#formModal<?php echo $data1[idpengajuan]?>" class="btn btn-default btn-xs btn-grad" data-toggle="modal"><i class="fa fa-check-square-o"></i> Validasi</a>
                                            			
                                            		</td>
                                            		<?php $no++; } ?>
                                				</tr>
                                    		</tbody>
                                		</table>
                                        <?php } ?>
                            		</div>
                    </div>
                </div>
                </div>
                </div>

<?php 
$q1=mysql_query("SELECT * FROM tbuser, tbpengajuan, tbpaket WHERE tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.status='pending'");
while ($data1=mysql_fetch_array($q1)){ ?>
<div class="col-lg-12">
<div class="modal fade" id="formModal<?php echo $data1[idpengajuan]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Validasi</h4>
                                        </div>
                                    <form method="post" action="modul/auditor/proses.php?module=adt&act=pengajuan-proses&id=<?php echo $data1[idpengajuan]?>">
                                <div class="modal-body">
                                <div class="form-group">
                                            <label><i class="fa fa-anchor"></i> ID Pengajuan</label>
                                            <input value="<?php echo $data1[idpengajuan]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-align-right"></i> Nama Objek Wisata</label>
                                            <input value="<?php echo $data1[nama_wisata]?>" class="form-control" placeholder="" readonly>
                                        </div>
                                <div class="form-group">
                                    <label for="register-username"><i class="fa fa-comments"></i> <b>Pesan validasi</b></label>
                                    <textarea class="form-control" name="keterangan" type="text" required><?php echo $data1[keterangan]?></textarea>
                                </div>
                                </div>
                                <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info"><i class="fa fa-envelope"></i> Kirim</button>
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

