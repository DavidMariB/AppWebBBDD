<?php

	//Insertamos usarDB para poder conectarnos a la Base de Datos y ponerla en uso
	require("usarBD.php");
	
	//Creamos la consulta para crear la tabla series
	$consulta="CREATE TABLE IF NOT EXISTS series ";
	$consulta.="( id_serie INT NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(45) NOT NULL, ";
	$consulta.="director CHAR(45), ";
	$consulta.="lanzamiento DATE, ";
	$consulta.="temporadas INT NOT NULL, ";
	$consulta.="PRIMARY KEY (id_serie));";

	//Ejecutamos la consulta para SERIES
	$ejecutarConsulta=mysqli_query ($conectado, $consulta);

	//Creamos la consulta para crear la tabla capitulo
	$consulta="CREATE TABLE IF NOT EXISTS capitulo ";
	$consulta.="( id_capitulo INTEGER NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(45) NOT NULL, ";
	$consulta.="temporada CHAR(45) NOT NULL, ";
	$consulta.="duracion INT, ";
	$consulta.="estreno DATE, ";
	$consulta.="serie_id INT NOT NULL, ";
	$consulta.="PRIMARY KEY (id_capitulo), ";
	$consulta.="FOREIGN KEY (serie_id) REFERENCES series(id_serie));";

	//Ejecutamos la consulta para CAPITULO
	$ejecutarConsulta=mysqli_query ($conectado, $consulta);

	//Creamos la consulta para crear la tabla peliculas
	$consulta="CREATE TABLE IF NOT EXISTS peliculas ";
	$consulta.="( id_pelicula INT NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(45) NOT NULL, ";
	$consulta.="director CHAR(45), ";
	$consulta.="estreno DATE, ";
	$consulta.="PRIMARY KEY (id_pelicula));";
	//Ejecutamos la consulta para PELICULAS
	$ejecutarConsulta=mysqli_query ($conectado, $consulta);

	echo("La lista ha sido creada correctamente");
	echo("Ahora seras redireccionado automaticamente");

	header ("Location: ../index.php");
?>