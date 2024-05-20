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
                                    <img class="product_img" src="../multimedia/peluche.webp" alt="bonnie" width="256px" height="256px">
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
                                    <img class="product_img" src="../multimedia/kit.webp" alt="bonnie" width="256px" height="256px">
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
                                    <img class="product_img" src="../multimedia/meowskulls.jpeg" alt="bonnie" width="256px" height="256px">
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
                                    <img class="product_img" src="../multimedia/ponmi.jpg" alt="bonnie" width="256px" height="256px">
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
                                    <img class="product_img" src="../multimedia/ojolera.webp" alt="bonnie" width="256px" height="256px">
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
                                    <img class="product_img" src="../multimedia/bonnie.jpg" alt="bonnie" width="256px" height="256px">
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
    
    <!--
    <main>
        <center>
            <h1>Nuestros Peluches</h1>
            <p>En Neco Fabric nos especializamos en ofrecer una amplia variedad de peluches para todas las edades y ocasiones.
                Desde ositos clásicos hasta personajes de películas y series, tenemos algo para todos.</p>
        </center>

            <center>     
            <table>
                <tr>
                    <td>
                        <center>
                            <b>
                                <img class="peluche-img" src="/multimedia/peluche.webp" alt="Peluches" width="256px" height="256px">
                                <h1> 40.000 COP</h1>
        
                                <img class="peluche-img" src="/multimedia/kit.webp" alt="Peluches" width="256px" height="256px">
                                <h1> 80.000 COP</h1>
                            
                                <img class="peluche-img" src="/multimedia/meowskulls.jpeg" alt="Peluches" width="256px" height="256px">
                                <h1> 30.000 COP</h1>
                            </b>  
                        </center>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                    </td>
                    <td>
                       <center>
                        <b>
                            <img class="peluche-img" src="/multimedia/ponmi.jpg" alt="Peluches" width="256px" height="256px">
                            <h1> 50.000 COP</h1>
                
                            <img class="peluche-img" src="/multimedia/ojolera.webp" alt="Peluches" width="256px" height="256px">
                            <h1> 60.000 COP</h1>
                
                            <img class="peluche-img" src="/multimedia/bonnie.jpg" alt="Peluches" width="256px" height="256px">
                            <h1> 60.000 COP</h1>
                        </b>
                       </center>
                    </td>
                </tr>
            </table>
            </center>
    </main>
    -->
    <footer>
        <center>
            &copy; 2024 Neco Fabric - Todos los derechos reservados
        </center>
    </footer>
</html>