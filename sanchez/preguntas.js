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
		  { "data": null, "defaultContent":  "<button>borrar</button>" },
		  { "data": null, "defaultContent":  "<button class='button_edit'>editar</button>" }
		],
				
	}
	);
	$('#panel-form').hide();
	$('#panel-tabla').show();
	
	var form_question = $('#form-question');
		form_question.validate();
		// boton agregar
	$(document).on('click', '#btn-agregar', function(e){
		$('#panel-tabla').hide();
		$('#panel-form').show();
		
		$('#usuario').val('');
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
	$('#panel-tabla').show();
	
  });
	
	

}
);