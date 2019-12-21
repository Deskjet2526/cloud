<?php
require 'database.php';


	$query = "SELECT sitio_nombre, coordenadas, imagen FROM SITIOS";

	$resultado = mysqli_query( $conexion, $query );

	$rows = array();
	while($r = mysqli_fetch_assoc($resultado)) {
	    $rows[] = $r;
	}

	echo json_encode($rows);


?>