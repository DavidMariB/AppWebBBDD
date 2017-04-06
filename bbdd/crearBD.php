<?php

	//Nos conectamos con MySql
	$conectado = @mysqli_connect("localhost","root","");

	//Comprobamos si la conexion se ha producido correctamente
	if (!$conectado) {
		//Si falla la conexion mostramos el mensaje y paramos la ejecucion
		die("No se puede conectar con MySQL.");
	}

	//Creamos la consulta para conectarnos con la base de datos
	$consulta="CREATE DATABASE IF NOT EXISTS DMB;";
	$conectado->query($consulta);


	//Redireccinamos al usuario a la pagina principal
  	header ("Location: ../index.php");
?>