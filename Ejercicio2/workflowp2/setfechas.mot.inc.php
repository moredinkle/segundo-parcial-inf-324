<?php
include "conexion.inc.php";

$fecha_inicio=$_GET["fecha_inicio"];
$fecha_fin=$_GET["fecha_fin"];

$sql_c="update fechas set fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin';";
$resultado_c=mysqli_query($conn, $sql_c);
if(!$resultado_c){
    echo "Error:".$sql_c;
}
?>