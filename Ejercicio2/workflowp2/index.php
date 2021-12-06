<html>

<head>
    <title>Workflow 2do parcial</title>
</head>
<?php session_start();
session_destroy();
include "estilo.inc.php"; ?>

<body>
    <h2>Login Comite</h2>
    <form action="controlindex.php" method="GET">
        Usuario
        <input type="text" name="username" value="">
        <br>
        Contraseña
        <input type="password" name="password" value="">
        <br>
        <input type="submit" name="Aceptar" value="Aceptar">
    </form>
    <br>
    <br>
    <h2>Frente</h2>
    <form action="loginfrente.php" method="GET">
        Nombre
        <input type="text" name="frente" value="">
        <br>
        <input type="submit" name="Aceptar" value="Aceptar">
    </form>
    <br>
    <br>
    <h2>Crear frente</h2>
    <form action="nuevofrente.php" method="GET">
        Nombre
        <input type="text" name="frente" value="">
        <br>
        Candidato principal
        <input type="text" name="candidato" value="">
        <br>
        <input type="submit" name="Aceptar" value="Aceptar">
    </form>
</body>


<style>
    body {
        margin: 50px auto;
        text-align: center;
        width: 800px;
    }
</style>

</html>