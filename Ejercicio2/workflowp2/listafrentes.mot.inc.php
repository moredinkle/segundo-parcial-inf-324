<?php
include "conexion.inc.php";
session_start();
$pregunta=$_GET["pregunta"];
$nombrefr=$_SESSION["frenterev"];
if($pregunta=="aceptar") $estado = "aceptado";
else $estado = "observado";

$sql_c="update frente set  estado='$estado' where nombre='$nombrefr';";
$resultado_c=mysqli_query($conn, $sql_c);
?>