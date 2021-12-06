<h3>Fechas presentación elección</h3>
Fecha inicio
<input type="text" name="fecha_inicio" value="<?php echo $fecha_inicio;?>"/>
<br/>
Fecha fin
<input type="text" name="fecha_fin" value="<?php echo $fecha_fin;?>"/>
<br/>
<?php session_start();
if(isset($_GET["frente"])) $_SESSION["frenterev"]=$_GET["frente"];
?>