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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_nav.css">
</head>
<nav>
    
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
</nav>
</html>