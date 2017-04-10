<?php

require("conectarBD.php");

$id = $_POST['selec_peli'];

$stmt = $conectar->prepare("DELETE FROM peliculas WHERE id_pelicula = ?");
$stmt->bind_param('i',$id);

if (!$stmt->execute()){
	die ("No se ha podido eliminar la pelicula");
}

header("Location: listado_peliculas.php");
?>