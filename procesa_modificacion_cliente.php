<?php 
// conecto con el archivo conex.php que me da los datos de la BD
include("conex.php");
$usuario=$_GET['us'];
// presento los datos del formulario anterior en alta_cliente.php
$nombre=$_POST['apellido_nombre'];
$usuario=$_POST['nombre_usuario'];
$clave=$_POST['clave'];
// verifico que se completaron los datos
$error=0;
if ($nombre=="" or $usuario=="" or $clave=="")
	{
		$error=1;
	}
else{
// acá le decimos a a MYSQL que datos hay y que los guarde -- INSERT INTO / insertar en: "nombre de tabla" - clientes / campo,campo,campo,campo
// $link conecta todo esto con la BD
// el ! antes de mysql_query le dice "si no podés cargar esto, da error = 2
// SI NO PONEMOS EL WHERE SE MODIFICAN TODOS LOS USUARIOS, un desastre... ¬¬
	if (!mysql_query("UPDATE clientes SET apellido_nombre='$nombre',nombre_usuario='$usuario',clave='$clave' WHERE nombre_usuario='$usuario'", $link))
		{
			$error=2;
		}
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
		echo "Los datos se cargaron con éxito";
	}
if($error==1)
	{
		echo "Dejó un campo del formulario en blanco. Por favor, complete todos los campos del formulario.";
	}
if($error==2)
	{
		echo "ERROR al intentar cargar los datos. Intente nuevamente.<br /> Ref:" .mysql_error($link);
	}
?>

</body>
</html>
