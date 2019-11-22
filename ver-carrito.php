<?php include("conex.php");
session_start();
$compras=mysql_query("SELECT * carrito ,productos WHERE codigo=producto AND nro_venta=".$_SESSION['nro_venta'], $link);
echo mysql_error($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table width="750" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Codigo</td>
    <td>Descripcion</td>
    <td>Foto</td>
    <td>Precio</td>
    <td>Cantidad</td>
    <td>Subtotal</td>
    <td>Borrar</td>
  </tr>
<?php while($compra=mysql_fetch_array($compras))
	{
?>
  <tr>
    <td><? echo $compra['codigo'];?></td>
    <td><? echo $compra['descripcion'];?></td>
    <td><? echo $compra['foto'];?></td>
    <td><? echo $compra['precio'];?></td>
    <td><? echo $compra['cant'];?></td>
    <td><? echo $compra['precio'*'cantidad'];?></td>
    <td><center><img src="eliminar.jpg" alt="eliminar" width="20" height="17" /></center></td>
  </tr>
<? } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p align="center">&lt;&lt; Volver al Catálogo | Finalizar compra &gt;&gt;</p>
</body>
</html>
