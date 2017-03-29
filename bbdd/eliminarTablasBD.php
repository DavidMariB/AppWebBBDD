<?php
	
	require("usarBD.php");
	$consulta="DELETE * FROM peliculas; ";
	$consulta="DELETE * FROM series; ";
	$consulta="DELETE * FROM capitulo;";

	echo("Lista eliminada satisfactoriamente")
?>