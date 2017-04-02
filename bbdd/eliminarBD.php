<?php

$conectado = @mysqli_connect("localhost","root","");
$eliminarBD = "DROP DATABASE DMB ";

$consulta = mysqli_query ($conectado, $eliminarBD);

?>