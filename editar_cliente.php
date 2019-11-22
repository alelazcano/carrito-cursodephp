<?php 

// conecto con el archivo conex.php que me da los datos de la BD
include("conex.php");

// recibo los datos de la variable anterior
$usuario=$_GET['us'];

$datos=mysql_query("SELECT * FROM clientes WHERE nombre_usuario='$usuario'", $link);

/* datoSSSS toma los datos - dato (sin S) procesa los datos de $datoSSSS // el nombre puede ser cualquier,a pero al usar singular y plural es más fácil recordar */


$dato=mysql_fetch_array($datos);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="alta_cliente" name="alta_cliente" method="post" action="procesa_modificacion_cliente.php?us=<? echo $usuario; ?>">
  <label>Apellido y Nombre
  <input name="apellido_nombre" type="text" id="apellido_nombre" maxlength="50" value="<?php echo $dato['apellido_nombre'] ?>" />
  </label>
  <p>
    <label>Nombre de usuario:
    <input name="nombre_usuario" type="text" id="nombre_usuario" maxlength="12" value="<?php echo $dato['nombre_usuario'] ?>" />
    </label>
  </p>
  <p>
    <label>Contraseña
    <input name="clave" type="password" id="clave" maxlength="12" value="<?php echo $dato['clave'] ?>" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </label>
              </p>
  <p><a href="procesa_baja_cliente.php?us=<? echo $usuario; ?>">Dar de baja</a></p>
</form>
</body>
</html>
