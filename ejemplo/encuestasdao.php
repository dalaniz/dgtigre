<?php
include_once("../inc/conexion.php");

// acciones posibles
// get_all : leer todas las encuestas
// get_byId : leer una encuesta por Id
// add : insertar una encuesta
// edit : update una encuesta
// del : borrar una encuesta

$accion 			= isset( $_GET["accion"] )           ? $_GET["accion"]            : "";
$id 				= isset( $_GET["id"] )               ? $_POST["id"]               : "";
$nombre_encuesta 	= isset( $_GET["nombre_encuesta"] )  ? $_POST["nombre_encuesta"]  : "";
$descrip_encuesta 	= isset( $_GET["descrip_encuesta"] ) ? $_POST["descrip_encuesta"] : "";

// la estructura de respuestas va a contener
$resultado = "success"; // un resultado string "success" | "error"
$mensaje   = ""; // mensaje para mostrar al usuario. Ej: "No hay conexion con la base de datos"
$datos = null; 

$respuesta = array(
  "resultado"  => "success", 
  "mensaje" => "", 
  "data"    => null 
);

try{
	// creo la conexion a db
	$pdo = new PDO($dsn, $user, $passwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // esto es necesario pq si hay errores no los reporta!!!!
} catch(PDOException  $e ){
	$respuesta["resultado"] = "error";
	$respuesta["mensaje"] = "Error de conexión a la base de datos";
	die($respuesta);
}



// Execute accion
if ($accion == 'get_all'){

	try {
		$query = "SELECT * FROM encuesta_ex ORDER BY id";
		$stmt = $pdo->prepare( $query );
		if ( !$stmt->execute() ) {
			$respuesta["resultado"] = "error";
			$respuesta["mensaje"] = "Hubo un error efectuando la consulta";
		}
		$rows = $stmt->fetchAll(); // me retorna una array con todas las filas
		$respuesta["mensaje"] = "Consulta efectuada!!";
		$respuesta["data"] = $rows;
	} catch(Exception $e) {
		$respuesta["resultado"] = "error";
		$respuesta["mensaje"] = "Hubo un error efectuando la consulta";
	}

}

// Convert PHP array to JSON array
$json_data = json_encode($respuesta);
die($json_data);
?>