<?
include("conex.php");
$a=$_POST['codigo'];
$b=$_POST['descripcion'];
$c=$_POST['precio'];
$d=$_POST['foto'];
$error=0;
if($a=="codigo" or $b== "descripcion" or $c== "precio" or $c== "foto")
{
	$error=1;
}
else
{
	if(!mysql_query("INSERT INTO productos(codigo, descripcion, precio, foto) VALUES('$a','$b','$c','$d')",$link))
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
<?
if($error==0)
{
echo "los datos se cargaron con exito";
}
if($error==1)
{
echo "dejaste un campo en blanco";
}
if($error==2)
{
echo "error al intentar cargar los datos". mysql_error($link);
}
?>