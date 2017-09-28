<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Registration Page</title>

<link rel="import"  href="../src/link.html">
<link rel="stylesheet" type="text/css" href="../src/css/fondos.css">

</head>
<body class="hold-transition register-page">
<div class="register-box">
<div class="register-logo">
  <a href="../../index2.html"><b>Publicar</b>DOGS</a>
</div>

<div class="register-box-body">
  <p class="login-box-msg">Su informacion esta segura</p>

  <form  id="formulariouser"   method="POST" enctype="multipart/form-data">
    <div class="form-group has-feedback">
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombe completo" autofocus>
  
    </div>
    <div class="form-group has-feedback">
      <input type="text" class="form-control" id="nick" name="nick" placeholder="Nombe de usuario">
    </div>
    <div class="form-group has-feedback">
      <input type="email" class="form-control" id="correo" name="correo" placeholder="Gmail/hotmail">
  
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>
    <div class="form-group">
     <label class="col-lg-6 control-label">Foto</label>  
     <input class="form-control"   type="file" name="foto" id="foto" required>
      </div>
      <input type="hidden" name="nivel" id="nivel" value="USER" >
    
    <div class="row">
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
      Facebook</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
      Google+</a>
  </div>

  <a href="../index.php" class="text-center">LOG IN</a>
</div>
<!-- /.form-box -->
</div>


<script src="../../controller/usercontroller/index2.js"></script>
</body>
</html>
