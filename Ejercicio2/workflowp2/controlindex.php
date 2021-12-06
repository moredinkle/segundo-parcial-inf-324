<?php
include "conexion.inc.php";
$username = $_GET["username"];
$password = $_GET["password"];
$sql = "select * from usuario where username ='" . $username;
$sql .= "' and password='" . $password . "'";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($resultado);

if ($fila["username"] == $username and $fila["password"] == $password and $fila["username"] != "") {
	session_start();
	$_SESSION["username"] = $username;
	header("Location: bandejac.php");
} else {
	header("Location: index.php");
}
