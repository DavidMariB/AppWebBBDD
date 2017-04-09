<?php
 require("conectarBD.php");
 
 $name = $_POST['selec_peli'];
 $nombre = $_POST["nom"];
 $temp = $_POST["temp"];
 $est = $_POST["est"];

 $query="UPDATE peliculas SET nombre = $nombre, temporadas = $temp, estreno= $est WHERE id_serie = $name";


 mysqli_query($conectar,$query);

	 if(mysqli_affected_rows()>=0){
	echo "<p>($nombre) Datos Actualizados<p>";
	 }else{
	echo "<p>($nombre) No se ha podido actualizar en estos momentos<p>";
	 }


	header("Location: ../index.php");
?>