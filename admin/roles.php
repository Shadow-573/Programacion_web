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
<main>
    <link rel="stylesheet" href="../css/roles.css">
    <div class="tabla_fondo">
    <header>       
        <div class="big_div_1">
            <div class="titulo">
            
                <h3>Roles</h3>
        
                </div>
        
                <div class="btns">

                    <form action="#">

                        <button class="cancel" type="submit"> Cancelar</button>
        
                        <button class="save" type="submit"> Guardar</button>
                    </form>
                
                </div>
        </div>

    </header>

    <div class="roles">
        <table>
            <thead>
                <tr>
                    <th> ID</th>
                    <th> Nombre</th>
                    <th> R</th>
                    <th> W</th>
                    <th> X</th>
                </tr>
            </thead>
            <tr>
                <td> #1</td>
                <td> Admin</td>
                <td> <input type="radio"></td>
                <td> <input type="radio"></td>
                <td> <input type="radio"></td>
            </tr>
            <tr>
                <td> #1</td>
                <td> Vendedor</td>
                <td> <input type="radio"></td>
                <td> <input type="radio"></td>
                <td> <input type="radio"></td>
            </tr>
            <tr>
                <td> #1</td>
    
                <td> user</td>
                <td> <input type="radio"></td>
                <td> <input type="radio"></td>
                <td> <input type="radio"></td>
            </tr>
        </table>
    </div>
    </main>
</div>

</body>

<link rel="stylesheet" href="../css/ajuste_admin.css">


</html>