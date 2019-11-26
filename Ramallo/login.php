<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>
	

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/common.css" type="text/css" />

<style>
	
	
	
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

	body { 
	 background-image: linear-gradient( #FF9933 , #66FFFF);
	}	
	.cuadro-login {
		display: flex;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 400px;
		width: 350px;
		background-color:  #ffad33;
		color: #b3ffe6; 
		font-size: 30px; 
		font-weight: bold;
		font-family: "Courier New";
		border-radius: 25px;
		}
		
	.opcion-login:hover {
		background-color: #b3ffe6;		
	}
</style>


</head>

<body>


<div class="titulo_principal"> DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="check_user.php" method="POST" >
	<div class="cuadro-login">
		<label style="height: 60px; background-color:  #ffad33; color: #4dffcf;">INGRESO</label>
		
		<label>Usuario</label>
		<input type="text" id="user" name="user" />
		<label>Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd"/>
		<input type="submit" value="ACEPTAR" id="loginButton" />
		<a style="color: #004d4d; font-size:15px;" href="registro.php">Registrarse</a>
	</div>
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
