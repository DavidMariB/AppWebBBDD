<?php
 require("conectarBD.php");
 
 $id = $_POST['selec_peli'];
 $nombre = $_POST["nom"];
 $dir = $_POST["dir"];
 $est = $_POST["est"];

 $stmt = $conectar->prepare("UPDATE peliculas SET nombre = ?, director = ?, estreno = ? WHERE id_pelicula = ?");
 $stmt->bind_param('ssii',$nombre,$dir,$est,$id);
 

	 if($stmt->execute()){
		echo "<p>($nombre) Datos Actualizados<p>";
		header("Location: listado_peliculas.php");
	 }else{
	echo "<p>($nombre) No se ha podido actualizar en estos momentos<p>";
	 }
?>