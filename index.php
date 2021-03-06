<?php 
session_start();
error_reporting(0);
include "timeout.php";
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Web Pengajuan Wisata</title>
        <link rel="shortcut icon" href="img/logosmi.png" >
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/theme.css" />
        <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
        <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />

        <!-- CSS mPurpose Master -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link rel="stylesheet" href="css/leaflet.css" />
	    <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <!-- CSS bcore-admin -->
        <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
        <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
	</head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li>
								<div class="dropdown choose-country">
                                                                        <a class="#" data-toggle="dropdown" href="#"><img src="img/flags/id.png" alt="Indonesian"> INA</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/gb.png" alt="Great Britanian"> UK</a></li>
									</ul>
								</div>
							</li>
                                                        <?php if ($_SESSION['level']==null){
                                                            echo "<li><a href='index.php?module=register' data-toggle='modal'>Daftar | </a><a href='index.php?module=login'>Login</a></li>";
                                                        } else {
                                                            echo "<li><a href='logout2.php'>Logout</a></li>";
                                                        } 
                                                        ?>
                                                   </ul>
					</div>
                        </div>
		        
		        <nav id="mainmenu" class="mainmenu">
					
                                        <?php if ($_SESSION['level']==null){ ?>
                                        <ul>
                                            <li class="logo-wrapper"><a href="index.php"><img src="img/web-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li>
                                                        <a href="index.php">Home</a>
						</li>
						<li>
							<a href="index.php?module=tentang">Sukabumi</a>
						</li>
						
						<li>
							<a href="index.php?module=howto">How To</a>
						</li>
                                                <li>
							<a href="index.php?module=objeklist">Objek Wisata</a>
						</li>
                                                <li>
							<a href="index.php?module=pengajuan">Pengajuan</a>
						</li>
					</ul>
                                        
                                        <?php } 
                                        if ($_SESSION['level']=='3'){
                                        ?>
                            
                                        <ul>
                                            <li class="logo-wrapper"><a href="index.php?module=usr"><img src="img/web-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li>
                                                        <a href="index.php?module=usr">Home</a>
						</li>
						<li>
							<a href="index.php?module=tentang">Sukabumi</a>
						</li>
						<li>
							<a href="index.php?module=howto">How To</a>
						</li>
                                                <li>
							<a href="index.php?module=objeklist">Objek Wisata</a>
						</li>
                                                <li>
							<a href="index.php?module=pengajuan">Pengajuan</a>
						</li>
                                                <li class="has-submenu">
                                                    <a href="#">Menu Saya <i class="fa fa-angle-double-down"></i> </a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner"> 
									<div>
										<h4>Pengajuan</h4>
										<ul>
                                            <li><a href="index.php?module=status"><i class="fa fa-file-text"></i> Status</a></li>
											<li><a href="index.php?module=tagihan"><i class="fa fa-shopping-cart"></i> Tagihan</a></li>
                                            <li><a href="index.php?module=galery"><i class="fa fa-photo"></i> Galery</a></li>
										</ul>
                                    </div>
                                    <div>
										<h4>Akun</h4>
										<ul>
                                            <li><a href="index.php?module=profile"><i class="fa fa-user"></i> Profile Saya</a></li>
											<li><a href="index.php?module=passwd"><i class="fa fa-unlock-alt"></i> Rubah Password</a></li>
										</ul>
                                            </div>
                                        </div>
                                    </div>
						</li>
                                                
					</ul>
				
                                        <?php } ?>
                                </nav>
			</div>
        </div>
		
        <?php
        
            include "link.php";
        ?>
        
	    <div class="footer">
	    	<div class="container">
                <div class="row">
                    <div class="col-footer col-md-3 col-xs-6">
                        <h3>Wisata Paling HOT</h3>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="#"><img src="img_objekwisata/426309aItp15XTT5.jpg" alt="Project Name"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-footer col-md-3 col-xs-6">
                        <h3>Navigasi</h3>
                        <ul class="no-list-style footer-navigate-section">
                            <li><a href="index.php?module=pengajuan">Harga Paket</a></li>
                            <li><a href="index.php?module=tentang">Tentang Sukabumi</a></li>
                            <li><a href="index.php?module=howto">FAQ</a></li>
                            <li><a href="login-admin.php">Admin</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Informasi Kontak</h3>
                        <p class="contact-us-details">
                            <b>Alamat :</b> Jl.Babakan Sirna 25 Benteng Kota Sukabumi<br/>
                            <b>Tlp :</b> +62 (266) 215 417, 225905<br/>
                            <b>Email :</b> <a href="mailto:helpdesk@wisatasmi.go.id">helpdesk@wisatasmi.go.id</a><br/>
                            <b>Jam Kerja :</b> Senin- Sabtu 09 AM – 4 PM<br/>                            
                        </p>
                    </div>
                    <div class="col-footer col-md-2 col-xs-6">
                        <h3>Social Links</h3>
                        <ul class="footer-stay-connected no-list-style">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="googleplus"></a></li>
                        </ul>
                    </div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; Web Depeloper by Ibrahim. All rights reserved.</div>
		    		</div>
		    	</div>
		      </div>
	       </div>
        </div>
        <!-- CSS mPurpose Master -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>
        
        <!-- Script bs-core-admin -->
        <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
        <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
        <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
        <script src="assets/js/validationInit.js"></script>
        <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
        <script>
        $(function () { formValidation(); });
        </script>
    </body>
</html>