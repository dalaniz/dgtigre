<?php
//error_reporting(E_ALL & ~E_NOTICE);

include_once("../inc/conexion.php");

$usuario = $_POST["user"]  ? $_POST["user"] : "";
$pwd  = $_POST["pwd"]   ? $_POST["pwd"]  : "";

if (!$usuario  or !$pwd ) { // si no hay usuario o contraseña
	header('Location: registro.php?msg=Debe ingresar usuario y contraseña'); // redirecciono a registro nuevamente
	die(); // corto la ejecucion
}

try {
	
	// creo el objeto de conexion
	$pdo = new PDO($dsn, $user, $passwd);
    $stmt = $pdo->prepare( "INSERT INTO usuario_ex (usuario,pwd) VALUES (:usuario, :pwd )" );
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // esto es necesario pq si hay errores no los reporta!!!!
    try {
 
		//$dbh->beginTransaction();
        $resultado = $stmt->execute(array('usuario' => $usuario, 'pwd' => $pwd));

        //$pdo->commit();
		header('Location: login.php?msg=Felicitaciones!! Se ha creado su usuario con los datos ingresados y ID:'.$pdo->lastInsertId() );
		
    } catch(PDOExeption $e) {
        
		//$pdo->rollback();
        // print "Error!: " . $e->getMessage() . "</br>";
		header('Location: registro.php?msg=Hubo un error insertando el usuario en la base de datos.'); 
		die(); // corto la ejecucion

	}
} catch( PDOExecption $e ) {
    //print "Error!: " . $e->getMessage() . "</br>";
	header('Location: registro.php?msg=Hubo un error conectando a la base de datos. Verifique si MySQL está activo.'); 
	die(); // corto la ejecucion
} 
