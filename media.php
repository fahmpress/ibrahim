<?php 
session_start();
error_reporting(0);
include "timeout.php";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Web Pengajuan Wisata</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- CSS devoops -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
	<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
	<link href="plugins/select2/select2.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    </head>
    <body class="padTop53 " >
        <link rel="shortcut icon" href="img/poltek.png" >
        <div id="wrap">
        
        <!-- HEADER SECTION -->
        <div id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo2.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
            <ul class="nav navbar-top-links navbar-right">
                    
                <!--ADMIN SETTINGS SECTIONS -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                    </a>
                <ul class="dropdown-menu dropdown-user">
                    
                    <li>
                        <a href="logout.php"><i class="icon-signout"></i> Logout </a>
                    </li>
                </ul>
                </li>
                    <!--END ADMIN SETTINGS -->
            </ul>
            </nav>
        </div>
        <!-- END HEADER SECTION -->
        <!-- MENU SECTION -->
        <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo"$_SESSION[foto]";?>"/>
                </a>
                <br />
            <div class="media-body">
                <h5 class="media-heading"> <?php echo "$_SESSION[nama]"?></h5>
                    <ul class="list-unstyled user-info">
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                        </li>
                    </ul>
            </div>
            <br />
            </div>
            <?php if ($_SESSION['level']=='1'){ ?>
            <ul id="menu" class="collapse">
                <li class="panel">
                    <a href="media.php?module=adm" >
                        <i class="fa fa-file-text"></i> Pengajuan
                    </a>                   
                </li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Pembayaran </a></li>
                <li><a href="#"><i class="fa fa-user"></i> Data User </a></li>
                <li><a href="#"><i class="fa fa-book"></i> Kontrak </a></li>
                <li><a href="#"><i class="fa fa-dedent"></i> Kategori </a></li>
                <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="fa fa-gear"> </i> Setting     
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                </a>
                    <ul class="collapse" id="component-nav">
                        <li class=""><a href="#"> Akun </a></li>
                        <li class=""><a href="#"> Password </a></li>
                    </ul>
                </li>
            </ul>
            <?php } if ($_SESSION['level']=='2'){ ?>
            <ul id="menu" class="collapse">
                <li class="panel">
                    <a href="media.php?module=adt" >
                        <i class="fa fa-file-text"></i> Pengajuan
                    </a>                   
                </li>
                
                <li><a href="#"><i class="fa fa-bar-chart-o"></i> Statistik </a></li>
                <li><a href="#"><i class="fa fa-print"></i> Laporan </a></li>
                <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="fa fa-gear"> </i> Setting     
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                </a>
                    <ul class="collapse" id="component-nav">
                        <li class=""><a href="#"> Akun </a></li>
                        <li class=""><a href="#"> Password </a></li>
                    </ul>
                </li>
            </ul>
            <?php } if($_SESSION['level']=='3'){ ?>
            <ul id="menu" class="collapse">
                <li class="panel">
                    <a href="media.php?module=usr" >
                        <i class="fa fa-file-text"></i> Pengajuan
                    </a>                   
                </li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Pembayaran </a></li>
                <li><a href="#"><i class="fa fa-book"></i> Kontrak </a></li>
                <li><a href="#"><i class="fa fa-dedent"></i> Kategori </a></li>
                <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="fa fa-gear"> </i> Setting     
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                </a>
                    <ul class="collapse" id="component-nav">
                        <li class=""><a href="#"> Akun </a></li>
                        <li class=""><a href="#"> Password </a></li>
                    </ul>
                </li>
            </ul>  
            <?php } ?>
    </div>
        <!--END MENU SECTION -->
        <!--PAGE CONTENT -->
    <?php include "link.php"; ?>
    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
    <!-- Script devoops -->
        <!-- Javascripts -->
        <script src="plugins/jquery/jquery-2.1.0.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
        <script src="plugins/tinymce/tinymce.min.js"></script>
        <script src="plugins/tinymce/jquery.tinymce.min.js"></script>
        <!-- All functions for this theme + document.ready processing -->
        <script src="js/devoops.js"></script>
</body>
</html>
