<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$cnx = mysqli_connect("localhost", "root", "", "dbprueba");
$sql = "UPDATE talumno set nom='$nom', ape='$ape' WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: ../usuarios.php");
?>