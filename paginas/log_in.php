<?php

include "nav_menu.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/log_in.css">


</head>
<div class="div_ayuda">

<body>

<div class="big_div_1">
  <form action="../paginas/tienda.php" method="post">
    <h1>Inicia sección </h1>
    <div class="input_datos">
      <input type="text" placeholder="Correo" 
      name="correo" required>
    </div>

    <div class="input_datos">
      <input type="password"
       placeholder="contraseña" name="contraseña" required>
    </div>

    <div class="recordar_contrasena">
      <label><input type="checkbox"> Recuerdame </label>
      <a href="#">Olvidaste la contraseña?</a>
    </div>

    <button type="submit" class="boton_login">Acceder</button>

    <div class="no_cuenta">
      <p>no tengo una cuenta? 
        <a href="#">Registrarme</a></p>
    </div>

  </form>
</div>


<footer>
  &copy; 2024 Neco Fabric - Todos los derechos reservados
</footer> 

</body>

</div>

</html>