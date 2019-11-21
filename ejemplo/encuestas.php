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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	

    <!--script charset="utf-8" src="https://code.jquery.com/jquery-3.3.1.js"></script-->
    <script charset="utf-8" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- script charset="utf-8" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script -->
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    <script charset="utf-8" src="encuestas.js"></script>
  </head>
  <body>

	<?php include_once("menu.php"); ?>
<div class="workarea_v">  

      <table class="display" id="tabla_encuestas">
        <thead>
          <tr>
            <th>#Id</th>
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Encuesta satisfaccion</td>
                <td>Esta encuesta consulta / evalua............</td>
            </tr>
		</tbody>
      </table>

</div>
<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>
  </body>
</html>