<?
include("conex.php");
session_start();
if(isset($_POST['cant']))
{
	$_SESSION['cantidad']=$_POST['cant'];
	$_SESSION['codigo']=$_GET['cod'];
}

if($_SESSION['logueado']=="NO") 
{
	$_SESSION['destino']="procesa_venta.php";
	header("Location:login.php");
	exit();
}
else
{
	if($_SESSION['venta_iniciada']=="NO") 
	{
	
			$datos_fecha=getdate();
			$fecha=strval($datos_fecha['year'])."-".strval($datos_fecha['mon'])."-".strval($datos_fecha['mday']);
			$usuario_activo=$_SESSION['usuario']; 
			mysql_query("INSERT INTO ventas(fecha,cliente) VALUES('$fecha','$usuario_activo')",$link);
			$_SESSION['nro_venta']=mysql_insert_id($link); // toma el numero de venta y lo mantiene en la sesion activa para no perderlo
			$_SESSION['venta_iniciada']="SI";
	}
}		
$cantidad=$_SESSION['cantidad'];
$producto=$_SESSION['codigo'];
$nro_venta=$_SESSION['nro_venta'];
mysql_query("INSERT INTO carrito (nro_venta,producto,cantidad) VALUES ('$nro_venta','$producto','$cantidad')", $link);
header("Location:catalogo.php");
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