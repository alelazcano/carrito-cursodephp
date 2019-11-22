<?php
include("conex.php");
session_start();
$_SESSION['venta_iniciada']="NO";
$_SESSION['destino']="";

$precios=mysql_query("SELECT SUM(precio*cantidad) FROM carrito,productos WHERE nro_venta=".$_SESSION['nro_venta']." AND codigo=producto", $link);

// FROM "carrito" y "productos" SON DOS TABLAS DIFERENTES, ya que algunos datos estan en una y otros en la otra.
// AND "codigo=producto" son las claves de cada tabla, y se deben relacionar con algo, en este caso "codigo" de la primera, y "producto" de la segunda

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?
$precio=mysql_fetch_array($precios);
echo $precio[0];
?>

</body>
</html>
