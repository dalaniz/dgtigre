<?php
session_start();
session_destroy();
session_start();
$_SESSION["user"]["tipo"] = 0;
$msg = isset($_GET['msg']) ? $_GET['msg'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/common.css" type="text/css" />

<style>
	body { 
	 background-image: linear-gradient( #FF9933 , #66FFFF);
	}	
	
	.titulo_principal {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100px;
		background-color: #ff9900;
		font-family: "Courier New";
		font-size: 80px;
		color: #4dffcf;
		
	}	
	.cuadro-login {
		display: flex;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 400px;
		width: 350px;
		background-color: #ffad33;
		color: #b3ffe6; 
		font-size: 30px; 
		font-weight: bold;
		font-family: "Courier New";
		border-radius: 25px;
	}
	.opcion-login:hover {
		background-color: #d8d0d0;		
	}
</style>

<script>
function validarPwd() {
	var pwd1 = document.getElementById('pwd').value;
	var pwd2 = document.getElementById('pwd2').value;
	
	if (pwd1 != pwd2) {
		alert("las contraseñas no coinciden");
		return false;
	}
	
	// pasó la validación. Envío el formulario
	document.getElementById("form_registro").submit(); 
}	
	
</script>

</head>

<body>

<div class="titulo_principal"> <label style="background-color: #ff9900; color: #4dffcf; font-size: 80px;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="insert_user.php" method="POST" id="form_registro" >
	<div class="cuadro-login">
		<label style="height: 40px; background-color: #ffad33; color: #4dffcf;">INGRESO</label>
		
		<label>Usuario</label>
		<input type="text" id="user" name="user" />
		<label>Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd"/>
		<label>Repetir Contrase&ntilde;a</label>
		<input type="password" id="pwd2" name="pwd2"/>
		<input type="button" value="ACEPTAR" id="loginButton"  onclick="validarPwd();" />
		<a style="color: #004d4d; font-size:15px;" href="registro.php">Registrarse</a>
	</div>
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
