<?php
include'../conexion/index.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$asunto=$con->real_escape_string(htmlentities($_POST['asunto']));
$idu=$con->real_escape_string(htmlentities($_POST['idu']));

//foto
$extension='';
$ruta='../../view/assets/images/';
$archivo=$_FILES['foto']['tmp_name'];
$nombrearchivo=$_FILES['foto']['name'];
$info=pathinfo($nombrearchivo); 
if($archivo !=''){
$extension =$info['extension'];
if($extension =="png"||$extension=="PNG"||$extension=="jpg"||$extension=="JPG"){
move_uploaded_file($archivo,'../../view/assets/images/'.$asunto.'.'.$extension);
$ruta=$ruta."/".$asunto.'.'.$extension;
}else{
header('location:../../view/componentes/alert/alerta_error.php');
}
}else{
$ruta="../../view/assets/avatar.png";	
}
$ins=$con->query("INSERT INTO asunto VALUES('','$asunto','$ruta','$idu')");
if($ins){
}else{

}
$con->close();
}else{
header('location:../../view/src/404.html');
}
?>










