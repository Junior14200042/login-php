<?php   
	include("config/config.php");
	session_start();
	if (isset($_POST['submit'])) {

		$user=$_POST['user'];
		$pass=$_POST['pass'];

	$sql="SELECT * FROM usuario where user = '$user' and pass='$pass'";
	$resultado=$conexion->query($sql);
	$count=$resultado->num_rows;

	if($count>0){
		$_SESSION['logged']=true;
		$_SESSION['user']=$user;
		header("location:contenido.php");
	}else{
		echo "usted debe registrarse";
		header("location:views/login.view.php");
	}
	

	}

 ?>