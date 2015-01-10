<?php 
session_start();
error_reporting(0);
include "timeout.php";
include "../../config/koneksi.php";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Laporan Pengajuan</title>
        <link rel="shortcut icon" href="../../img/logosmi.png" >
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- CSS  bs-admin-bcore -->
        <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="../../assets/css/main.css" />
        <link rel="stylesheet" href="../../assets/css/theme.css" />
        <link rel="stylesheet" href="../../assets/css/MoneAdmin.css" />
        <link rel="stylesheet" href="../../assets/plugins/Font-Awesome/css/font-awesome.css" />
        <link href="../../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../assets/css/bootstrap-fileupload.min.css" />

        <link rel="stylesheet" href="../../assets/plugins/validationengine/css/validationEngine.jquery.css" />
    </head>
    <body>
        
        <div class="container">
        <div class="row">
                        
                    <div class="col-lg-3">
                        <img src="../../img/web-logo.png" style="margin-bottom: 13px; margin-top: 20px;" alt="" />
                    </div>
                </div>
        
                <div class="row">
                <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="text-center">Laporan Keuangan</h4>
                    </div>
                    <div class="panel-body">
                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th>Invoice</th>
                                                    <th>User</th>
                                                    <th>Objek Wisata</th>
                                                    <th>Tgl Bayar</th>
                                                    <th>Rekening Asal</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no=1;
                                                $q1=mysql_query("SELECT * FROM tbuser, tbbayar, tbpengajuan, tbpaket WHERE tbpaket.idpaket=tbpengajuan.idpaket and tbpengajuan.iduser=tbuser.iduser and tbbayar.idpengajuan=tbpengajuan.idpengajuan");
                                                while ($dt=mysql_fetch_array($q1)){
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $no ?></center></td>
                                                    <td><?php echo $dt[idbayar]?></td>
                                                    <td><?php echo $dt[nama_user]?></td>
                                                    <td><?php echo $dt[nama_wisata]?></td>
                                                    <td><?php echo $dt[tgl_pembayaran]?></td>
                                                    <td><?php echo $dt[rek_user]?></td>

                                                    <?php 
                                                    if($dt['konfirm_admin']=="Pending") {$color="label label-danger";}
                                                    else {$color="label label-success";}
                                                    ?>

                                                    <td> <span class="<?php echo $color ?>"><?php echo $dt[konfirm_admin]?></span></td>
                                                    <?php $no++; } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                    </div>
                    <hr style="margin-top: -20px;">
                    <center>
                    <button style="margin-bottom: 20px; margin-top: 1px;" class="btn btn-default btn-grad" onclick="myFunction()"><i class="fa fa-print fa-lg"></i></button></center>

<script>
function myFunction() {
    window.print();
}
</script>

                    </div>
                </div>
                </div>

</div>

    
</body>
</html>


