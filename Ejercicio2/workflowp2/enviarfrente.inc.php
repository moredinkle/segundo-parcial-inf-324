<h2>Presentar frente</h2><?php
session_start();
include "conexion.inc.php";
?>
<input type="hidden" value="<?php echo $_SESSION["frente"] ?>" name="nomfre" />
<table>
    <tr>
        <td>Nombre frente</td>
        <td>Candidato principal</td>
        <td>Carta a comite</td>
        <td>Programa</td>
        <td>Plan estudiantil</td>
        <td>Formulario impreso</td>
        <td>Carta compromiso</td>
        <td>Fecha de presentación</td>
        <td>Estado</td>
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
    </tr>

</table>


<?php if($estado == "aceptado") echo "El frente ya fue aceptado para la elección" ?>
<br>
