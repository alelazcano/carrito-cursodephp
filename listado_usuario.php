<? 
include("conex.php");
$clientes=mysql_query("SELECT * FROM clientes", $link)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style></head>
<body>
<table width="466" border="0" cellspacing="2" cellpadding="1">
  <tr>
    <td width="163">nombre y apellido</td>
    <td width="153">usuario</td>
    <td width="136">clave</td>
  </tr>
  <? WHILE ($cliente=mysql_fetch_array($clientes))
  {
  ?>
  <tr>
    <td><? echo $cliente['apellido_nombre'];?></td>
    <td><? echo $cliente['nombre_usuario'];?></td></td>
    <td><? echo $cliente['clave'];?></td></td>
  </tr>
  <?
  } // cierre de while
  ?>
</table>
</body>
</html>
  </table>
</body>
</html>