<?php session_start();
	if (!isset($_SESSION['logged'])) {
			header("location:index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Bienvenido <?php echo $_SESSION['user']; ?></h3>
	<a href="cerrar.php">cerrar sesion</a>
</body>
</html>