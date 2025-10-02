<?php
$id_original = $_POST["id_original"];
$id = $_POST["id"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$db = mysqli_connect('localhost', 'root', '', 'sitio_db');
$sql = "UPDATE autentificada SET id=$id, usuario='$usuario', clave='$clave' WHERE id=$id_original";
mysqli_query($db, $sql);
header("Location: ../table1.php");
?>