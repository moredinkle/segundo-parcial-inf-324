<h2>Lista frentes postulados</h2>
<?php
session_start();
include "conexion.inc.php";
include "estilo.inc.php";
$sql = "select * from frente where estado != 'pendiente'";
$resultado = mysqli_query($conn, $sql);

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
		<th>Acción</th>
	</tr>
	<?php
	while ($fila = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>" . $fila["nombre"] . "</td>";
		echo "<td>" . $fila["candidato_principal"] . "</td>";
		echo "<td>" . $fila["carta"] . "</td>";
		echo "<td>" . $fila["programa"] . "</td>";
		echo "<td>" . $fila["plan_estudiantil"] . "</td>";
		echo "<td>" . $fila["formulario_impreso"] . "</td>";
		echo "<td>" . $fila["carta_compromiso"] . "</td>";
		echo "<td>" . $fila["fecha_entrega"] . "</td>";
		echo "<td>" . $fila["estado"] . "</td>";
        $fr=$fila["nombre"];
		echo "<td><a ";
		echo "href='desflujo.php?flujo=f1&proceso=p1&frente=".$fr."'";
		echo ">Revisar</a></td>";
		echo "</tr>";
	}
	?>
</table>

<br><br>
<a href="./index.php" class="button">Volver a login</a>