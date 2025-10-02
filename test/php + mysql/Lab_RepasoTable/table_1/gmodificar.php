<?php
$id_original = $_POST["id_original"];
//$id = $_POST["id"];
$fecha = $_POST["fecha"];
$titular = $_POST["titular"];
$descripcion = $_POST["descripcion"];

$db = mysqli_connect('localhost', 'root', '', 'sitio_db');
$sql = "UPDATE chismes SET fecha='$fecha', titular='$titular',descripcion='$descripcion' WHERE id=$id_original";
mysqli_query($db, $sql);
header("Location: ../table1.php");
?>