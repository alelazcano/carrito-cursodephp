<?php 
include("conex.php");
$clientes=mysql_query("SELECT * FROM clientes ORDER BY apellido_nombre", $link);
// ORDER BY apellido_nombre ---> ordena alfabeticamente
// SELECT TOP 10  -->  pone solo 10
// SELECT TOP 10 FROM clientes ORDER BY apellido_nombre DESC --> muestra ultimos 10
?>

<!-- si NO esta el where, vienen todos... si ponemos el where, solo viene ese cliente) -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table width="500" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Apellido y Nombre</td>
    <td>Usuario</td>
    <td>Clave</td>
  </tr>
	<?php while($cliente=mysql_fetch_array($clientes))
		{
	?>
  <tr>
    <td><?php echo $cliente['apellido_nombre'];?></td>
    <td><?php echo $cliente['nombre_usuario'];?></td>
    <td><?php echo $cliente['clave'];?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
