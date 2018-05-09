$("#idTipoArma").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.armas', event.target.value), function(response, arma){
			$("#idArma").empty();
			$("#idArma").append("<option value=''>Seleccione un arma</option>");
			for(i=0; i<response.length; i++){
				$("#idArma").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idDelito").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.agrupaciones1', event.target.value), function(response, delito){
			$("#idAgrupacion1").empty();
			//console.log(response);
			$("#idAgrupacion1").append("<option value=''>Seleccione una desagregación</option>");
			for(i=0; i<response.length; i++){
				$("#idAgrupacion1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idAgrupacion1").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.agrupaciones2', event.target.value), function(response, agrupacion1){
			$("#idAgrupacion2").empty();
			//console.log(response);
			$("#idAgrupacion2").append("<option value=''>Seleccione una desagregación</option>");
			for(i=0; i<response.length; i++){
				$("#idAgrupacion2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});
