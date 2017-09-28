<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="import" href="../src/link.html">
<?php include'../../model/conexion/index.php';?>
</head>
<body>
<?php if ($_SESSION['nivel']=='ADMINISTRADOR') {include"../src/bower_components/menus/administrador.php";}else{include"../src/bower_components/menus/usuario.php";}?>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div class="box box-default">
<div class="box-header with-border">
<h3 class="box-title">Publicaciones</h3>
</div>
<div class="box-body">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalasunto">
Nuevo post
</button><br>
<div class="lista_post"></div><br>
</div>
</div>
</div>
</div>
</div>
<!-- /////////////////////POST ADD -->

<!-- modals de registros y de edicion de usuarios -->
<div class="modal fade" id="modalasunto" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Nuevo Post</h4>
</div>
<div class="modal-body">
<form id="formularioasunto" method="POST" enctype="multipart/form-data">

<div class="form-group">
  <label for="comment">Asunto</label>
  <textarea class="form-control" rows="5" placeholder="¿Que estas pensando?" name="asunto" id="asunto"></textarea>
</div>

<div class="form-group">
<label class="col-lg-6 control-label">Imagen1</label>  
<input class="form-control"  type="file" name="foto" id="foto" required=>
</div>

<input type="text" value="<?php echo $_SESSION['idusuarios']?>" name="idu" id="idu">
<div class="modal-footer">
<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-primary">Publicar</button>
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
</div>

<!-- END POST ADD -->
<script src="../../controller/asuntocontroller/index.js"></script>
<script type="text/javascript" src="../src/js/bootstrap.min.js"></script>
</body>
</html>