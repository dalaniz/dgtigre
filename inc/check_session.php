<?php
session_start();

// si vino un tipo de usuario lo seteo
if (isset($_GET['tipo_user'])) {
	// borro alguna session que pudiera haber
	session_destroy();
	session_start();
	$_SESSION["user"]["tipo"] = $_GET['tipo_user']; 
}

if( !isset( $_SESSION["user"]["tipo"]) ) {
	header('Location: index.php');
}	
else {
	if( !isset( $_SESSION["user"]["login_ok"]) ) {		
		if( $_SESSION["user"]["tipo"] == 0 ) 
			header('Location: ejemplo/login.php');
		if( $_SESSION["user"]["tipo"] == 1 ) 
			header('Location: ejemplo/login.php');
		if( $_SESSION["user"]["tipo"] == 2 ) 
			header('Location: ejemplo/login.php');
		if( $_SESSION["user"]["tipo"] == 3 ) 
			header('Location: ejemplo/login.php');
		if( $_SESSION["user"]["tipo"] == 3 ) 
			header('Location: ejemplo/login.php');
	}
}