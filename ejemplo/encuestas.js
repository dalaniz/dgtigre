  $(document).ready(function() {
		// para buscar especificaciones de datatable googlear "jquery datatable mi_tema_a_buscar". Ej: "jquery datatable change search text"
		// ver datatable / options / language
    $('#example').DataTable(
	
	{// aca comienza la parametrizacion del datatable

		// "languaje" cambia las etiquetas search, etc, que están x default en ingles por la version en español
		"language": {
			//"url": "/dataTables/i18n/de_de.lang"
				"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
			},
			
		// llamado ajax para obtener los datos desde el servidor
		"ajax": "encuestasdao.php?accion=get_all",

		// definicion de columnas
		"columns": [
		  { "data": "id" },
		  { "data": "nombre" },
		  { "data": "descripcion" }
		],
			
	}// aca finaliza la parametrizacion del datatable
	
	);
	
	$('#panel_form').hide();
	$('#panel_grilla').show();
	
	  // Add button
  $(document).on('click', '#button_add', function(e){
    //$('#form_company button').text('Add company');
	$('#panel_form').show();
	$('#panel_grilla').hide();
  });

  // Add button
  $(document).on('click', '#button_grabar', function(e){
    //$('#form_company button').text('Add company');
	$('#panel_form').hide();
	$('#panel_grilla').show();
  });

	
  // Escape keyboard key
  $(document).keyup(function(e){
    if (e.keyCode == 27){
		$('#panel_form').hide();
		$('#panel_grilla').show();
    }
  });	
	
	} );
