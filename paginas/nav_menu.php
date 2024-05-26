<?php

$title ="nav_menu";



$menu_items = array(
  'Inicio' => 'index.php',
  'Tienda' => 'tienda.php',
  'Envios' => 'envios.php',
  'Contactenos' => 'contactenos.php',
  'Log In' => 'log_in.php'
);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/nav_menu.css">
  <title>Páginas</title>


</head>

<body>

  <header>
    <nav class="nav_menu_nav">
      <div class="nav_div_big_1">

        <div class="nav_div_small_1">
          <table>
            <tr>
              <td>
                <a href="#"></a>
                <img src="../recursos/neco_walk.gif" alt="Logo" width="80" height="80">
              </td>
              <td>
                <button onclick="sonido_burenya()" class="logo_visibility titulo_neco_arc">
                  <audio src="../audio/burenya.mp3" id="burenya"></audio>
                  <script src="../Js/neco_audio.js"> </script>
                  <h2 class="logo_neco">
                    NECO
                    <br>
                    FABRIC
                  </h2>
                </button>
              </td>
            </tr>
          </table>
        </div>





        <div class="nav_div_small_2">
          <input class="nav_buscar" type="text" placeholder="Buscar..">
          <button class="search_button"> <img class="lupa_busqueda" src="../recursos/iconos/lupa.png" alt="lupa_w">
          </button>
        </div>

        <div class="nav_div_small_3">

        <?php

echo '<ul class="navegador">';



foreach ($menu_items as $name => $url) {
  //$url= 'paginas/'.$url;


    echo "<li class='lista'><a class='menu_options' href=$url>$name</a></li>";
    
}
echo "<img src='../recursos/iconos/shop_cart.png' alt='carrito' width='60' height='30'> </a> </li>";
echo '</ul>';

        ?>





        <!--

          <ul class="navegador">
            <li> <a class="menu_options" href="inicio.html" target="formulario">INICIO</a> </li>
            <li> <a class="menu_options" href="tienda.html" target="formulario">TIENDA</a> </li>
            <li> <a class="menu_options" href="envios.html" target="formulario">ENVIOS</a> </li>
            <li> <a class="menu_options" href="contactenos.html" target="formulario">CONCTACTENOS</a> </li>
            <li> <a class="menu_options" href="log_in.html" target="formulario">LOG IN</a> </li>
            <li> <a class="carrito_img" href="carrito.html" target="formulario">
                <img src="recursos/iconos/shop_cart.png" alt="carrito" width="60" height="30"> </a> </li>

          </ul>
        -->
        </div>

      </div>

    </nav>
  </header>
</body>

</html>