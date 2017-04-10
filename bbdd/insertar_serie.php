<?php

require("conectarBD.php");

$insertar = "INSERT INTO series (nombre, temporadas, lanzamiento) 
			VALUES ('$_POST[nom]', '$_POST[temp]', '$_POST[est]')";

if (!mysqli_query($conectar, $insertar)){
	die ("No se ha podido añadir la serie");
}

header("Location: listado_series.php");
?>