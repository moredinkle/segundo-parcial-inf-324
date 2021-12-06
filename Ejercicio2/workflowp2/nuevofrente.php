<?php
include "conexion.inc.php";
$frente=$_GET["frente"];
$candidato=$_GET["candidato"];
$sql="INSERT INTO frente(nombre,candidato_principal,estado) VALUES ('".$frente."', '".$candidato."','pendiente');";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if (!$resultado) {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else{
	session_start();
	$_SESSION["frente"]=$frente;
	header("Location: desflujo.php?flujo=f1&proceso=p2");
}


?>