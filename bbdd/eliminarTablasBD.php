<?php
	
	require("conectarBD.php");
	
	$consulta="DELETE * FROM peliculas; ";
	$consulta="DELETE * FROM series; ";
	$consulta="DELETE * FROM capitulo;";

	header ("Location: ./index.php");
?>