<?php

require("conectarBD.php");

$eliminarBD = "DROP DATABASE DMB ";

$consulta = mysqli_query ($conectar, $eliminarBD);

header("Location: ../index.php");

?>