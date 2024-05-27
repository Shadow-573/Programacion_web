<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nom = $_GET['nom'];
$ape = $_GET['ape'];
?>
    <div>
    <form action="speditar.php" method="post">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
                <td><input type="text" name="id" style="visibility: hidden;"  value="<?=$id?>" id=""></td>
            </tr>
            <tr>
                <td>NOMBRES:</td>
                <td><input type="text" name="nom" value="<?=$nom?>" id="" ></td>
            </tr>
            <tr>
                <td>APELLIDOS:</td>
                <td><input type="text" name="ape" value="<?=$ape?>" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Actualizar"></td>
            </tr>
        </table>

    </form>

    </div>
</body>
</html>