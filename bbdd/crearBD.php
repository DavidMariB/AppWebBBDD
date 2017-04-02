<?php
//Nos conectamos con MySql
$conectado = @mysqli_connect("localhost","root","");
if (!$conectado) {
	//Si falla la conexion mostramos el mensaje y paramos la ejecucion
	die("No se puede conectar con MySQL.");
}
//Creamos la consulta para conectarnos con la base de datos
$consulta="CREATE DATABASE IF NOT EXISTS DMB;";

//Creamos la consulta para conectarnos con la base de datos
$consulta="CREATE TABLE IF NOT EXISTS usuarios ";
$consulta.="( id_usuario INT NOT NULL AUTO_INCREMENT, ";
$consulta.=" nombre_usuario CHAR(90) NOT NULL, ";
$consulta.=" password enum('texto', 'sha1', 'md5') NOT NULL, ";
$consulta.=" email varchar(90) NOT NULL, ";
$consulta.=" PRIMARY KEY (id_usuario));";
//Ejecutamos la consulta para USUARIOS
$ejecutarConsulta=mysqli_query ($conectado, $consulta);

// Ejecutamos la consulta.
  $hacerConsulta = mysqli_query($conectado, $consulta);
  echo("¡Base de Datos creada correctamente!");
  
  echo("Ahora seras redireccionado automaticamente");

  header ("Location: ../AppWebBBDD/index.php");
?>