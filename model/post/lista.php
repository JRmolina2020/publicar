<?php 
require '../../model/conexion/index.php';

$id = $_SESSION["idusuarios"];

$sel =$con->query("SELECT * FROM asunto where usuarios_idusuarios = '$id'   ORDER BY idpost DESC");


?>