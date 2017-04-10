<?php

	require("conectarBD.php");
	
	//Creamos la consulta para crear la tabla series
	$consulta="CREATE TABLE IF NOT EXISTS series ";
	$consulta.="( id_serie INT NOT NULL AUTO_INCREMENT, ";
	$consulta.="nombre CHAR(140) NOT NULL, ";
	$consulta.="lanzamiento INT, ";
	$consulta.="temporadas INT NOT NULL, ";
	$consulta.="PRIMARY KEY (id_serie));";

	//Ejecutamos la consulta para SERIES
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