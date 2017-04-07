<?php
 require("conectarBD.php");

 $nombre = mysqli_real_escape_string($_POST["nombre"]);
 $temp = mysql_real_escape_string($_POST["temp"]);
 $est = mysql_real_escape_string($_POST["est"]);

 $query="UPDATE series SET nombre = '.$nombre.', temporadas = '.$temp.', estreno= '.$est.' WHERE nombre='$nombre'";


 mysql_query($conectar,$query)or die(mysql_error());
	 if(mysql_affected_rows()>=1){
	echo "<p>($id) Datos Actualizados<p>";
	 }else{
	echo "<p>($id) No se ha podido actualizar en estos momentos<p>";
	 }
?>