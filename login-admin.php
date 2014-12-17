<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="img/poltek.png" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>POLITEKNIK SUKABUMI</title>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />


<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>

</head>

<body OnLoad="document.login.username.focus();">
<div class="container">
    <div class="text-center">
        <img src="assets/img/wisata.png" alt=" Logo" />
    </div>
    <div class="tab-content">
     <div id="login" class="tab-pane active">    
<form id="form-login" name="login" class="form-signin" id="block-validate" method="post" action="login-cek.php" onSubmit="return validasi(this)">
<p class="text-danger text-left btn-block btn btn-primary btn-rect">
                <i class="fa fa-user"></i> Login admin
                </p>
  <tr>
  <td><div align="left"><input type="text" name="username" size="37" id="input" /></div></td>
  <td><div align="left"><input type="password" name="password" size="37" id="input" /></div></td>
  <td><div align="left"><input name="Submit" class="btn btn-success" type="image" value="Submit" src="images/images_login/login_by_fahm.png" id="submit" align="absmiddle" /></div></td>
  </tr>
 </table>
</form>

     </div>
</div>
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->
     <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="assets/js/validationInit.js"></script>
    <script>
    $(function () { formValidation(); });
    </script>
</body>
</html>
