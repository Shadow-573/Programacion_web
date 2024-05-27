<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<div class="content">
    <nav>
        <?php
        require("admin_nav.php");
        ?>
    </nav>
    </div>


<body>

<center>


<div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="usuarios/nuevo.php">Añadir Nuevo</a>
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>OPCIONES</td>
            </tr>
            <?php
                $buscar = $_POST['buscar'];
                $cnx = mysqli_connect("localhost", "root", "", "dbprueba");
                $sql = "SELECT id, nom, ape FROM talumno WHERE nom like '$buscar' '%' order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td>
                            <a href="usuarios/editar.php?
                            id=<?php echo $mostrar[0] ?> &
                            nom=<?php echo $mostrar[1] ?> &
                            ape=<?php echo $mostrar[2] ?> 
                            ">Editar</a>
                            <a href="usuarios/speliminar.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
</center>

</body>

<link rel="stylesheet" href="../css/ajuste_admin.css">


</html>













