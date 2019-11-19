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


</head>

<body>

<div class="titulo_principal"> <label style="background-color: black; color: DodgerBlue; font-size: 35px; font-weight: bold;">DIGIT@LERS - TIGRE</label>
</div>

<div class="workarea">
	<form action="check_user.php" method="POST" >
	<div class="cuadro-login">
		
		<label>NO IMPLEMENTADO AUN!!</label>
		<a style="color: white; font-size:15px;" href="login.php">volver</a>
	</div>
	</form>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
