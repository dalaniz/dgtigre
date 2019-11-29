<?php
include_once("../inc/check_session.php");
$msg = "";
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/sanchez.css?v=<?php echo(rand()); ?>" type="text/css" />
	<title>jQuery SCRUD system</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    <script charset="utf-8" src="preguntas.js"></script>
</head>

<body>
<?php include_once("menu.php"); ?>


<div class="panel-principal">
	<div id="panel-tabla">
		<button id="btn-agregar" type="button" >Agregar Pregunta</button>
		<table id="tabla-question" class="cell-border" style="width:100%" >
			<thead>
				<tr>
					<th>Id</th>
					<th>User</th>
					<th>Pregunta</th>
					<th>Respuesta 1</th>
					<th>Respuesta 2</th>
					<th>Respuesta Correcta</th>
					<th>Nota</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
	<div id="panel-form">
		<form class="form add" id="form-question" novalidate>
          <div class="input_container">
            <label for="usuario">Usuario: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="usuario" id="usuario" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="pregunta">Pregunta: <span class="required">*</span></label>
            <div class="field_container">
			  <textarea rows="4" cols="50" name="pregunta" id="pregunta" value="" required>
			  </textarea>
            </div>
          </div>
		  <div class="input_container">
            <label for="respuesta1">Respuesta 1: <span class="required">*</span></label>
            <div class="field_container">
			  <textarea rows="4" cols="50" name="respuesta1" id="respuesta1" value="" required>
			  </textarea>
            </div>
          </div>
		  <div class="input_container">
            <label for="respuesta2">Respuesta 2: <span class="required">*</span></label>
            <div class="field_container">
			  <textarea rows="4" cols="50" name="respuesta2" id="respuesta2" value="" required>
			  </textarea>
            </div>
          </div>
		  <div class="input_container">
            <label for="respuestacorrecta">Respuesta Correcta: <span class="required">*</span></label>
            <div class="field_container">
			  <textarea rows="4" cols="50" name="respuestacorrecta" id="respuestacorrecta" value="" required>
			  </textarea>
            </div>
          </div>
		  <div class="input_container">
            <label for="nota">Nota: <span class="required">*</span></label>
            <div class="field_container">
              <input type="number" step="1" class="text" name="nota" id="nota" value="" required>
            </div>
          </div>
          <div class="button_container">
            <button type="submit" id="btn-grabar">Grabar</button>
          </div>
        </form>
	</div>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
