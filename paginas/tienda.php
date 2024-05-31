<?php

include "nav_menu.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tienda.css">
</head>
<main>
        <div class="div_big_1">
            <div class="div_small_1">
                <p class="filter_info"> Marca </p>
                <input class="filter_input" type="text" placeholder="ingresar..">
                <p class="filter_info"> precio </p>
                <input class="filter_input" type="text" placeholder="Ingresar..">
                <p class="product_add"> Productos añadidos </p>
                <p class="filter_info"> X </p>
                <form action="../paginas/carrito.html">
                    <button class="carrito_button" type="submit"> Ir al carrito </button>
                </form>
            </div>


        
    
    
            <div class="div_small_2">
                <ul class"producto">
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img class="product_img" src="../recursos/peluche.webp" alt="bonnie" width="256px" height="256px">
                                </td>     
                                <td>
                                    <p class="product_info"> Peluche de Neco-Arc Lumina </p>
                                        <h3 class="product_info">30.000 COP</h3>
                                        <button class="product_info button_properties"> Añadir al carrito </button> 
                                </td>                       
                            </tr>
                        </table>
                    </li>
                    
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img class="product_img" src="../recursos/kit.webp" alt="bonnie" width="256px" height="256px">
                                </td>     
                                <td>
                                    <p class="product_info"> Peluche de Kit Fortnite </p>
                                        <h3 class="product_info">30.000 COP</h3>
                                        <button class="product_info button_properties"> Añadir al carrito </button> 
                                </td>                       
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img class="product_img" src="../recursos/meowskulls.jpeg" alt="bonnie" width="256px" height="256px">
                                </td>     
                                <td>
                                    <p class="product_info"> Peluche de Meowskulls cromatica </p>
                                        <h3 class="product_info">30.000 COP</h3>
                                        <button class="product_info button_properties"> Añadir al carrito </button> 
                                </td>                       
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img class="product_img" src="../recursos/ponmi.jpg" alt="bonnie" width="256px" height="256px">
                                </td>     
                                <td>
                                    <p class="product_info"> Peluche de Ponmi Digital Circus </p>
                                        <h3 class="product_info">30.000 COP</h3>
                                        <button class="product_info button_properties"> Añadir al carrito </button> 
                                </td>                       
                            </tr>
                        </table>
                    </li>
                    
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img class="product_img" src="../recursos/ojolera.webp" alt="bonnie" width="256px" height="256px">
                                </td>     
                                <td>
                                    <p class="product_info"> Peluche de Freddy Fazbear FNAF 4</p>
                                        <h3 class="product_info">30.000 COP</h3>
                                        <button class="product_info button_properties"> Añadir al carrito </button> 
                                </td>                       
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img class="product_img" src="../recursos/bonnie.jpg" alt="bonnie" width="256px" height="256px">
                                </td>     
                                <td>
                                    <p class="product_info"> Peluche de Bonnie FNAF 1</p>
                                        <h3 class="product_info">30.000 COP</h3>
                                        <button class="product_info button_properties"> Añadir al carrito </button> 
                                </td>                       
                            </tr>
                        </table>
                    </li>
                </ul>
    
            </div>
        </div>
    </main>
    

    <?php
    include("../paginas/footer.php");
    ?>
 
</html>