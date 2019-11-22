

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="carga_productos" name="carga_productos" method="post" action="procesa_carga_productos.php">
  <label>Descripción
  <input name="descripcion" type="text" id="descripcion" maxlength="50" />
  </label>
  <p>
    <label>Precio
    <input name="precio" type="precio" id="clave" maxlength="12" />
    </label>
  </p>
  <p>
    <label>Foto
    <input type="text" name="foto" id="foto" />
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
