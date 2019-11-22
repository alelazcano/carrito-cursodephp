<?php include("conex.php");
session_start();
$compras=mysql_query("SELECT * FROM carrito,productos WHERE codigo=producto AND nro_venta=".$_SESSION['nro_venta'], $link);
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
<?php $total=0;
while($compra=mysql_fetch_array($compras))
	{
		$total=$total+$compra['precio']*$compra['cantidad'];
?>
  <tr>
    <td><? echo $compra['codigo']; ?></td>
    <td><? echo $compra['descripcion']; ?></td>
    <td><img src="<? echo $compra['foto']; ?>" width="100px" height="100px"/></td>
    <td><? echo number_format($compra['precio'],2); ?></td>
    <td><? echo $compra['cantidad']; ?></td>
    <td><? echo $compra['cantidad']*$compra['precio'] ?></td>
    <td><center><a href="eliminar.php?cod=<? echo $compra['codigo']; ?>"><img src="eliminar.jpg" alt="eliminar" width="20" height="17" /></a></center></td>
  </tr>
<? } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td><? echo number_format($total,2);?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p align="center"><a href="catalogo.php">&lt;&lt; Volver al Catálogo</a>|| <a href="fin.php">Finalizar compra &gt;&gt;</a></p>
</body>
</html>
