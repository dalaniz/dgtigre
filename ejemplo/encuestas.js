  $(document).ready(function() {
		// para buscar especificaciones de datatable googlear "jquery datatable mi_tema_a_buscar". Ej: "jquery datatable change search text"
		// ver datatable / options / language
    $('#example').DataTable(
	
	{
		// esto cambia las etiquetas search, etc, que están x default en ingles por la version en español
		"language": {
			//"url": "/dataTables/i18n/de_de.lang"
				"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
			}
	}
	
	);
	
	} );
