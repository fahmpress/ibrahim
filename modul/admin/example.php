<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Daftar Pengajuan Objek Wisata</h4>
    </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pengajuan</th>
                            <th>Nama Objek Wisata</th>
                            <th>Nama User</th>
                            <th>Paket</th>
                            <th>Waktu Pengajuan</th>
                            <th><center><a href="#" class="btn btn-primary btn-sm btn-grad btn-block"><i class="fa fa-plus-circle"></i> Tambah Data</a></center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        while ($data1=mysql_fetch_array($q1)){
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data1[idpengajuan]?></td>
                            <td><?php echo $data1[nama_wisata]?></td>
                            <td><?php echo $data1[nama_user]?></td>
                            <td><?php echo $data1[nama_paket]?></td>
                            <td><?php echo $data1[waktu_pengajuan]?></td>
                            <td class="center" style="text-align: center;">
                            <a href="#" class="btn btn-default btn-xs btn-grad"><i class="fa fa-folder-open"></i> Detail</a>
                            <a href="#" class="btn btn-default btn-xs btn-grad"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-default btn-xs btn-grad"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
                        <?php $no++; } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
        <span class="label label-warning"><?php echo $data3[keterangan]?></span>
        <p class="text-muted">This is an example of muted text.</p>

        
        