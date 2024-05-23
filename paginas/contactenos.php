<?php

include "nav_menu.php";

#include("../modelo/conexion.php");
#include("../controlador/controlador_registro_user.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/contactenos.css">

    
</head>

<body>
  <div class="div_big_1">
    

    <div class="div_small_1">
      <center>
        
        <form action="" method="post">
      
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="ingresar">
            <br>
            <br>
    
            <label for="direccion" >Dirección:</label>
            <input type="text" id="direccion" name="direccion" required placeholder="ingresar">
            <br>
            <br>
    
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required placeholder="ingresar">
            <br>
            <br>
          
            <label for="celular" >Celular:</label>
            <input type="tel"  id="celular" name="correo" required placeholder="ingresar">
            <br>
            <br>
    
            <label for="pais" >País: </label>
            <input type="text" id="pais" name="pais" required placeholder="ingresar">
            <br>
            <br>
    
     
            <label for="file">Seleccione el archivo a cargar:</label>
            <input type="file"  id="file">
            <br>
            <br>
    
            <label for="fecha" >Fecha de nacimiento:</label>
            <input type="date" id="fecha" required>
            <br>
            <br>
    
    
            <label>Género:</label>
            <br>
    
              <input type="radio" name="genero" value="masculino">
              <label for="masculino">Masculino</label>
    
              <input type="radio" name="genero" value="femenino">
              <label for="femenino">Femenino</label>
    
              <input type="radio" name="genero" value="otro">
              <label for="otro">Otro</label>
              <br>
              <br>
      
           
    
            <label for="mensaje" >Mensaje adicional:</label>
            <br>
            <textarea id="mensaje" rows="10" cols="40"> </textarea>
            <br>
            <button type="submit" class="enviar" >Enviar</button>
  
        </form>
        </center>
    </div>
    <div class="div_small_2">
      <h1>Formulario</h1>

      <span>
        LLena el formulario para contactarnos con nosotros!
      </span>
      <br>
      <br>

      <span>Responderemos entre 3 a 4 dias habiles</span>
      <br>

      <img src="../multimedia/recursos/formulario_foto.png" alt="">
    </div>
  </div>

  <footer>
    <center>
        &copy; 2024 Neco Fabric - Todos los derechos reservados
    </center>
</footer>

</body>
</html>