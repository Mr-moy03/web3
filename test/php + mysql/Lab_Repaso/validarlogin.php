<?php
session_start();
$Usuario=$_POST["Usuario"];
$Clave=$_POST["Clave"];
$_SESSION["Usuario"]=$Usuario;

//echo $Usuario." ".$Clave;

$db=mysqli_connect('localhost','root','','sitio_db');
$sql = "SELECT COUNT(*) as cantidad from autentificada ";
$sql.= "where usuario='".$Usuario."' and clave='".$Clave."'";
$resultado =mysqli_query($db,$sql);
$fila =mysqli_fetch_array($resultado);

echo $fila["cantidad"];
if ($fila["cantidad"]==1)
{
	header("Location:index.php");
	exit;
}
header("Location:login.php");
?>