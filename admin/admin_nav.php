<?php

$title ="nav_menu";



$menu_items = array(
  'Roles' => 'roles.php',
  'Usuarios' => 'usuarios.php',
  'Page admin' => 'page_manager.php',
  'Shop manager' => 'shop_manager.php',
  'Admin Log' => 'audit_log.php'
);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">9
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_tools.css">
</head>
<body>

<section>
    
<div class="nav_menu">

<div class="admin_title">
    <h2 class="nav_tittle">Admin tools</h2>
</div>

    
<?php

echo '<ul class="admin_nav">';


/* Esto en un principio me generaba automaticamente la lista
pero a causa de las imagenes distintas de casa <Li>
foreach ($menu_items as $name => $url) {

    echo "<li class='admin_lista'><a class='menu_selector' href=$url>$name</a></li>";
}
*/



echo "<li class='admin_lista'><a class='menu_selector' href='roles.php'><img src='../recursos/iconos/roles.png' alt='' class='iconos'>Roles</a></li>";
echo "<li class='admin_lista'><a class='menu_selector' href='usuarios.php'><img src='../recursos/iconos/usuarios.png' alt='' class='iconos'>Usuarios</a></li>";
echo "<li class='admin_lista'><a class='menu_selector' href='page_manager.php'><img src='../recursos/iconos/page_admin.png' alt='' class='iconos'>Page admin</a></li>";
echo "<li class='admin_lista'><a class='menu_selector' href='shop_manager.php'><img src='../recursos/iconos/shop_manager.png' alt='' class='iconos'>Shop manager</a></li>";
echo "<li class='admin_lista'><a class='menu_selector' href='audit_log.php'><img src='../recursos/iconos/log.png' alt='' class='iconos'>Admin Log</a></li>";

echo '</ul>';


        ?>

</div>
</section>

    
</body>
</html>











<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="div_big_1">
        <div class="div_small_1">

            <div class="div_mini_title">
                <h5>Admin</h5>
            </div>
            
            <div class="div_mini_1">
                <a href="/admin/roles.html"> Roles</a>
            </div>

            <div class="div_mini_2">
                <button class="modificar_obj">Usuarios</button>
            </div>

            <div class="div_mini_3">
                <button class="eliminar_obj">Page manager</button>
            </div>

            <div class="div_mini_4">
                <button class="nothing">Shop manager</button>
            </div>

            <div class="div_mini_5">
                <a href="/admin/audit_log.html"> Roles</a>
            </div>

            <div class="div_mini_6">
                <button class="salir_cerrar">Salir y cerrar sección	</button>
            </div>

        </div>
        
</body>
</html>

-->