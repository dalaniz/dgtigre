<?php
include_once("../inc/conexion.php");

// Database details
$db_server   = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name     = 'tpfinal';

// acciones posibles
// get_all : leer todas las encuestas
// get_byId : leer una encuesta por Id
// add : insertar una encuesta
// edit : update una encuesta
// del : borrar una encuesta

$accion 			= isset( $_GET["accion"] )           ? $_GET["accion"]            : "";
$id 				= isset( $_GET["id"] )               ? $_GET["id"]               : "";
$usuario		 	= isset( $_GET["usuario"] )  		 ? $_GET["usuario"]  		  : "";
$pregunta 			= isset( $_GET["pregunta"] )		 ? $_GET["pregunta"]		  : "";
$respuesta1 		= isset( $_GET["respuesta1"] )		 ? $_GET["respuesta1"]		  : "";
$respuesta2 		= isset( $_GET["respuesta2"] )		 ? $_GET["respuesta2"]		  : "";
$respuestacorrecta 	= isset( $_GET["respuestacorrecta"] )? $_GET["respuestacorrecta"]: "";
$nota 				= isset( $_GET["nota"] )             ? $_GET["nota"]              : "";

/*
// la estructura de respuestas va a contener
$resultado = "success"; // un resultado string "success" | "error"
$mensaje   = ""; // mensaje para mostrar al usuario. Ej: "No hay conexion con la base de datos"
$datos = null; 
*/
$respuesta = array(
  "resultado"  => "success", 
  "mensaje" => "", 
  "data"    => null 
);



if ($accion != ''){
  
	  // Connect to database
	  $db_connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);
	  if (mysqli_connect_errno()){
		$respuesta["resultado"]  = 'error';
		$respuesta["mensaje"] = 'Failed to connect to database: ' . mysqli_connect_error();
		$accion  = '';
	  }
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
			$query = "SELECT * FROM question_tr ORDER BY id";
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

	}elseif ($accion == 'get_byId'){
    
    // Get pregunta
    if ($id == ''){
      $respuesta["resultado"]  = 'error';
      $respuesta["message"] = 'id missing';
    } else {
      $query = "SELECT * FROM question_tr WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $respuesta["resultado"]  = 'error';
        $respuesta["message"] = 'query error';
      } else {
        $respuesta["resultado"]  = 'success';
        $respuesta["message"] = 'query success';
        while ($question = mysqli_fetch_array($query)){
          $mysql_data[] = array(
            "id"          		=> $question['id'],
            "usuario"  	  		=> $question['usuario'],
            "pregunta"    		=> $question['pregunta'],
            "respuesta1"  		=> $question['respuesta1'],
            "respuesta2"  		=> $question['respuesta2'],
            "respuestacorrecta" => $question['respuestacorrecta'],
            "nota"    			=> $question['nota']            
          );
        }
      }
    }
  
  }elseif ($accion == 'add'){
		
		// Add pregunta
		$query = "INSERT INTO question_tr SET ";
		if (isset($_GET['usuario']))      		{ $query .= "usuario     	 	= '" . mysqli_real_escape_string($db_connection, $_GET['usuario'])      . "', "; }
		if (isset($_GET['pregunta'])) 	  		{ $query .= "pregunta 			= '" . mysqli_real_escape_string($db_connection, $_GET['pregunta']) 	. "', "; }
		if (isset($_GET['respuesta1'])) 		{ $query .= "respuesta1   		= '" . mysqli_real_escape_string($db_connection, $_GET['respuesta1'])   . "', "; }
		if (isset($_GET['respuesta2']))   		{ $query .= "respuesta2   		= '" . mysqli_real_escape_string($db_connection, $_GET['respuesta2'])   . "', "; }
		if (isset($_GET['respuestacorrecta']))  { $query .= "respuestacorrecta  = '" . mysqli_real_escape_string($db_connection, $_GET['respuestacorrecta'])  . "', "; }
		if (isset($_GET['nota']))    			{ $query .= "nota    			= '" . mysqli_real_escape_string($db_connection, $_GET['nota'])    		. "'";   }
		
		$query = mysqli_query($db_connection, $query);
		if (!$query){
		  $respuesta["resultado"]  = 'error';
		  $respuesta["message"] = 'query error';
		} else {
		  $respuesta["resultado"]  = 'success';
		  $respuesta["message"] = 'query success';
		}
	  
	}elseif ($accion == 'edit'){
    
		// Edit pregunta
		if ($id == ''){
			$respuesta["resultado"]  = 'error';
			$respuesta["message"] = 'id missing';
		} else {
			$query = "UPDATE question_tr SET ";
			if (isset($_GET['usuario']))      		{ $query .= "usuario     	 	= '" . mysqli_real_escape_string($db_connection, $_GET['usuario'])      . "', "; }
			if (isset($_GET['pregunta'])) 	  		{ $query .= "pregunta 			= '" . mysqli_real_escape_string($db_connection, $_GET['pregunta']) 	. "', "; }
			if (isset($_GET['respuesta1'])) 		{ $query .= "respuesta1   		= '" . mysqli_real_escape_string($db_connection, $_GET['respuesta1'])   . "', "; }
			if (isset($_GET['respuesta2']))   		{ $query .= "respuesta2   		= '" . mysqli_real_escape_string($db_connection, $_GET['respuesta2'])   . "', "; }
			if (isset($_GET['respuestacorrecta']))  { $query .= "respuestacorrecta  = '" . mysqli_real_escape_string($db_connection, $_GET['respuestacorrecta'])  . "', "; }
			if (isset($_GET['nota']))    			{ $query .= "nota    			= '" . mysqli_real_escape_string($db_connection, $_GET['nota'])    		. "'";   }
			$query .= "WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
			$query  = mysqli_query($db_connection, $query);
			if (!$query){
				$respuesta["resultado"]  = 'error';
				$respuesta["message"] = 'query error';
			} else {
				$respuesta["resultado"]  = 'success';
				$respuesta["message"] = 'query success';
				}
		}    
	}elseif ($accion == 'del'){
  
    //Delete company
		if ($id == ''){
		  $respuesta["resultado"]  = 'error';
		  $respuesta["message"] = 'id missing';
		} else {
		  $query = "DELETE FROM question_tr WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
		  $query = mysqli_query($db_connection, $query);
		  if (!$query){
			$respuesta["resultado"] = 'error';
			$respuesta["message"]   = 'query error';			
		  } else {
			$respuesta["resultado"] = 'success';
			$respuesta["message"]   = 'query success';			
			//$query = "ALTER TABLE question_tr MODIFY  id INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = ".mysqli_real_escape_string($db_connection, $id);
			//$query = mysqli_query($db_connection, $query);
		  }
		}
	
	}
	// Close database connection
	mysqli_close($db_connection);
}

// Convert PHP array to JSON array
$respuesta = utf8_string_array_encode($respuesta);
$json_data = json_encode($respuesta);
//die( "asdfas".json_last_error());
die($json_data);

function utf8_string_array_encode(&$array){
    $func = function(&$value,&$key){
		//mb_detect_encoding($str, 'UTF-8', true);
        if(is_string($value) and !mb_detect_encoding($value, 'UTF-8',true) ){
            $value = utf8_encode($value);
        }
        if(is_string($key)  and !mb_detect_encoding($key, 'UTF-8',true)){
            $key = utf8_encode($key);
        }
        if(is_array($value)){
            utf8_string_array_encode($value);
        }
    };
    array_walk($array,$func);
    return $array;
}
?>