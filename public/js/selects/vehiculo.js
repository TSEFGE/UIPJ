$("#idClaseVehiculo").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.tipovehiculos', event.target.value), function(response, tipo){
			$("#idTipoVehiculo").empty();
			$("#idTipoVehiculo").append("<option value=''>Seleccione un tipo de vehículo</option>");
			for(i=0; i<response.length; i++){
				$("#idTipoVehiculo").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMarca").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.submarcas', event.target.value), function(response, marca){
			$("#idSubmarca").empty();
			$("#idSubmarca").append("<option value=''>Seleccione una submarca</option>");
			for(i=0; i<response.length; i++){
				$("#idSubmarca").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});
