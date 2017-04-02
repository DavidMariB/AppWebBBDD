<?php
$conectado = mysqli_connect("localhost","root","","dmb");

$consulta  = "SELECT nombre,lanzamiento,temporadas FROM series;";

$query = mysqli_query($conectado,$consulta);

$resultado = mysql_query($conexion, $query) or die(mysql_error()); 
$row_resultado = mysql_fetch_assoc($resultado);

echo $row_gastos['nombre'];
echo $row_gastos['temporadas'];
echo $row_gastos['lanzamiento'];

?>