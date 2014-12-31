<!DOCTYPE html>

<?php 
session_start();
error_reporting(0);
include "timeout.php";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web Pengajuan Wisata - Halaman Admin</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/logosmi.png" >

  </head>
  <body>
    <div class="container">
      <h3 class="demo-panel-title"><img src="img/web-logo.png"></h3>
      <div class="row demo-row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#"><span class="fui-home"></span></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <?php if ($_SESSION['level']==1){ ?>
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">Peganjuan<span class="navbar-unread">1</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pembayaran <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="#fakelink">Data User</a></li>
               </ul>
               <?php } ?>
               <?php if ($_SESSION['level']==2){ ?>
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">Pengajuan</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
               </ul>
               <?php } ?>
               <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fui-user"></span><b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="logout.php"><span class="fui-power"></span> Logout</a></li>
                  </ul>
                </li>
               </ul>
             
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> 

      

    <?php include "link.php"; ?>

    </div>

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>