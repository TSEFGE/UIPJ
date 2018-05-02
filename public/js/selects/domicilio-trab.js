$("#idEstado2").change(function(event){
	if(event.target.value!=""){
		$.get(urlpath+"municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio2").empty();
			$("#idMunicipio2").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMunicipio2").change(function(event){
	if(event.target.value!=""){
		$.get(urlpath+"localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad2").empty();
			$("#idLocalidad2").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get(urlpath+"colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColonia2").empty();
			$("#idColonia2").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get(urlpath+"codigos/"+event.target.value+"", function(response, municipio){
			$("#cp2").empty();
			$("#cp2").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp2").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
	}
});

// $("#cp2").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cp2 option:selected').html()+"", function(response, cp){
// 			$("#idColonia2").empty();
// 			$("#idColonia2").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColonia2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 	}
// });

$("#idColonia2").change(function(event){
	if(event.target.value!=""){
		$.get(urlpath+"codigos2/"+event.target.value+"", function(response, colonia){
			$("#cp2").empty();
			$("#cp2").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
	}
});
