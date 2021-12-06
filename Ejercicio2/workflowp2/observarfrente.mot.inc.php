<?php
include "conexion.inc.php";
session_start();
$observacion=$_GET["observacion"];
$nombrefr=$_SESSION["frenterev"];
$sql="INSERT INTO observacion(nombre_frente, obs) VALUES ('".$nombrefr."', '".$observacion."');";
$resultado=mysqli_query($conn, $sql);
?>