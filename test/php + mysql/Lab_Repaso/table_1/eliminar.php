<?php
$id = $_GET["id"];
$db = mysqli_connect('localhost', 'root', '', 'sitio_db');
mysqli_query($db, "DELETE FROM chismes WHERE id=$id");
header("Location: ../table1.php");
?>