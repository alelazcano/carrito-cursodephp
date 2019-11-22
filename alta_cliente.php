<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="alta_cliente" name="alta_cliente" method="post" action="procesa_alta_cliente.php">
  <label>Apellido y Nombre
  <input name="apellido_nombre" type="text" id="apellido_nombre" maxlength="50" />
  </label>
  <p>
    <label>Nombre de usuario:
    <input name="nombre_usuario" type="text" id="nombre_usuario" maxlength="12" />
    </label>
  </p>
  <p>
    <label>Contraseña
    <input name="clave" type="password" id="clave" maxlength="12" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </label>
  </p>
</form>
</body>
</html>
