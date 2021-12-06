<?php
include "conexion.inc.php";
$frente=$_GET["frente"];
$sql="select * from frente where nombre ='".$frente."';";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if (isset($fila) )
{
	session_start();
	$_SESSION["frente"]=$frente;
	header("Location: ./bandejaf.php");
}
else
{
	echo "Error: " . $sql;
	header("Location: index.php");
}
?>