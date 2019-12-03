<?php
include_once("../inc/check_session.php");
$msg = "";
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
	height: 300px;
	width: 250px;
	background-color: #eb1368;
	color: DodgerBlue; 
	font-size: 18px; 
	font-weight: bold;
	border-radius: 50px;
	font-family: 'Merriweather', serif;
	box-shadow: 10px 10px 8px #888888;
	padding-bottom: 50px;
}

.opcion-login {
	background-color: #eb1368;
	color:black;
	font-family: 'Merriweather', serif;
	display: flex;
	flex-direction: column;
	justify-content: center; 
	align-items: center;


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

.logo {
width: 175px;
height: 100px;	
position: absolute;
top: 420px;

}

body {
style="background-color: #13eb96; color: black"
}

.menu {
	display: flex;
	justify-content: start;
	align-items: center;
	height: 50px;
	background-color: #eb1368 ;
}

.menu_option {
	display: flex; 
	flex-direction: column;
	justify-content: center; 
	align-items: center;
	height: 50px;
	/*width: 250px;*/		
	color: #fff; 
	font-size: 20px; 
	font-weight: bold;
	border-radius: 15px;
	padding-left: 10px;
	background-color: #eb1368;
	padding-right: 10px;
	margin:20px;
}
.menu_option:hover {
	color: white;
}
</style>

</head>

<body>
<?php include_once("menu.php"); ?>


<div class="workarea">

	<div class="opcion-login">
		<label>Bienvenidx</label>
		<label><?php echo($_SESSION['user']['usuario']); ?></label>
	</div>

</div>

<div class="mensajes" style="background-color:#eb1368" >
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
