$(document).ready(function() {


////////PARTE MODAL CONFIRMACION ENVIO FORMULARIO////////////
/*
// Damos formato a la Ventana de Diálogo
$('#dialogoFormulario').dialog({
	// Indica si la ventana se abre de forma automática
	autoOpen: false,
	// Indica si la ventana es modal
	modal: true,
	// Largo
	width: 350,
	// Alto
	height: 'auto',
	buttons: {
		Continuar: function() {
			// Serializamos el formulario
			str = $("#form1").serialize();

			//Vaciamos los campos del formulario
			//$('#datosContacto &gt; input[type=text]').val('');

			//Mostramos un alert con los datos del formulario
			alert(str);

			// Cerramos el diálogo
			$( this ).dialog( "close" );
		},
		Cancelar: function() {
			// Cerramos el diálogo
			$( this ).dialog( "close" );
		}
	}
});

// Validamos el formulario
$('#form1').validate({
	submitHandler: function(){

	        // Abrimos el diàlogo de confirmación
		$('#dialogoFormulario').dialog('open');

		// Evitamos que se envíe el formulario
		return false;

	},
	errorPlacement: function(error, element) {
		error.appendTo(element.prev("span").append());
	}
});
*/
////////////////////////FIN PARTE MODAL CONFIRMACION ENVIO FORMULARIO////////////////////////////////////

//para acentos y n
$.ajaxSetup({'beforeSend' : function(xhr) {
 if (xhr.overrideMimeType) {
 //Para Google Chrome y Firefox
 xhr.overrideMimeType('text/html; charset=utf-8');
 } else {
 //Para IE8
 xhr.setRequestHeader('Content-type', 'text/html; charset=utf-8');
 }
 } });

 $('.solo-numero').keyup(function (){
   this.value = (this.value + '').replace(/[^0-9]/g, '');
 });

//Parte nro proveedor
//$('#nroProv').disabled = true;//.attr('disabled', 'disabled');

/*$('#nroProv').hide();
$('input[type=radio][name=rdNroProv]').change(function() {
        if (this.value == 'si') {
            $('#nroProv').show("slow");
        }
        else if (this.value == 'no') {
            $('#nroProv').val("")
            $('#nroProv').hide("slow");
        }
    });*/
$('#datos').hide();
$('#nroProv').hide();
$('#lblNroProv').hide();
$('#consultaProvSi').click(function(){
  $('#consultaProv').hide('slow');
  $('#datos').show('slow');
  $('#nroProv').show('slow');
  $('#lblNroProv').show('slow');
});
$('#consultaProvNo').click(function(){
  $('#consultaProv').hide('slow');
  $('#datos').show('slow');
});
//Parte Rubros
var iCnt = 0;
// Crear un elemento div añadiendo estilos CSS
var container = $(document.createElement('div'));
/*.css({
padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
borderTopColor: '#999', borderBottomColor: '#999',
borderLeftColor: '#999', borderRightColor: '#999'
});*/
$('#btAdd').click(function() {
if (iCnt <= 19) {

iCnt = iCnt + 1;

//tomo var rubro
var  valRubro = $('#rr').val();
var textRubro = $( "#rr option:selected" ).text();
var  valSubRubro = $('#srr').val();
var textSubRubro = $( "#srr option:selected" ).text();
// Añadir caja de label.
//$(container).append('<input type=text class="input" id=tb' + iCnt + ' ' +
//'value="Elemento de Texto ' + iCnt + '" />')
$(container).append('<input type="hidden" class="txtRubros" name="txtRubro1[]" id=txtRubro1'+' ' +
'value="'+valRubro+'"><label class="lblRubros">Rubro: '+textRubro+'</label>');
$(container).append('<input type="hidden" class="txtSubRubros" name="txtSubRubro1[]" id=txtSubRubro1' + ' ' +
'value="'+valSubRubro+'"><label class="lblSubRubros">Sub-Rubro: '+textSubRubro+'</label><br /><br />');
/*if (iCnt == 1) {

var divSubmit = $(document.createElement('div'));
$(divSubmit).append('<input type=button class="bt" onclick="GetTextValue()"' +
'id=btSubmit value=Enviar />');

}*/

//$('#main').after(container, divSubmit);
$('#main').after(container);
}
else { //se establece un limite para añadir elementos, 20 es el limite

$(container).append('<label>Limite Alcanzado</label>');
$('#btAdd').attr('class', 'bt-disable');
$('#btAdd').attr('disabled', 'disabled');

}
});

$('#btRemove').click(function() { // Elimina un elemento por click
if (iCnt != 0) {
  $('#lblRubro1' + iCnt).remove();
  $('#lblSubRubros' + iCnt).remove();
  iCnt = iCnt - 1; }

if (iCnt == 0) { $(container).empty();

$(container).remove();
//$('#btSubmit').remove();
$('#btAdd').removeAttr('disabled');
$('#btAdd').attr('class', 'bt')

}
});

$('#btRemoveAll').click(function() { // Elimina todos los elementos del contenedor

$(container).empty();
$(container).remove();
//$('#btSubmit').remove();
iCnt = 0;
$('#btAdd').removeAttr('disabled');
$('#btAdd').attr('class', 'bt');

});
});//fin document.ready

// Obtiene los valores
var divValue, values = '';

function GetTextValue() {

$(divValue).empty();
$(divValue).remove(); values = '';

$('.input').each(function() {
divValue = $(document.createElement('div')).css({
padding:'5px', width:'200px'
});
values += this.value + '<br />'
});

$(divValue).append('<p><b>Tus valores añadidos</b></p>' + values);
$('body').append(divValue);
////////////////////////////////////////////////////////////////////////////////
//
//PARTE AUTORIZADOS
//
///////////////////////////////////////////////////////////////////////////////
//Parte Rubros
}
