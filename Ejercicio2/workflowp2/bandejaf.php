<h2>Estado frente</h2>
<?php
session_start();
include "conexion.inc.php";
include "estilo.inc.php";
$sql = "select * from frente where nombre='" . $_SESSION["frente"] . "';";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($resultado);
$nombre = $fila["nombre"];
$candidato_principal = $fila["candidato_principal"];
$carta = $fila["carta"];
$programa = $fila["programa"];
$plan_estudiantil = $fila["plan_estudiantil"];
$formulario_impreso = $fila["formulario_impreso"];
$carta_compromiso = $fila["carta_compromiso"];
$fecha_entrega = $fila["fecha_entrega"];
$estado = $fila["estado"];

$sql2 = "select * from observacion where nombre_frente='" . $_SESSION["frente"] . "';";
$resultado2 = mysqli_query($conn, $sql2);
$fila2 = mysqli_fetch_array($resultado2);
$observacion = $fila2["obs"];

?>

<table>
	<tr>
		<th>Nombre frente</th>
		<th>Candidato principal</th>
		<th>Carta a comite</th>
		<th>Programa</th>
		<th>Plan estudiantil</th>
		<th>Formulario impreso</th>
		<th>Carta compromiso</th>
		<th>Fecha de presentación</th>
		<th>Estado</th>
		<th>Accion</th>
	</tr>
	<tr>
		<td> <?php echo $nombre ?></td>
		<td> <?php echo $candidato_principal ?></td>
		<td> <?php echo $carta ?></td>
		<td> <?php echo $programa ?></td>
		<td> <?php echo $plan_estudiantil ?></td>
		<td> <?php echo $formulario_impreso ?></td>
		<td> <?php echo $carta_compromiso ?></td>
		<td> <?php echo $fecha_entrega ?></td>
		<td> <?php echo $estado ?></td>
		<td> <a href="desflujo.php?flujo=f1&proceso=p2">Editar</a></td>
	</tr>
</table>
<br><br>
<?php if (isset($resultado2)) : ?>
	<h2>Observaciones</h2>
	<?php echo $observacion; ?>
<?php endif; ?>
<br><br>
<a href="./index.php" class="button">Volver a login</a>

