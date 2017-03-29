<?php
//Nos conectamos con MySql
$conectado = @mysqli_connect ("localhost","admin","adminwebservices");
if (!$conectado) {
	//Si falla la conexion mostramos el mensaje y paramos la ejecucion
	die("No se puede conectar con MySQL.");
}
//Creamos la consulta para conectarnos con la base de datos
$consulta="CREATE DATABASE IF NOT EXISTS DMB;";
// Ejecutamos la consulta.
  $hacerConsulta=mysqli_query ($consulta, $conectado);
?>