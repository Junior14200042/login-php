<?php 

	define('DB_HOST',"localhost");
	define('DB_USER',"root");
	define('DB_PASS', "0110");
	define('DB_NAME', "ejercicio1");
 	$conexion=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

 	if($conexion->connect_errno){
 		echo "error".$conexion->connect_error;
 	}
 ?>