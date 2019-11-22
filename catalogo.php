<?
include("conex.php");

if(!isset($_POST['criterio']))
{
	$productos=mysql_query("SELECT * FROM productos ORDER BY descripcion",$link);
}
else
{
	$productos=mysql_query("SELECT * FROM productos WHERE descripcion LIKE '%".$_POST['criterio']."%'",$link);
	/* los % (porcentaje) actuan, en este caso, como "comodines" */
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="bucador" name="bucador" method="post" action="catalogo.php">
  <label>
  <input type="text" name="criterio" id="buscador" />
  </label>
  <label>
  <input type="submit" name="Enviar" id="Enviar" value="Buscar" />
  </label>
</form>
<p>&nbsp;</p>
<table width="943" height="285" border="0" cellpadding="0" cellspacing="0">
<?
while($producto=mysql_fetch_array($productos))
{
?>

  <tr>
    <td width="466"><img src="<? echo $producto['foto'];?>" width="466" height="129" /></td>
    <td width="477"><form name="form1" method="post" action="procesa_venta.php?cod=<? echo $producto['codigo'];?>">
      <p>Producto <? echo $producto['descripcion'];?>
        <label></label>
      </p>
      <p>Precio <? echo $producto['precio'];?>
        <label></label>
      </p>
      <p>Cantidad      
        <label>
        <input name="cant" type="text" id="cant" />
        </label>
      </p>
      <p>
        <label>
        <input type="submit" name="button" id="button" value="Comprar" />
        </label>
      </p>
    </form>    
</td>
  </tr>
  <?
 	}
  ?>
  
      <p align="center"><a href="fin.php">Finalizar compra</a> | <a href="ver_carrito.php">Ver carrito</a></p>
  
</table>
<p>&nbsp;</p>
</body>
</html>