<!DOCTYPE html>

<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/common.css" type="text/css" />

	<style> 
	body {
		margin: 0;
		background-image: linear-gradient( #FF9933 , #66FFFF);
		font-family: "Courier New";
	}
	
	.menu {
		height: 100px;
		overflow: hidden;
		background-color: #ff9900;
	}
	
	.menu a {
		float: left;
		color:;
		text-align:center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: ;
	}	
	
	.menu a:hover {
		background-color: #b3ffe6;
		color:#ff9900; 
	}	
	
	</style>
</head>

<body> 

<div class="menu"> 
	 <a href="http://www.digitalers.com.ar/" target="_blank" style="margin-left:10px; margin-right: 10px;"><img src="../img/logo_telecom_digitalers.png" alt="DIGIT@LERS" height="32" style> </a>
	 <div class="menu_option" onclick="window.location.href = 'encuestas.php';">Encuestas</div>
	 <div class="menu_option" onclick="window.location.href = 'noimplementado.php';">Resultados</div>
	 <div class="menu_option" onclick="window.location.href = 'noimplementado.php';">Acerca de</div>
	 <div class="menu_option" onclick="window.open('tablajquery.html', '_blank');">Tabla JQuery</div>
	 <div class="menu_option" onclick="window.location.href = '../index.php';">Salir</div>
</div>

</body>
</html>