<?php 
// conecto con el archivo conex.php que me da los datos de la BD
include("conex.php");

$usuario=$_GET['us'];

// verifico que se completaron los datos
$error=0;

// acá le decimos a a MYSQL que BORRE los datos del usuario
// SI NO PONEMOS EL WHERE SE MODIFICAN TODOS LOS USUARIOS, un desastre... ¬¬
	if (!mysql_query("DELETE FROM clientes WHERE nombre_usuario='$usuario'", $link))
		{
			$error=2;
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php 
if($error==0)
	{
		echo "Sus datos se borraron con éxito";
	}
if($error==2)
	{
		echo "ERROR al intentar borrar los datos. Intente nuevamente.<br /> Ref:" .mysql_error($link);
	}
?>

</body>
</html>
s