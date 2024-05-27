<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/admin.css">


</head>

<div class="big_div_1">
  <form action="../admin/admin_nav.php">
    <h1>Admin</h1>
    <div class="input_datos">
      <input type="text" placeholder="Correo" required>
    </div>

    <div class="input_datos">
      <input type="password" placeholder="contraseña" required>
    </div>

    <div class="recordar_contrasena">
      <label><input type="checkbox"> Cerrar por inactividad </label>
      <a href="#">Para qué sirve esto?</a>
    </div>

    <button type="submit" class="boton_login">Acceder</button>

    <div class="no_cuenta">
      <p>Fallan credenciales?
        <a href="#">Avisa a un administrador</a>
      </p>
    </div>

  </form>
</div>

<footer>
  &copy; 2024 Neco Fabric - Todos los derechos reservados
</footer>

</html>