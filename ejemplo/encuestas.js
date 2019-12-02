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
		  { "data": "descripcion" },
		  { "data": null, "defaultContent":  "<button>borrar</button>" },
		  { "data": null, "defaultContent":  "<button class='button_edit'>editar</button>" }
		],
			
	}// aca finaliza la parametrizacion del datatable
	
	);
	
	$('#panel_form').hide();
	$('#panel_grilla').show();
	
	  // boton agregar
  $(document).on('click', '#button_add', function(e){
	$('#panel_form').show();
	$('#panel_grilla').hide();
	
	$('#nombre_encuesta').val('');
    $('#descrip_encuesta').val('');
	
  });

  // boton editar
  $(document).on('click', '.button_edit', function(e){
		var table =$('#example').DataTable();
		var data_row = table.row($(this).closest('tr')).data();
		alert("editando registro ID: "+data_row["0"]);
	});

	
  // Add company submit form
  $(document).on('submit', '#form_company.add', function(e){
    e.preventDefault();
    // Validate form
    if (form_company.valid() == true){
      // Send company information to database
      hide_ipad_keyboard();
      hide_lightbox();
      show_loading_message();
      var form_data = $('#form_company').serialize();
      var request   = $.ajax({
        url:          'tablajquery.php?job=add_company',
        cache:        false,
        data:         form_data,
        dataType:     'json',
        contentType:  'application/json; charset=utf-8',
        type:         'get'
      });
      request.done(function(output){
        if (output.result == 'success'){
          // Reload datable
          table_companies.api().ajax.reload(function(){
            hide_loading_message();
            var company_name = $('#company_name').val();
            show_message("Company '" + company_name + "' added successfully.", 'success');
          }, true);
        } else {
          hide_loading_message();
          show_message('Add request failed', 'error');
        }
      });
      request.fail(function(jqXHR, textStatus){
        hide_loading_message();
        show_message('Add request failed: ' + textStatus, 'error');
      });
    }
  });
	
	
  // boton grabar
  $(document).on('click', '#button_grabar', function(e){
	e.preventDefault();
	// todo: hacer las validaciones de los datos ingresados en el formulario
	
	var form_data = $('#form_company').serialize();

	var request   = $.ajax({
	url:          'tablajquery.php?job=add_company',
	cache:        false,
	data:         form_data,
	dataType:     'json',
	contentType:  'application/json; charset=utf-8',
	type:         'get'
	});
	
	request.done(function(output){
	if (output.result == 'success'){
	  // Reload datable
	  table_companies.api().ajax.reload(function(){
		hide_loading_message();
		var company_name = $('#company_name').val();
		show_message("Company '" + company_name + "' added successfully.", 'success');
	  }, true);
	} else {
	  hide_loading_message();
	  show_message('Add request failed', 'error');
	}
	});
	
	request.fail(function(jqXHR, textStatus){
	hide_loading_message();
	show_message('Add request failed: ' + textStatus, 'error');
	});
	
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


function editar() {
    var table =$('#example').DataTable();
    var data = table.row( this ).data();
	alert("editando");
	console.log(data);
}
  
} );


	
 