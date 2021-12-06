<?php
include "conexion.inc.php";
$nombre=$_GET["nombre"];
$candidato_principal=$_GET["candidato_principal"];
$carta=$_GET["carta"];
$programa=$_GET["programa"];
$plan_estudiantil=$_GET["plan_estudiantil"];
$formulario_impreso=$_GET["formulario_impreso"];
$carta_compromiso=$_GET["carta_compromiso"];

$sql_c="update frente set nombre='$nombre', candidato_principal='$candidato_principal', carta='$carta', programa='$programa', ";
$sql_c.="plan_estudiantil='$plan_estudiantil', formulario_impreso='$formulario_impreso', carta_compromiso='$carta_compromiso' ";
$sql_c.="where nombre='$nombre';";
$resultado_c=mysqli_query($conn, $sql_c);
if(!$resultado_c){
    echo "Error:".$sql_c;
}
?>