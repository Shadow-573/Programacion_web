<?php

include "nav_menu.php";

include("../modelo/conexion.php");
include("../controlador/controlador_registro_user.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <div class="padre">
        <label for="">nombre</label>
        <input type="text" name="nombre">

        <br>

        <label for="">direccion</label>
        <input type="text" name="direccion">
        <br>

        <label for="">correo</label>
        <input type="text" name="correo">
        <br>

        <label for="">pais</label>
        <input type="text" name="pais">
        <br>

        <input type="submit" value="Registrar" name="registro">
        <a href="log_in.php">salir</a>
    </div>

    </form>

    
</body>
</html>