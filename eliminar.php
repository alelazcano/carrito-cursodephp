<?
include("conex.php");
session_start();
$nro_venta=$_SESSION['nro_venta'];
$codigo=$_GET['cod'];
mysql_query("DELETE FROM carrito WHERE nro_venta='$nro_venta' AND producto='$codigo'", $link);
header("Location:ver_carrito.php");
?>