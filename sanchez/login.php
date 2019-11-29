<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/sanchez.css?v=<?php echo(rand()); ?>" type="text/css" />

</head>

<body>

<div class="titulo_principal"> <label>DIGIT@LERS - TIGRE</label>
</div>

<div class="login-box">
	<img class="logo" src="../img/logo.svg" alt="logo digitalers">
	<h1>Ingreso</h1>
	<form action="check_user.php" method="POST" >			
		<label for="usuario">Usuario</label>
		<input type="text" id="user" name="user" placeholder="Ingrese Usuario" />
		<label for="contrasenia">Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd" placeholder="Ingrese Contraseña" />
		<input type="submit" value="ACEPTAR" id="loginButton" /> <br><br>
		<a href="registro.php">Registrarse</a>	
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
