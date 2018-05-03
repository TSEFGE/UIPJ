$("#idEstado").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.municipios', event.target.value), function(response, estado){
			$("#idMunicipio").empty();
			$("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipio3").empty();
			$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$('#idEstado3').val($('#idEstado').val()).trigger('change.select2');
	}
});

$("#idMunicipio").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.localidades', event.target.value), function(response, municipio){
			$("#idLocalidad").empty();
			$("#idLocalidad").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidad3").empty();
			$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get(route('get.colonias2', event.target.value), function(response, municipio){
			$("#idColonia").empty();
			$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idColonia3").empty();
			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get(route('get.codigos', event.target.value), function(response, municipio){
			$("#cp").empty();
			$("#cp").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cp3").empty();
			$("#cp3").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
		$('#idMunicipio3').val($('#idMunicipio').val()).trigger('change.select2');
	}
});

$("#idLocalidad").change(function(event){
	if(event.target.value!=""){
		$('#idLocalidad3').val($('#idLocalidad').val()).trigger('change.select2');
	}
});

// $("#cp").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cp option:selected').html()+"", function(response, cp){
// 			$("#idColonia").empty();
// 			$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 			$("#idColonia3").empty();
// 			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 		$('#cp3').val($('#cp').val()).trigger('change.select2');
// 		$('#idColonia3').val($('#idColonia').val()).trigger('change.select2');
// 	}
// });

$("#idColonia").change(function(event){
	if(event.target.value!=""){
		$.get(route('get.codigos2', event.target.value), function(response, colonia){
			$("#cp").empty();
			$("#cp").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
			$("#cp3").empty();
			$("#cp3").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
		$('#idColonia3').val($('#idColonia').val()).trigger('change.select2');
	}
});

$("#calle").keyup(function() {
	$('#calle3').val($('#calle').val().toUpperCase());
});
$("#numExterno").keyup(function() {
	$('#numExterno3').val($('#numExterno').val().toUpperCase());
});
$("#numInterno").keyup(function() {
	$('#numInterno3').val($('#numInterno').val().toUpperCase());
});
