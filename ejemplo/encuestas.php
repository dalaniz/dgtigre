<?php
include_once("../inc/check_session.php");
$msg = "";
?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <title>jQuery SCRUD system</title>
    <meta charset="utf-8">

    <!--meta name="viewport" content="width=1000, initial-scale=1"-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/common.css" type="text/css" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    <script charset="utf-8" src="encuestas.js"></script>


  
	</head>
  <body>


	<?php include_once("menu.php"); ?>
<div class="workarea_v">  
	<div id="panel_grilla" style="background-color: #06529a; height: 300px; padding: 10px;" > 
	<button type="button" class="button" id="button_add">Nueva Encuesta</button>
	<table id="example" class="cell-border" style="width:100%">
			<thead>
				<tr>
					<th>#Id</th>
					<th>Nombre</th>
					<th>Descripci&oacute;n</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
		
	</div>

    <div id="panel_form" style="background-color: #06529a;  width: 450px; padding: 10px;">
        <form class="form add" id="form_company" data-id="" novalidate>
          <div class="input_container">
            <label for="nombre_encuesta">Nombre de encuesta: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="nombre_encuesta" id="nombre_encuesta" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="descrip_encuesta">Descripci&oacute;n: <span class="required">*</span></label>
            <div class="field_container">
			  <textarea rows="4" cols="50" name="descrip_encuesta" id="descrip_encuesta" value="" required>
			  </textarea>
            </div>
          </div>
          <div class="button_container">
            <button type="submit" id="button_grabar">Grabar</button>
          </div>
        </form>
        
    </div>


</div>
<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>
  </body>
</html>