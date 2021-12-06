	<?php
	session_start();
	include "conexion.inc.php";
	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	$formulario = $_GET["formulario"];
	include $formulario . ".mot.inc.php";
	if (isset($_GET["Siguiente"])) {
		$sql = "select * from flujo where flujo='" . $flujo . "' and proceso='" . $proceso . "'";
		$resultado = mysqli_query($conn, $sql);
		$fila = mysqli_fetch_array($resultado);
		$procesosiguiente = $fila["procesosiguiente"];
		if ($fila["tipo"] == 'C') {
			$sql2 = "select * from flujo_condicionante where flujo='" . $flujo . "' and proceso='" . $proceso . "'";
			$resultado2 = mysqli_query($conn, $sql2);
			$fila2 = mysqli_fetch_array($resultado2);
			if ($pregunta == 'aceptar') $procesosig = $fila2["si"];
			else $procesosig = $fila2["no"];
			header("Location: desflujo.php?flujo=" . $flujo . "&proceso=" . $procesosig);
		}
		else if (isset($fila["procesosiguiente"])) {
			header("Location: desflujo.php?flujo=" . $flujo . "&proceso=" . $procesosiguiente);
		} else {
			if (isset($_SESSION["frenterev"])) header("Location: bandejac.php");
			else header("Location: bandejaf.php");
		}
	} else {
		$sql = "select * from flujo where flujo='" . $flujo . "' and procesosiguiente='" . $proceso . "'";
		$resultado = mysqli_query($conn, $sql);
		$fila = mysqli_fetch_array($resultado);
		$proceso = $fila["proceso"];
		if (isset($proceso)) {
			header("Location: desflujo.php?flujo=" . $flujo . "&proceso=" . $proceso);
		} else {
			if (isset($_SESSION["frenterev"])) header("Location: bandejac.php");
			else header("Location: bandejaf.php");
		}
	}
	?>
