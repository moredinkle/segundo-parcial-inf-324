<?php
include "conexion.inc.php";
session_start();
$sql_c="select * from fechas;";
$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);
$fecha_inicio=$fila_c["fecha_inicio"];
$fecha_fin=$fila_c["fecha_fin"];
?>