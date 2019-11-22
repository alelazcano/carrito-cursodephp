<?
include("conex.php");
	$usuario=$_POST['usuario']; 
	$clave =$_POST['clave'];
	$personas=mysql_query("SELECT* FROM clientes WHERE nombre_usuario = '$usuario' and clave = '$clave'",$link); 

if(mysql_num_rows($personas)==1)
{
	header("Location:editar_cliente.php?us=".$usuario);
}
else
{
	echo"nombre de usuario o pasword incorrecto";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>

