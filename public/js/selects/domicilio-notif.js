$("#idEstado3").change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio3").empty();
			$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMunicipio3").change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad3").empty();
			$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColonia3").empty();
			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp3").empty();
			$("#cp3").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
	}
});

// $("#cp3").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cp3 option:selected').html()+"", function(response, cp){
// 			$("#idColonia3").empty();
// 			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 	}
// });

$("#idColonia3").change(function(event){
	if(event.target.value!=""){
		$.get("../codigos2/"+event.target.value+"", function(response, colonia){
			$("#cp3").empty();
			$("#cp3").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
	}
});