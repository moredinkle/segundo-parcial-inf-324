<h2>Revisar frente</h2>
<?php
session_start();
include "conexion.inc.php";
$sql = "select * from frente where nombre='" . $_SESSION["frenterev"] . "';";
$resultado = mysqli_query($conn, $sql);
?>
<input type="hidden" value="<?php echo $_SESSION["frenterev"] ?>" name="nomfre" />
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
        echo "</tr>";
    }
    ?>
</table>
<br>
<label for="pregunta" class="seleccionar">¿Aceptar u observar frente?</label>
<select name="pregunta" id="pregunta">
    <option value="aceptar">aceptar</option>
    <option value="observar">observar</option>
</select>
<br>