$("#idEstadoC").change(function(event){
	if(event.target.value!=""){
		$.get("/carpetas/public/carpeta/municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipioC").empty();
			$("#idMunicipioC").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipioC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
	}
});

$("#idMunicipioC").change(function(event){
	if(event.target.value!=""){
		$.get("/carpetas/public/carpeta/localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidadC").empty();
			$("#idLocalidadC").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidadC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("/carpetas/public/carpeta/colonias2/"+event.target.value+"", function(response, municipio){
			$("#idColoniaC").empty();
			$("#idColoniaC").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColoniaC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
		});
		$.get("/carpetas/public/carpeta/codigos/"+event.target.value+"", function(response, municipio){
			$("#cpC").empty();
			$("#cpC").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cpC").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
		});
	}
});

// $("#cpC").change(function(event){
// 	if(event.target.value!=""){
// 		$.get("../colonias/"+$('#cpC option:selected').html()+"", function(response, cp){
// 			$("#idColoniaC").empty();
// 			$("#idColoniaC").append("<option value=''>Seleccione una colonia</option>");
// 			for(i=0; i<response.length; i++){
// 				$("#idColoniaC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
// 			}
// 		});
// 	}
// });

$("#idColoniaC").change(function(event){
	if(event.target.value!=""){
		$.get("/carpetas/public/carpeta/codigos2/"+event.target.value+"", function(response, colonia){
			$("#cpC").empty();
			$("#cpC").append("<option value='"+response[0].id+"'> "+response[0].codigoPostal+"</option>");
		});
	}
});
