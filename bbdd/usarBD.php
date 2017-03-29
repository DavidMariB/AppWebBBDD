<?php

//Definimos las variables para poder conectarnos a la BD
 $servidor ="localhost";
 $usuario = "root";
 $clave ="";
 //Nos conectamos con las variables creadas anteriormente
 $conectado = @mysqli_connect ($servidor,$usuario,$clave);

 if (!$conectado) {
	//Si falla la conexion mostramos el mensaje y paramos la ejecucion
	die("No se puede conectar con MySQL");
}

//Ponemos en uso la base de datos
mysqli_select_db ($conectado, "DMB");

?>