<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "dbprueba");
$sql = "DELETE FROM talumno WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: ../usuarios.php");


?>