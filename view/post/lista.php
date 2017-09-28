<?php
include("../../model/post/lista.php");
echo "<script language=\"JavaScript\" src=\"../src/js/table.js\"></script>"; 
$data = '<br><br>
<div class="table-responsive">
<table class="datatable table table-striped table-bordered">
<thead>
<tr>
<th>asunto</th>
<th>perfil</th>
<th></th>

</tr>
</thead>
<tbody>
';
while($fila = $sel->fetch_assoc()){
$data .= '
<tr>
<td>'.$fila['asunto'].'</td>
<td><img class="img-responsive" width="300" height="300" alt="Error al cargar"src="'.$fila['foto'].'"></td>
<td>
<a onclick="Mostrar('.$fila['idpost'].')" class="btn  btn-xs btn-primary">  <i class="fa fa-pencil" aria-hidden="true"></i></a>
<a onclick="DeleteAsunto('.$fila['idpost'].')" class="btn  btn-xs btn-danger">  <i class="fa fa-remove" aria-hidden="true"></i></a>
</td>
</tr>';
}
$data .= '
</tbody>
</table>
</div>
';
echo $data;
?>

