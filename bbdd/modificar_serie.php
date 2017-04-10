<?php
 require("conectarBD.php");

 $name = $_POST['selec_serie'];
 $nombre = $_POST["nom"];
 $temp = $_POST["temp"];
 $est = $_POST["est"];

 $stmt = $conectar->prepare("UPDATE series SET nombre = ?, temporadas = ?, lanzamiento = ? WHERE id_serie = ?");
 $stmt->bind_param('siii',$nombre,$temp,$est,$name);
 

	 if($stmt->execute()){
		echo "<p>($nombre) Datos Actualizados<p>";
		header("Location: listado_series.php");
	 }else{
	echo "<p>($nombre) No se ha podido actualizar en estos momentos<p>";
	 }


	
?>