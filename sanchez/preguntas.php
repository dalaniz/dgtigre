<?php
include_once("../inc/check_session.php");
$msg = "";
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/sanchez.css?v=<?php echo(rand()); ?>" type="text/css" />
	<link rel="stylesheet" href="preguntas.css?v=<?php echo(rand()); ?>" type="text/css" />
	<title>Lista de Preguntas</title>
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
		<table id="tabla-question" class="dataTables" class="cell-border" >
			<thead>
				<tr>
					<th>Id</th>
					<th>User</th>
					<th>Pregunta</th>
					<th>Respuesta 1</th>
					<th>Respuesta 2</th>
					<th>Respuesta Correcta</th>
					<th>Nota</th>
					<th>Borrar</th>
					<th>Editar</th>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
	<div id="panel-form">
		<form class="form add" id="form-question" novalidate>
			<h2 style="color:#fff; text-align: center;" >Agregar Pregunta</h2>
			<table id="tabla-ordenada">
				<thead>
				</thead>
				<tbody>
					<div class="input_container">
					<tr>						
						<td><label for="usuario">Usuario: <span class="required">*</span></label></td>
						<div class="field_container">
						<td><input type="text" class="text" name="usuario" id="usuario" readonly value="<?php echo($_SESSION['user']['usuario']); ?>"></td>
						</div>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					</div>
					<div class="input_container">
					<tr>
						<td><label for="pregunta">Pregunta: <span class="required">*</span></label></label></td>
						<div class="field_container">
						<td><textarea rows="3" cols="25" name="pregunta" id="pregunta" value="" required></textarea></td>
						</div>
						<td></td>
						<td></td>
						<td><label for="nota">Nota: <span class="required">*</span></label></td>
						<td><input type="number" step="1" class="text" name="nota" id="nota" value="" required></td>
					</tr>
					</div>
					<div class="input_container">
					<tr>						
						<td><label for="respuesta1">Respuesta 1: <span class="required">*</span></label></td>
						<div class="field_container">
						<td><textarea rows="3" cols="25" name="respuesta1" id="respuesta1" value="" required></textarea></td>
						</div>
						<td><label for="respuesta2">Respuesta 2: <span class="required">*</span></label></td>
						<td><textarea rows="3" cols="25" name="respuesta2" id="respuesta2" value="" required></textarea></td>
						<td><label for="respuestacorrecta">Respuesta Correcta: <span class="required">*</span></label></td>
						<td><textarea rows="3" cols="25" name="respuestacorrecta" id="respuestacorrecta" value="" required></textarea></td>
					</tr>
					</div>
					<div class="button_container">
					<tr>						
						<td></td>						
						<td><button type="submit" id="btn-grabar-form">Grabar</button></td>				
						<td></td>
						<td></td>
						<td></td>
						<td><input id="btn-volver-form"type= "button" onclick="location.href='preguntas.php';" value="Volver"></td>
					</tr>
					</div>
				</tbody>
			</table>
		  
		  
		  
		  <!--<div class="input_container">
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
          </div>-->
        </form>
	</div>
	<div id="panel_form_edit">
		<form class="form edit" id="form_question_edit" novalidate>
			<h2 style="color:#fff; text-align: center;" >Editar Pregunta</h2>
			<table id="tabla-ordenada">
				<thead>
				</thead>
				<tbody>
					<div class="input_container">
					<tr>						
						<td><label for="usuario">Usuario: <span class="required">*</span></label></td>
						<div class="field_container">
						<td><input type="text" class="text" name="usuario" id="usuario" value="" readonly></td>
						</div>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					</div>
					<div class="input_container">
					<tr>
						<td><label for="id">Id: <span class="required">*</span></label></td>						
						<td><input type="number" class="text" name="id" id="id" value="" readonly ></td>						
						<td><label for="pregunta">Pregunta: <span class="required">*</span></label></td>
						<td><textarea rows="3" cols="25" name="pregunta" id="pregunta" value="" required></textarea></td>
						<td><label for="nota">Nota: <span class="required">*</span></label></td>
						<td><input type="number" step="1" class="text" name="nota" id="nota" value="" required></td>
					</tr>
					</div>
					<div class="input_container">
					<tr>						
						<td><label for="respuesta1">Respuesta 1: <span class="required">*</span></label></td>
						<div class="field_container">
						<td><textarea rows="3" cols="25" name="respuesta1" id="respuesta1" value="" required></textarea></td>
						</div>
						<td><label for="respuesta2">Respuesta 2: <span class="required">*</span></label></td>
						<td><textarea rows="3" cols="25" name="respuesta2" id="respuesta2" value="" required></textarea></td>
						<td><label for="respuestacorrecta">Respuesta Correcta: <span class="required">*</span></label></td>
						<td><textarea rows="3" cols="25" name="respuestacorrecta" id="respuestacorrecta" value="" required></textarea></td>
					</tr>
					</div>
					<div class="button_container">
					<tr>						
						<td></td>						
						<td><button type="submit" id="btn-editar-form">Finaliza Edicion</button></td>				
						<td></td>
						<td></td>
						<td></td>
						<td><input id="btn-volver-form"type= "button" onclick="location.href='preguntas.php';" value="Volver"></td>
					</tr>
					</div>
				</tbody>
			</table>
		  <!--
			<div class="input_container">
            <label for="id">Id: <span class="required">*</span></label>
            <div class="field_container">
              <input type="number" class="text" name="id" id="id" value="" readonly required>
            </div>
          </div>
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
            <button type="submit">Editar Pregunta</button>
          </div>-->
        </form>
	</div>
</div>

<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>

</body>
</html>
