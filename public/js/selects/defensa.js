$("#idAbogado").change(function(event){
	if(event.target.value!=""){
		var idCarpeta = $("input[type=hidden][name=idCarpeta]").val();
		$.get("/carpetas/public/carpeta/involucrados/"+idCarpeta+"/"+event.target.value+"", function(response, idCarpeta){
			$("#idInvolucrado").empty();
			$("#idInvolucrado").append("<option value=''>Seleccione un involucrado</option>");
			for(i=0; i<response.length; i++){
				$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});
