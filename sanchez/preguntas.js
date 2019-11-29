$(document).ready(function(){
	var tabla = $('#tabla-question').DataTable({
		"language": {
			//"url": "/dataTables/i18n/de_de.lang"
				"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
			},
		"ajax": "preguntasdao.php?accion=get_all",
		// definicion de columnas
		"columns": [
		  { "data": "id" },
		  { "data": "usuario" },
		  { "data": "pregunta" },
		  { "data": "respuesta1" },
		  { "data": "respuesta2" },
		  { "data": "respuestacorrecta" },
		  { "data": "nota"},		  
		  { "data": null, "defaultContent":  "<button class='btn_del'></button>" },
		  { "data": null, "defaultContent":  "<button class='btn_edit'></button>" }
		],
		"lengthMenu": [[4, 1, -1], [4, 1, "All"]],
		"oLanguage": {
		  "oPaginate": {
			"sFirst":       " ",
			"sPrevious":    " ",
			"sNext":        " ",
			"sLast":        " ",
		  },
		  "sLengthMenu":    "Records per page: _MENU_",
		  "sInfo":          "Total of _TOTAL_ records (showing _START_ to _END_)",
		  "sInfoFiltered":  "(filtered from _MAX_ total records)"
    }
		
				
	}
	);
	$('#panel-form').hide();
	$('#panel_form_edit').hide();
	$('#panel-tabla').show();
	
	var form_question = $('#form-question');
		form_question.validate();
	var form_question_edit = $('#form_question_edit');
		form_question_edit.validate();
		// boton agregar
	$(document).on('click', '#btn-agregar', function(e){
		$('#panel-tabla').hide();
		$('#panel_form_edit').hide();
		$('#panel-form').show();				
		$('#pregunta').val('');
		$('#respuesta1').val('');
		$('#respuesta2').val('');
		$('#respuestacorrecta').val('');
		$('#nota').val('');
	});	
	
	// Add company submit form
  $(document).on('submit', '#form-question', function(e){
    e.preventDefault();
    // Validate form
    if (form_question.valid() == true){
      // Send company information to database
      
      var form_data = $('#form-question').serialize();
      var request   = $.ajax({
        url:          'preguntasdao.php?accion=add',
        cache:        false,
        data:         form_data,
        dataType:     'json',
        contentType:  'application/json; charset=utf-8',
        type:         'get'
      });
      request.done(function(output){
        if (output.resultado == 'success'){
          // Reload datable		  
          tabla.ajax.reload(function(){            
          alert (" se pudo agregar");
            
          }, true);
        } else {
          alert(' no se pudo agregar');
        }
      });
      request.fail(function(jqXHR, textStatus){
        alert("Add request failed: " + textStatus);
      });
    }
	$('#panel-form').hide();
	$('#panel_form_edit').hide();
	$('#panel-tabla').show();
	
  });
	
	// boton editar
 /* $(document).on('click', '.btn_edit', function(e){
		//var id      = $(this).data('id');
		//var data_row = tabla.row($(this).closest('tr')).data();
		//alert("editando registro ID: "+data_row["0"]);
	});*/
	
	// Edit company button
	$(document).on('click', '.btn_edit', function(e){
    e.preventDefault();
    // Get company information from database
    var data_row = tabla.row($(this).closest('tr')).data();
	$('#panel-tabla').hide();
	$('#panel-form').hide();
	$('#panel_form_edit').show();
	$('#panel_form_edit #id').val(data_row[0]);
	$('#panel_form_edit #usuario').val(data_row[1]);
	$('#panel_form_edit #pregunta').val(data_row[2]);
	$('#panel_form_edit #respuesta1').val(data_row[3]);
	$('#panel_form_edit #respuesta2').val(data_row[4]);
	$('#panel_form_edit #respuestacorrecta').val(data_row[5]);
	$('#panel_form_edit #nota').val(data_row[6]);
	
	}
	);
	// Edit company submit form
	$(document).on('submit', '#form_question_edit.edit', function(e){
		e.preventDefault();
		// Validate form
		//alert("id=" + id);
		if (form_question_edit.valid() == true){
		  // Send company information to database
		  var id = $('#panel_form_edit #id').val();      
		  var form_data = $('#form_question_edit').serialize();
		  var request   = $.ajax({
			url:          'preguntasdao.php?accion=edit&id=' + id,
			cache:        false,
			data:         form_data,
			dataType:     'json',
			contentType:  'application/json; charset=utf-8',
			type:         'get'
		  });
		  request.done(function(output){
			if (output.resultado == 'success'){
			  // Reload datable
			  tabla.ajax.reload(function(){
				//var company_name = $('#company_name').val();
				//show_message("Company '" + company_name + "' edited successfully.", 'success');
				alert('Se pudo editar! ');
			  }, true);
			} else {
			  alert('no se pudo editar');
			}
		  });
		  request.fail(function(jqXHR, textStatus){
			//hide_loading_message();
			alert('Edit request failed: ' + textStatus);
		  });
		}
	$('#panel-form').hide();
	$('#panel_form_edit').hide();
	$('#panel-tabla').show();
	
	});
  
	// Delete company
	$(document).on('click', '.btn_del', function(e){
		e.preventDefault();
		var data_row = tabla.row($(this).closest('tr')).data();
		if (confirm("Are you sure you want to delete id = '" + data_row[0] + "'?")){
			//show_loading_message();
			var id      =  data_row[0];
			var request = $.ajax({
				url:          'preguntasdao.php?accion=del&id=' + id,
				cache:        false,
				dataType:     'json',
				contentType:  'application/json; charset=utf-8',
				type:         'get'
			});
			request.done(function(output){
			if (output.resultado == 'success'){
			  // Reload datable
				tabla.ajax.reload(function(){
				alert("se pudo eliminar el id= " + data_row[0]);
				}, true);
			} else {
			  alert("No se pudo eliminar");
				}
			});
			request.fail(function(jqXHR, textStatus){
				//hide_loading_message();
				alert('Delete request failed: ' + textStatus);
		  });
		}
	});

}
);
