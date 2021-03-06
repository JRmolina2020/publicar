<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Log in</title>
<link rel="import" href="src/link.html">
<link rel="stylesheet" type="text/css" href="src/css/fondos.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="../../index2.html"><b>Publicar</b>DOWS</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
<p class="login-box-msg">
Inicie sesión</p>

<form action="../model/login/index.php" method="post">
<div class="form-group has-feedback">
<input type="text" class="form-control" name="usuario"  id="usuario" placeholder="Nick">
<span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="password" class="form-control" name="contra" id="contra" placeholder="Password">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
<div class="col-xs-8">
</div>
<!-- /.col -->
<div class="col-xs-4">
<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
</div>
<!-- /.col -->
</div>
</form>

<div class="social-auth-links text-center">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
Facebook</a>
<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
Google+</a>
</div>
<!-- /.social-auth-links -->
<a href="#">I forgot my password</a><br>
<a href="register_user/" class="text-center">Registrarse</a>
</div>
<!-- /.login-box-body -->
</div>
</body>
</html>
