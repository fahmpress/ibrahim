<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web Pengajuan Wisata - Login admin</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    
    <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />

    <link rel="shortcut icon" href="img/logosmi.png" >
 </head>
  <body>

    <div class="container">
      <h3 class="col-sm-5 col-sm-offset-3">Login Admin</h3>
      <div class="row demo-row">
        <div class="col-sm-5 col-sm-offset-3">
			<div class="login-form">
				<form role="form" role="form" method="post" action="login-cek.php" id="block-validate">
            <div class="form-group">
            	
              		<input class="form-control login-field" id="required2" name="required2" type="text" placeholder="username">
              		<label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input class="form-control login-field" id="password2" name="password2" type="password" placeholder="password">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>
            <div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
				<div class="clearfix"></div>
			</div>
        </form>
          </div>
      </div>
  </div>
    </div>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
        <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
        <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
        <script src="assets/js/validationInit.js"></script>
        <script>
        $(function () { formValidation(); });
        </script>

  </body>
</html>