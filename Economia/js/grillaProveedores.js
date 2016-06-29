// JavaScript Document
var ordenar = '';
$(document).ready(function(){
	
	// Llamando a la funcion de busqueda al
	// cargar la pagina
	filtrar()
	
		// filtrar al darle click al boton
	$("#btnfiltrar").click(function(){ filtrar() });
	
	// boton cancelar
	$("#btncancel").click(function(){ 
		$(".filtro input").val('')
		filtrar() 
	});
	
	//ordenar (cuando hace click en los encabezados)
	$("#data th span").click(function(){
		var orden = '';
		if($(this).hasClass("desc"))
		{
			$("#data th span").removeClass("desc").removeClass("asc")
			$(this).addClass("asc");
			ordenar = "&orderby="+$(this).attr("title")+" asc"		
		}else
		{
			$("#data th span").removeClass("desc").removeClass("asc")
			$(this).addClass("desc");
			ordenar = "&orderby="+$(this).attr("title")+" desc"
		}
		filtrar()
	});
	
function filtrar()
{
$.ajax({
	data:$("#frm_filtro").serialize()+ordenar,
	type:"POST",
	dataType:"json",
	url:"ajaxGrillaProv.php?action=listar",
	sucess: function(data){
		var html = '';
		if (data.length>0){
			$.each(data, function(i,item){//agregar todos los campos//
				html+='<tr>'
					html=+'<td>'+item.nroProv+'</td>'
					html=+'<td>'+item.cuit+'</td>'
				html=+'</tr>';
			});
		}
		if(html == '') html = '<tr><td colspan="4" align="center">No se encontraron registros..</td></tr>'
		$("#data tbody").html(html);
	}
	
});
}