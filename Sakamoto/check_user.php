<?php
//error_reporting(E_ALL & ~E_NOTICE);

include_once("../inc/conexion.php");

$usuario = $_POST["user"]  ? $_POST["user"] : "";
$pwd  = $_POST["pwd"]   ? $_POST["pwd"]  : "";

if (!$usuario  or !$pwd )
	header('Location: login.php?msg=Debe ingresar usuario y contraseña');

// creo el objeto de conexion
$pdo = new PDO($dsn, $user, $passwd);
// preparo la sentencia sql - "stmt es la abreviatura de statement"
$stmt = $pdo->prepare("SELECT * FROM usuario_ex where usuario = :usuario and pwd = :pwd");
// ejecuta la sentencia pasando los parametros reemplazando en :usuario y :pwd
$stmt->execute(array('usuario' => $usuario, 'pwd' => $pwd));
// obtiene un array con la siguiente fila disponible de los resultados del execute().
$row = $stmt->fetch(); // me retorna una array con la primer fila disponible

//Si hubiera querido todas las filas del resultado....
// $rows = $stmt->fetchAll();  // me retorna un array bidimensional con todas las filas disponibles
//var_dump($row); die($usuario.$pwd);
if ( !$row ) {  // si no hubo resultado
	header('Location: login.php?msg=Usuario o Contraseña inválidos'); // redirecciono nuevamente a login con mensaje de error
	die(); // corto la ejecucion
}
// dado que vino un resultado, el usuario existe. Lo incorporo a la session  
session_start();
$row[tipo] = 'ejemplo'; // tipo usuario ejemplo lo agrego al array que vino de resultado desde base de datos
$_SESSION["user"] = $row; // agrego el array con los datos del usuario en la sesion.
header('Location: bienvenido.php?msg='); // como está todo ok lo redirecciono al menu principal para que muestre sus opciones
