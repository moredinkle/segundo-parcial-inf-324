<html>
<?php

?>
<head>
	<title>Workflow 2do parcial</title>
</head>

<body>
	<h1>Flujo</h1>
	<?php
	include "conexion.inc.php";
	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	$sql = "select * from flujo where flujo='" . $flujo . "' and proceso='" . $proceso . "'";
	$resultado = mysqli_query($conn, $sql);
	$fila = mysqli_fetch_array($resultado);
	$sig = $fila['procesosiguiente'];
	$form = $fila['formulario'];
	include $fila['formulario'] . '.cab.inc.php';

	$sql2 = "select * from flujo where flujo='" . $flujo . "' and procesosiguiente='" . $proceso . "'";
	$resultado2 = mysqli_query($conn, $sql2);
	$fila2 = mysqli_fetch_array($resultado2);
	$proceso2 = $fila2["proceso"];

	?>
	<form action="motflujo.php" method="GET">

		<?php 
		include "estilo.inc.php";
		include $fila['formulario'] . '.inc.php';
		?>
		<br>
		<input type="hidden" value="<?php echo $form ?>" name="formulario" />
		<input type="hidden" value="<?php echo $flujo ?>" name="flujo" />
		<input type="hidden" value="<?php echo $proceso ?>" name="proceso" />
		<input type="submit" value="Anterior" name="Anterior" />
		<input type="submit" value="Siguiente" name="Siguiente" />
		<br>
	</form>
	<a href="./index.php" class="button">Volver a login</a>
</body>



</html>