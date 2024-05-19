<?php

include "nav_menu.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/envios.css">



</head>
<head>
    <title>SERVICIO DE ENVIO</title>

  </head>
  <body>

    <div class="div_big_1">
      <div class="div_small_1">
        <form action="https://www.google.com">
  
          <label for="nombre"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" id="nombre" required placeholder="ingresar">
          <br>
          <br>
    
          <label for="direccion">&nbsp;&nbsp;&nbsp;&nbsp;Dirección:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" id="direccion" required placeholder="ingresar">
          <br>
          <br>
    
          <label for="correo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="email"  id="correo" required placeholder="ingresar">
          <br>
          <br>
  
          <label for="celular">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Celular:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="tel" id="celular" required placeholder="ingresar">
          <br>
          <br>
    
          <label for="pais">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;País:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" id="pais" required placeholder="ingresar">
          <br>
          <br>
          <label for="pais" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" id="pais" required placeholder="ingresar">
          <br>
          <br>
    
          <label for="pais">Codigo Postal:</label>
          <input type="text"id="pais" required placeholder="ingresar">
          <br>
          <br>
          <label >Metodo de pago:</label>
          <br>
  
            <input type="radio" name="pago_metodo" value="visa" required placeholder="">
            <label for="visa">Visa</label>
  
            <input type="radio" name="pago_metodo" value="mastercard" required>
            <label for="mastercard">mastercard</label>

            <br>
  
            <input type="radio" name="apple_pay" value="apple_pay" required>
            <label for="otro">Apple pay</label>
  
            <input type="radio" name="pago_metodo" value="otro" required>
            <label for="otro">Otro</label>
            <br>
            <br>
    
         
          <label for="mensaje">Indicaciones o sugerencias:</label>
          <br>
          <textarea id="mensaje" rows="5">  </textarea>
          <br>
          <button type="submit" class="enviar">Enviar</button>
      </form>
      </div>

      <div class="div_small_2">
        <h1>SERVICIO DE ENVIO</h1>

        <span>
          LLena el formulario para poder llevar el paquete a tu domicilio.
        </span>
        <br>
        <br>
  
        <span>"El proceso de envio puede durar 2 semanas"</span>
        <br>
  
        <img src="../multimedia/recursos/envio_logo.png" alt="">
      </div>

    </div>






    <footer>
      <center>
          &copy; 2024 Neco Fabric - Todos los derechos reservados
      </center>
  </footer>
  </body>
</html>