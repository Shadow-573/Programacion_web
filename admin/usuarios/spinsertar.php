<?php
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$cnx = mysqli_connect("localhost", "root", "", "dbprueba");
$sql = "INSERT INTO talumno(nom, ape) VALUES('$nom', '$ape')";
$rta = mysqli_query($cnx, $sql);
header("Location:../usuarios.php");
?>