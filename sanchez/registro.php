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
<link rel="stylesheet" href="../css/sanchez.css" type="text/css" />

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

<div class="titulo_principal"> <label>DIGIT@LERS - TIGRE</label>
</div>

<div class="login-box">
	<img class="logo" src="../img/logo.svg" alt="logo digitalers">
	<h1>Registrarse</h1>
	<form action="insert_user.php" method="POST" id="form_registro" >
			
		<label>Usuario</label>
		<input type="text" id="user" name="user" placeholder="Ingrese Usuario"/>
		<label>Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd" placeholder="Ingrese Contraseña"/>
		<label>Repetir Contrase&ntilde;a</label>
		<input type="password" id="pwd2" name="pwd2" placeholder="Repita la Contraseña"/>
		<input type="button" value="ACEPTAR" id="loginButton"  onclick="validarPwd();" /><br><br>
		<a href="login.php">Volver al login</a>
	
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
