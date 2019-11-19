<?php
session_start();
if( !isset( $_SESSION["user"]["tipo"]) ) {
	session_destroy();
	header('Location: ../index.php');
}	
