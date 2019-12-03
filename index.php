<?php
session_start();
session_destroy(); // limpia lo que hubiera en la session
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/common.css" type="text/css" />

</head>

<body>
<div class="titulo_principal"> <label style="background-color: black; color: DodgerBlue; font-size: 35px; font-weight: bold;">DIGIT@LERS - TIGRE</label>
</div>
<div class="workarea">
	<div class="opcion-login" onclick='window.location.href = "riper/login.php";'>
		<label>INGRESO</label>
		<label>Riper</label>
	</div>
	<div class="opcion-login" onclick='window.location.href = "Ramallo/login.php";'>
		<label>INGRESO</label>
		<label>Ramallo</label>
	</div>
	<div class="opcion-login" onclick='window.location.href = "Sakamoto/login.php";'>
		<label>INGRESO</label>
		<label>Sakamoto</label>
	</div>
	<div class="opcion-login" onclick='window.location.href = "Tobias/login.php";'>
		<label>INGRESO</label>
		<label>Tobias</label>
	</div>
	<div class="opcion-login" onclick='window.location.href = "sanchez/login.php";'>
		<label>INGRESO</label>
		<label>Sanchez</label>
	</div>
	<div class="opcion-login" onclick='window.location.href = "ivansalto/login.php";'>
		<label>INGRESO</label>
		<label>Ivan Salto</label>
	</div>
<!--
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
-->
</div>

</body>
</html>
