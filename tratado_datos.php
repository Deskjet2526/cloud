<?php 
require 'database.php';
if ($_FILES["imagen"]["name"] != '') {
	
	
	$test = explode(".", $_FILES["imagen"]["name"]);
	$extension = end($test);
	$nombre = rand(100,999).'.'.$extension;
	$ruta = 'imagenes/'.$nombre;
	move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

	$nombre = $_POST['nombre'];
	$coordenadas = $_POST['coordenadas2'];

	
	$query = "INSERT INTO SITIOS (sitio_nombre, coordenadas, imagen) VALUES ('$nombre','$coordenadas','$ruta')";

	$resultado = mysqli_query( $conexion, $query );

}
?>