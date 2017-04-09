<?php
 require("conectarBD.php");

 $name = (isset($_GET["nombre"]));
 $nombre = $_POST["nombre"];
 $temp = $_POST["temp"];
 $est = $_POST["est"];

 $query="UPDATE series SET nombre = '.$nombre.', temporadas = '.$temp.', estreno= '.$est.' WHERE nombre='$nombre'";


 mysqli_query($conectar,$query);

	 if(mysqli_affected_rows()>=1){
	echo "<p>($nombre) Datos Actualizados<p>";
	 }else{
	echo "<p>($nombre) No se ha podido actualizar en estos momentos<p>";
	 }
?>