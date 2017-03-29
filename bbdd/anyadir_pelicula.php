<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Añadir Pelicula</title>
</head>

<body bgcolor="#14ADCC">
<div><a href="index.php"></a></div>

<div id="Layer1">
<p align="center" class="Estilo1">Formulario para a&ntilde;adir una Pelicula </p>
  <form class="myform" id="form1" name="form1" method="post" action="">
   <p>
      <label for="textfield">Nombre</label>
      <input type="text" name="nombre" id="nombre" />
      <label for="textarea"></label>
    </p>
	 <p>
      <label for="textfield">Duracion</label>
      <input type="text" name="dur" id="dur" />
      <label for="textarea"></label>
    </p>
	<p>
      <label for="textfield">Estreno</label>
      <input type="text" name="est" id="est" />
      <label for="textarea"></label>
    </p>
	<input name="enviar" type="submit" value="Añadir" />
  </form>
</div>

<p>
</p>
<div id="Layer2">
  <a href="index.php" target="marco_der" class="button button-blue">
<span>Volver</span></a></div>
</body>
</html>