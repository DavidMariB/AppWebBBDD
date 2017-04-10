<?php

require("conectarBD.php");

$id = $_POST['selec_serie'];

$stmt = $conectar->prepare("DELETE FROM series WHERE id_serie = ?");
$stmt->bind_param('i',$id);

if (!$stmt->execute()){
	die ("No se ha podido eliminar la serie");
}

header("Location: listado_series.php");
?>