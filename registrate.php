<?php 
	include("config/config.php");
	$error='';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(!empty($_POST['user']) and !empty($_POST['pass'])){
			
			$usuario=$conexion->$_POST['user'];
			$pass=$_POST['pass'];

			$sql="SELECT * FROM usuario where user='$usuario'";
			$resultado=$conexion->query($sql);
			$count=$resultado->num_rows;

			if($count>0){
				echo "Este usuario ya existe busque otro nombre de usuario";
				header("location:views/registrate.view.php");
			}else{
				$sql1="INSERT INTO usuario(user,pass) VALUES('$usuario','$pass')";
				$conexion->query($sql1);
				if($conexion){
					echo "Registrado exitosamente";
					header("location:views/login.view.php");
				}
			}
		}else{
			$error.="Ingrese campos";
		}
	}
	require 'views/registrate.view.php';
 ?>