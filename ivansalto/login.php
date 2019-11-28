<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/common.css" type="text/css" />

<style>
	.cuadro-login {
		display: flex;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 150px;
		width: 250px;
		background-color: black;
		color: DodgerBlue; 
		font-size: 20px; 
		font-weight: bold;
		/*border-radius: 25px;*/
	}
	.opcion-login:hover {
		background-color: #d8d0d0;		
	}
</style>


</head>

<body>

<div class="titulo_principal"> <label style="background-color: black; color: white; font-size: 35px; font-weight: bold;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="check_user.php" method="POST" >
	<div class="cuadro-login">
		<label style="color: white;">INGRESO</label>
		
		<label style="color: white;">Usuario</label>
		<input type="text" id="user" name="user" />
		<label style="color: white;">Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd"/>
		<input type="submit" value="ACEPTAR" id="loginButton" />
		<a style="color: white; font-size:15px;" href="registro.php">Registrarse</a>
	</div>
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
