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
	display:flex;
	justify-content: center;
	align-items: center;
	height: 100 px;
	background-color: #173c68;
	font-family: "verdana";
	font-size: 30px;
	color: #002b80 ;
	
	}

	.cuadro-login {
		display: flex;
		border-radius: 25px;
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		height: 270px;
		width: 240px;
		background-color:  #f3ffbd;
		color: #002b80; 
		font-size: 20px; 
		font-weight: bold;
		/*border-radius: 25px;*/
	}
	.opcion-login:hover {
		background-color: #d8d0d0;		
	}
	body 
	{ background: rgb(112,193,179);
      background: linear-gradient(90deg, rgba(112,193,179,1) 0%, rgba(55,121,139,1) 50%, rgba(35,110,170,1) 100%);;
	  font-family: Verdana, Geneva, sans-serif;
	}
</style>


</head>

<body>

<div class="titulo_principal"> <label style="background-color: #173c68; color: white; font-size: 30px; font-weight: bold;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="check_user.php" method="POST" >
	<div class="cuadro-login">
		<label style="height: 40px; background-color: #f3ffbd; color: #002b80;">INGRESO</label>
		
		<label>Usuario</label>
		<input type="text" id="user" name="user" />
		<label>Contrase&ntilde;a</label>
		<input type="password" id="pwd" name="pwd"/>
		<input type="submit" value="ACEPTAR" id="loginButton" />
		<a style="color: #ff1654; font-size:15px;" href="registro.php">Registrarse</a>
	</div>
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
