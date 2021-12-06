<?php
session_start();
include "conexion.inc.php";
$frente = $_SESSION["frenterev"];
$sql="DELETE FROM observacion WHERE nombre_frente = '$frente';";
$resultado=mysqli_query($conn, $sql);

?>