<?php
/*$dbconn = pg_connect("user=postgres password=12345 port=5432 host=localhost dbname=prueba")
	 or die('No se ha podido conectar: ' . pg_last_error());


    $insert = <<<RAM
		INSERT INTO prueba2 (id,nombre) VALUES (1,'HOLA')
RAM;

	$result = pg_query($insert) or die('La consulta fallo: ' . pg_last_error());

	echo $result;

	pg_free_result($result);

	// Cerrando la conexión
	pg_close($dbconn);*/
 ?>

 <?php
$dbconn = pg_connect("host='localhost' port=5432 dbname=prueba user=postgres password=12345");
	 if(!$dbconn)
	 	echo "error";
	 else
	 	echo "conexion exitosa";

    $insert = <<<RAM
		INSERT INTO prueba2 (id,nombre) VALUES (1,'HOLA')
RAM;

	$result = pg_query($insert) or die('La consulta fallo: ' . pg_last_error());

	echo $result;

	pg_free_result($result);

	// Cerrando la conexión
	pg_close($dbconn);
 ?>








