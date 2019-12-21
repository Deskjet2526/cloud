<?php 
$usuario = "root";
$contrasena = "";
$servidor = "35.225.209.203";
$basededatos = "mapas";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena );

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "no se ha podido conectar a la base de datos" );

?>