<?php
include_once("../inc/check_session.php");
$option = isset($_GET['option']) ? $_GET['option'] : "";
$msg = isset($_GET['msg']) ? $_GET['msg'] : "";
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/common.css" type="text/css" />

</head>

<body>

<div class="menu"> 
	 <a href="http://www.digitalers.com.ar/" target="_blank" style="margin-left:10px; margin-right: 10px;"><img src="../img/logo_telecom_digitalers.png" alt="DIGIT@LERS" height="32" style> </a>
	 <div class="menu_option" onclick="window.location.href = 'menu.php?option=encuesta';">Encuestas</div>
	 <div class="menu_option">Resultados</div>
	 <div class="menu_option">Acerca de</div>
	 <div class="menu_option">Salir</div>
</div>

<div class="workarea">
<?php
if( $option === "encuesta" )
	include_once("encuesta.php");
else if( $option === "resultados" )
	include_once("resultados.php");
else if( $option === "acercade" )
	include_once("acercade.php");
else if( $option === "salir" ){
	session_destroy();
	header('Location: ../index.php'); 
	die(); // corto la ejecucion
}
?>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
