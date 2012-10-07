$(function(){
	
	$( '#accordion' ).accordion({ header: 'h2' });
	$( '#fechaEncuesta' ).datepicker({ dateFormat: 'dd/mm/yy' });
	$( '#encuestaReset' ).button();
	$( '#encuestaSubmit' ).button();
	
	
	$( '#btnNuevaPersona' ).button();
	$( '#btnNuevaPersona' ).click(function(){
		$( '#dlgNuevaPersona' ).dialog('open');
		return false;
	});
	
	$( '#tablaFamilias' ).dataTable();
	$( '#tablaIntegrantes').dataTable();
});