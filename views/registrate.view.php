<?php session_start();
	if(isset($_SESSION["logged"])){
		header("location:../contenido.php");
	}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">
		<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<h3 style="margin-left:400px;">Registrate</h3>
			<div class="form-group">
					<label for="nombre" class="control-label col-sm-2">Usuario</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Usuario" id="user" name="user">
				</div>
			</div>
			<div class="form-group">
				<label for="pass" class="control-label col-sm-2">Contraseña</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" placeholder="password" id="pass" name="pass">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-6">
					<input type="submit" class="form-control btn-success" name="submit" value="Registrarse">
				</div>
				<br>
				<?php if(!empty($error)){ ?>
					<h3><center><?php echo $error; ?></center></h3>
				<?php } ?>
		
			</div>
		</form>
	</div>
	
</body>
</html>