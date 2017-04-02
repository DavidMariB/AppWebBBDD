<?php

$conectar = mysqli_connect("localhost","root","","dmb");

$insertar = "INSERT INTO series (nombre, temporadas, lanzamiento) 
			VALUES ('$_POST[nom]', '$_POST[temp]', '$_POST[est]')";

if (!mysqli_query($conectar, $insertar)){
	die ("No se ha podido añadir la serie (Error:". mysqli_connect_error() .")");
}

echo("Serie añadida correctamente. Ahora seras redireccionado a la pagina principal");

header("Location: ../index.php")
?>