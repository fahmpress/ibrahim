<?php include "../../config/koneksi.php"; 
$q1=mysql_query("SELECT * FROM tbuser, tbpengajuan, tbpaket WHERE tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.status='pending'");

	$count1=mysql_query("SELECT count(*) as pending FROM tbpengajuan WHERE status='pending'");
	$pending=mysql_fetch_array($count1);

$q2=mysql_query("SELECT * FROM tbpaket, tbuser, tbpengajuan, tbbayar WHERE tbpengajuan.idpaket=tbpaket.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.idpengajuan=tbbayar.idpengajuan and konfirm_admin='pending'");

	$count2=mysql_query("SELECT count(*) as konfirm FROM tbbayar WHERE konfirm_admin='pending'");
	$konfirm=mysql_fetch_array($count2);

$q3=mysql_query("SELECT * FROM tbuser, tbpengajuan, tbpaket WHERE tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbpengajuan.keterangan<>'' and tbpengajuan.keterangan<>'validate'");

	$count3=mysql_query("SELECT count(*) as pesan from tbpengajuan where keterangan<>'' and keterangan<>'validate'");
	$pesan_auditor=mysql_fetch_array($count3);
?>

<div id="content">
    <div class="inner">
    	<div class="row">
                    <div class="col-lg-12">
                        <h2> Dashboard Admin - Quick Pannel </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                    	<div class="panel panel-default">
                    		<div class="panel-body">
                        <div style="text-align: left;">
                           
                            <a class="quick-btn" href="#pengajuan" data-toggle="tab">
                                <i class="icon-file-text icon-2x"></i>
                                <span> Pengajuan</span>
                                <span class="label label-danger"><?php echo $pending[pending] ?></span>
                            </a>
                            <a class="quick-btn" href="#konfirmasi" data-toggle="tab">
                                <i class="icon-shopping-cart icon-2x"></i>
                                <span> Konfirmasi</span>
                                <span class="label label-success"><?php echo $konfirm[konfirm] ?></span>
                            </a>
                            <a class="quick-btn" href="#auditor" data-toggle="tab">
                                <i class="icon-envelope icon-2x"></i>
                                <span> Auditor</span>
                                <span class="label label-warning"><?php echo $pesan_auditor[pesan] ?></span>
                            </a>
                        </div>

                        <div class="tab-content">
                                <div class="tab-pane fade in active" id="pengajuan">
                                
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
                                <div class="tab-pane fade" id="konfirmasi">
                                
                                <div class="panel panel-default">
                    					<div class="panel-heading">
                        				<h4>Daftar Konfirmasi Pembayaran Objek Wisata</h4>
                    					</div>
                        			<div class="panel-body">
                            		<div class="table-responsive">
                                        <?php
                                        if($konfirm[konfirm]==0){ echo "<div class='alert alert-success'>Tidak ada pembayaran yang harus dikonfirmasi saat ini.</div>"; }
                                        else { ?>
                                		<table class="table table-striped table-bordered table-hover">
                                    		<thead>
                                        		<tr>
                                            		<th><center>No</center></th>
                                            		<th>ID Bayar</th>
                                            		<th>Tgl Bayar</th>
                                            		<th>Rekening</th>
                                            		<th>User</th>
                                            		<th>Jumlah</th>
                                            		<th></th>
                                        		</tr>
                                    		</thead>
                                    		<tbody>
                                    			<?php
                                    			$no=1;
                                    			while ($data2=mysql_fetch_array($q2)){
                                    			?>
                                        		<tr>
                                            		<td><center><?php echo $no ?></center></td>
                                            		<td><?php echo $data2[idbayar]?></td>
                                            		<td><?php echo $data2[tgl_pembayaran]?></td>
                                            		<td><?php echo $data2[rek_user]?></td>
                                            		<td><?php echo $data2[nama_user]?></td>
                                            		<td>Rp. <?php echo number_format("$data2[harga]") ?></td>
                                            		<td class="center" style="text-align: center;">
                                            			<a href="index-admin.php?module=konfirmasi-detail&idbayar=<?php echo $data2[idbayar]?>" class="btn btn-default btn-xs btn-grad"><i class="fa fa-folder-open"></i> Detail</a>
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
                                
                                <div class="tab-pane fade" id="auditor">
                               	<div class="panel panel-default">
                    					<div class="panel-heading">
                        				<h4>Daftar Pengajuan Objek Wisata</h4>
                    					</div>
                        			<div class="panel-body">
                            		<div class="table-responsive">
                                        <?php
                                        if($pesan_auditor[pesan]==0){ echo "<div class='alert alert-success'>Tidak ada pesan dari Auditor saat ini.</div>"; }
                                        else { ?>
                                		<table class="table table-striped table-bordered table-hover">
                                    		<thead>
                                        		<tr>
                                            		<th><center>No</center></th>
                                            		<th>ID Pengajuan</th>
                                            		<th>Nama Objek Wisata</th>
                                            		<th>Nama User</th>
                                            		<th>Paket</th>
                                            		<th>Pesan Auditor</th>
                                            		<th></th>
                                            	</tr>
                                    		</thead>
                                    		<tbody>
                                    			<?php
                                    			$no=1;
                                    			while ($data3=mysql_fetch_array($q3)){
                                    			?>
                                        		<tr>
                                            		<td><center><?php echo $no ?></center></td>
                                            		<td><?php echo $data3[idpengajuan]?></td>
                                            		<td><?php echo $data3[nama_wisata]?></td>
                                            		<td><?php echo $data3[nama_user]?></td>
                                            		<td><?php echo $data3[nama_paket]?></td>
                                            		<td><strong><span class="label label-warning"><?php echo $data3[keterangan]?></span></p></strong></td>
                                            		<td class="center" style="text-align: center;">
                                            			<a href="index-admin.php?module=auditor-detail&idpengajuan=<?php echo $data3[idpengajuan]?>" class="btn btn-default btn-xs btn-grad"><i class="fa fa-folder-open"></i> Detail</a>
                                            			<a href="modul/admin/proses.php?module=adm&act=pengajuan-proses&id=<?php echo $data3[idpengajuan]?>" class="btn btn-default btn-xs btn-grad"><i class="fa fa-check-square-o"></i> Approve</a>
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
                    </div>
                </div>
                </div>
                </div>

                
    </div>
</div>