<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Web Wisata Sukabumi | Login Admin</title>
    <link rel="shortcut icon" href="img/logosmi.png" >
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
    <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="img/web-logo.png" id="logoimg" alt=" Logo" />
    </div>
    <div class="col-sm-5 col-sm-offset-3">
        <div id="login" class="tab-pane active">
            <form role="form" role="form" method="post" action="login-cek.php" id="block-validate">
								<div class="form-group">
									<input class="form-control" id="required2" name="required2" type="text" placeholder="username">
								</div>
								<div class="form-group">
									<input class="form-control" id="password2" name="password2" type="password" placeholder="password">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Login</button>
									<div class="clearfix"></div>
								</div>
							</form>
        </div>
    </div>
 </div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
   
   <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
        <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
        <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
        <script src="assets/js/validationInit.js"></script>
        <script>
        $(function () { formValidation(); });
        </script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
