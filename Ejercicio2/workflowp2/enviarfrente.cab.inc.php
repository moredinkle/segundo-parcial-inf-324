<?php
include "conexion.inc.php";
session_start();
$nombref=$_SESSION["frente"];

$sql_c="select * from frente where nombre ='".$nombref."';";
$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);

$nombre=$fila_c["nombre"];
$candidato_principal=$fila_c["candidato_principal"];
$carta=$fila_c["carta"];
$programa=$fila_c["programa"];
$plan_estudiantil=$fila_c["plan_estudiantil"];
$formulario_impreso=$fila_c["formulario_impreso"];
$carta_compromiso=$fila_c["carta_compromiso"];
$fecha_entrega=$fila_c["fecha_entrega"];
$estado=$fila_c["estado"];
?>