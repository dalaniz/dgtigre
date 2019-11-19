<?php
session_start();
session_destroy(); // limpia lo que hubiera en la session
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/common.css" type="text/css" />

<style>
	.opcion-login {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		height: 100px;
		width: 180px;
		background-color: black;
		color: DodgerBlue; 
		font-size: 20px; 
		font-weight: bold;
		border-radius: 25px;
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
	<div class="opcion-login" onclick='window.location.href = "ejemplo/login.php";'>
		<label>INGRESO</label>
		<label>EJEMPLO</label>
	</div>
	<div class="opcion-login">
		<label>INGRESO</label>
		<label>ENCUESTADOR</label>
	</div>
	<div class="opcion-login">
		<label>INGRESO</label>
		<label>ENCUESTADO</label>
	</div>
	<div class="opcion-login">
		<label>INGRESO</label>
		<label>PROFESOR</label>
	</div>
	<div class="opcion-login">
		<label>INGRESO</label>
		<label>ALUMNO</label>
	</div>
</div>

</body>
</html>
