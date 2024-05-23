<?php

if (!empty($_POST["registro"])){
    if (empty($_POST["nombre"]) or empty($_POST["direccion"]) or empty($_POST["correo"]) or empty($_POST["pais"])) {
        
        echo '<h1>uno de los campos está vacío.</h1>';

    } else{
        echo '<h1>ta bien w.</h1> ';

        $nombre=$_POST["nombre"];
        $direccion=$_POST["direccion"];
        $correo=$_POST["correo"];
        $pais=$_POST["pais"];

        $sql=$conexion_DB->query("insert into usuarios (nombre,direccion,correo,pais) values ('$nombre','$direccion','$correo','$pais') ");


        if ($sql==1) {
            echo '<h1>usuario registrado correctamente</h1>';
        } else {
            echo '<h1>usuario no registrado.</h1>';
        }
    }
}

?>