<?php

	require("conectarBD.php");
	
	//Creamos la consulta para crear la tabla series
	$consulta="CREATE TABLE IF NOT EXISTS series ";
	$consulta.="( id_serie INT NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(140) NOT NULL, ";
	$consulta.="director CHAR(140), ";
	$consulta.="lanzamiento INT, ";
	$consulta.="temporadas INT NOT NULL, ";
	$consulta.="PRIMARY KEY (id_serie));";

	//Ejecutamos la consulta para SERIES
	$ejecutarConsulta=mysqli_query ($conectar, $consulta);

	//Creamos la consulta para crear la tabla capitulo
	$consulta="CREATE TABLE IF NOT EXISTS capitulo ";
	$consulta.="( id_capitulo INTEGER NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(140) NOT NULL, ";
	$consulta.="temporada CHAR(140) NOT NULL, ";
	$consulta.="duracion INT, ";
	$consulta.="estreno INT, ";
	$consulta.="serie_id INT NOT NULL, ";
	$consulta.="PRIMARY KEY (id_capitulo), ";
	$consulta.="FOREIGN KEY (serie_id) REFERENCES series(id_serie));";

	//Ejecutamos la consulta para CAPITULO
	$ejecutarConsulta=mysqli_query ($conectar, $consulta);

	//Creamos la consulta para crear la tabla peliculas
	$consulta="CREATE TABLE IF NOT EXISTS peliculas ";
	$consulta.="( id_pelicula INT NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(140) NOT NULL, ";
	$consulta.="director CHAR(140), ";
	$consulta.="estreno INT, ";
	$consulta.="PRIMARY KEY (id_pelicula));";
	//Ejecutamos la consulta para PELICULAS
	$ejecutarConsulta=mysqli_query ($conectar, $consulta);
	

	header ("Location: ../index.php");
?>