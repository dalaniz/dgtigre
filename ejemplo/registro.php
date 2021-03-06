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
	.cuadro-login {
		display: flex;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 250px;
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

<div class="titulo_principal"> <label style="background-color: black; color: DodgerBlue; font-size: 35px; font-weight: bold;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="insert_user.php" method="POST" id="form_registro" >
	<div class="cuadro-login">
		<label style="height: 40px; background-color: black; color: DodgerBlue;">INGRESO</label>
		
		<label>Usuario</label>
		<input type="text" id="user" name="user" />
		<label>Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd"/>
		<label>Repetir Contrase&ntilde;a</label>
		<input type="password" id="pwd2" name="pwd2"/>
		<input type="button" value="ACEPTAR" id="loginButton"  onclick="validarPwd();" />
		<a style="color: white; font-size:15px;" href="registro.php">Registrarse</a>
	</div>
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
