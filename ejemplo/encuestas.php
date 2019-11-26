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
<div style="background-color: #d8d0d0;"> 
<table id="example" class="cell-border" style="width:100%">
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
                <td>Encuesta Helados</td>
                <td>Esta encuesta tiene un custionario sobre la preferencia entre helados artesanales y helados industriales</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Coca vs Manaos</td>
                <td>Preferencias del publico comparando ambas gaseosas</td>
            </tr>
        </tbody>
    </table>
	
</div>

</div>
<div class="mensajes">
	<label id="texto_msg"><?php echo($msg); ?></label>
</div>
  </body>
</html>