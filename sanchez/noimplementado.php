<?php
include_once("../inc/check_session.php");
$msg = "";
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/sanchez.css" type="text/css" />

</head>

<body>
<?php include_once("menu.php"); ?>


<div class="workarea">

	<div class="opcion-login">
		<label>OPCI&Oacute;N A&Uacute;N NO</label>
		<label>IMPLEMENTADA</label>
	</div>

</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
