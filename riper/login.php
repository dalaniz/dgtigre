<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/common.css" type="text/css" />
<style>
	@import url('https://fonts.googleapis.com/css?family=Merriweather&display=swap');

	.cuadro-login {
		display: flex;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 250px;
		width: 250px;
		background-color: #eb1368;
		color: DodgerBlue; 
		font-size: 18px; 
		font-weight: bold;
		border-radius: 50px;
		font-family: 'Merriweather', serif;
		box-shadow: 10px 10px 8px #888888;
	}
	.opcion-login:hover {
		background-color: #d8d0d0;		
	}
	body {
    margin: 0;
    width: 100%;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-45deg, #13eb96, #e73c7e, #23a6d5, #23d5ab);
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
</style>


</head>

<body style="background-color: #13eb96; color: black">

<div class="titulo_principal" style="background-color: #eb1368"> <label style="background-color: #eb1368; color: black; font-size: 35px; font-weight: bold; font-family:'Merriweather', serif;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="check_user.php" method="POST" >
	<div class="cuadro-login">
		<label style="height: 40px; background-color: #eb1368; color: black; font-size:20px; font-weight:bold;">INGRESO</label>
		
		<label style="color:black">Usuarioaaaaa</label>
		<input style="border-radius:50px" type="text" id="user" name="user" />
		<label style="color:black">Contrase&ntilde;a</label>
		<input style="border-radius:50px" type="password" id="pwd" name="pwd"/>
		<input style="border-radius:50px; margin:10px; font-weight:bold" type="submit" value="ACEPTAR" id="loginButton" />
		<a style="color: white; font-size:15px;" href="registro.php">Registrarse</a>
	</div>
	</form>
</div>

<div class="mensajes" style="background-color:#eb1368">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
