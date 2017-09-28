<?php
include("../../model/post/lista.php");
echo "<script language=\"JavaScript\" src=\"../src/js/search.js\"></script>"; 

$data = ' <br>
<input type="search" class="form-control" id="input-search" placeholder="Busqueda de Entrenadores">
<br>

';
while($fila = $sel->fetch_assoc()){
$data .= '
<div class="searchable-container container-fluid">
<div class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
<div class="panel-heading resume-heading">
<div class="well">
<div class="media">
<a class="pull-left" href="#">
<img class="media-object img-circle" width="200" height="200"  src="'.$fila['foto'].'">
</a>
<div class="media-body">
<h4 class="media-heading">'.$fila['asunto'].'</h4>
<p class="text-right">By Francisco</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
Aliquam in felis sit amet augue.</p>
<ul class="list-inline list-unstyled">
<li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
<li>|</li>
<span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
<li>|</li>
<li>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
</li>
</ul>
<a onclick="Mostrar('.$fila['idpost'].')" class="btn  btn-xs btn-primary">  <i class="fa fa-pencil" aria-hidden="true"></i></a>
<a onclick="DeleteAsunto('.$fila['idpost'].')" class="btn  btn-xs btn-danger">  <i class="fa fa-remove" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
';
}
echo $data;
?>

