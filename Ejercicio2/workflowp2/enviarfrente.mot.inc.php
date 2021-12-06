<?php
session_start();
include "conexion.inc.php";
$nombrefr=$_SESSION["frente"];

$sql="select * from frente where nombre ='".$nombrefr."';";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if($fila["estado"] != "aceptado"){
    $fecha_entrega=date("Y-m-d H:i:s");
    $estado = "en revision";
    $sql_c="update frente set fecha_entrega='$fecha_entrega', estado='$estado' where nombre='$nombrefr';";
    $resultado_c=mysqli_query($conn, $sql_c);
    if(!$resultado_c){
        echo "Error:".$sql_c;
    }
}

?>
