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
	@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

	.cuadro-login {
		display: flex;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 250px;
		width: 250px;
		background-color: black;
		color: tomato; 
		font-size: 18px; 
		font-weight: bold;
		border-radius: 25px;
		font-family: 'roboto', serif;
		padding-bottom: 25px;
	}

	.cuadro-login label {
	
	}
	.opcion-login:hover {
		background-color: #d8d0d0;		
	}
	body {
    margin: 0;
    width: 100%;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-50deg, lightseagreen, lightskyblue, crimson);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
}

@keyframes gradientBG {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.container {
    width: 100%;
    position: absolute;
    top: 35%;
    text-align: center;
}

h1 {
    font-weight: 300;
}

h3 {
    color: #eee;
    font-weight: 100;
}

h5 {
    color:#eee;
    font-weight:300;
}

a,
a:hover {
    text-decoration: none;
    color: #ddd;
}

.logo {
	width: 175px;
	height: 100px;	
	position: absolute;
	top: 400px;
	
}

body {
	style="background-color: #13eb96; color: black"
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

<div class="titulo_principal"> <label style="background-color: black; color: tomato; font-size: 35px; font-weight: bold;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="insert_user.php" method="POST" id="form_registro" >
	<div class="cuadro-login">
		<label style="height: 40px; background-color: black; color: tomato;">INGRESO</label>
		
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
