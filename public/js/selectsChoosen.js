$(document).ready(function(){
	/*Con plugin chosen*/
    $("select").chosen({
        placeholder_text_siple: 'Seleccione una opción...',
        no_results_text: 'Sin resultados'
    });
    /*
    $("#idEstado").chosen().change(function(){
        alert("holi");
    });*/
    
    /*Con plugin select2
    $('select').select2();
    $("#idEstado").select2().change(function(){
        alert("holi");
    });
    */
});

$("#idEstadoOrigen").chosen().change(function(event){
	$.get("../municipios/"+event.target.value+"", function(response, estado){
		$("#idMunicipioOrigen").empty();
		$("#idMunicipioOrigen").append("<option value=''>Seleccione un municipio</option>");
		for(i=0; i<response.length; i++){
			$("#idMunicipioOrigen").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
		}
		$("#idMunicipioOrigen").trigger("chosen:updated");
	});
});

$("#idEstado").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio").empty();
			$("#idMunicipio").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipio").trigger("chosen:updated");
		});

		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio3").empty();
			$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipio3").trigger("chosen:updated");
		});
		$('#idEstado3').val($('#idEstado').val());
	}
});

$("#idMunicipio").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad").empty();
			$("#idLocalidad").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidad").trigger("chosen:updated");
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp").empty();
			$("#cp").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cp").trigger("chosen:updated");
		});

		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad3").empty();
			$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidad3").trigger("chosen:updated");
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp3").empty();
			$("#cp3").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cp3").trigger("chosen:updated");
		});
		$('#idMunicipio3').val($('#idMunicipio').val());
	}
});

$("#idLocalidad").chosen().change(function(event){
	if(event.target.value!=""){
		$('#idLocalidad3').val($('#idLocalidad').val());
	}
});

$("#cp").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../colonias/"+$('#cp option:selected').html()+"", function(response, cp){
			$("#idColonia").empty();
			$("#idColonia").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idColonia").trigger("chosen:updated");
		});

		$.get("../colonias/"+$('#cp option:selected').html()+"", function(response, cp){
			$("#idColonia3").empty();
			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idColonia3").trigger("chosen:updated");
		});
		$('#cp3').val($('#cp').val());
		$('#idColonia3').val($('#idColonia').val());
	}
});

$("#idColonia").chosen().change(function(event){
	if(event.target.value!=""){
		$('#idColonia3').val($('#idColonia').val());
	}
});

$("#calle").keyup(function() {
	$('#calle3').val($('#calle').val().toUpperCase());
});
$("#numExterno").keyup(function() {
	$('#numExterno3').val($('#numExterno').val());
});
$("#numInterno").keyup(function() {
	$('#numInterno3').val($('#numInterno').val());
});


$("#idEstado2").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio2").empty();
			$("#idMunicipio2").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipio2").trigger("chosen:updated");
		});
	}
});

$("#idMunicipio2").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad2").empty();
			$("#idLocalidad2").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidad2").trigger("chosen:updated");
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp2").empty();
			$("#cp2").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp2").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cp2").trigger("chosen:updated");
		});
	}
});

$("#cp2").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../colonias/"+$('#cp2 option:selected').html()+"", function(response, cp){
			$("#idColonia2").empty();
			$("#idColonia2").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idColonia2").trigger("chosen:updated");
		});
	}
});

$("#idEstado3").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipio3").empty();
			$("#idMunicipio3").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipio3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipio3").trigger("chosen:updated");
		});
	}
});

$("#idMunicipio3").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidad3").empty();
			$("#idLocalidad3").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidad3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidad3").trigger("chosen:updated");
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cp3").empty();
			$("#cp3").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cp3").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cp3").trigger("chosen:updated");
		});
	}
});

$("#cp3").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../colonias/"+$('#cp3 option:selected').html()+"", function(response, cp){
			$("#idColonia3").empty();
			$("#idColonia3").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColonia3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#cp3").trigger("chosen:updated");
		});
	}
});

$("#idClaseVehiculo").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../tipoVehiculos/"+event.target.value+"", function(response, tipo){
			$("#idTipoVehiculo").empty();
			$("#idTipoVehiculo").append("<option value=''>Seleccione un tipo de vehículo</option>");
			for(i=0; i<response.length; i++){
				$("#idTipoVehiculo").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idTipoVehiculo").trigger("chosen:updated");
		});
	}
});

$("#idMarca").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../submarcas/"+event.target.value+"", function(response, marca){
			$("#idSubmarca").empty();
			$("#idSubmarca").append("<option value=''>Seleccione una submarca</option>");
			for(i=0; i<response.length; i++){
				$("#idSubmarca").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idSubmarca").trigger("chosen:updated");
		});
	}
});

$("#idTipoArma").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../armas/"+event.target.value+"", function(response, arma){
			$("#idArma").empty();
			$("#idArma").append("<option value=''>Seleccione un arma</option>");
			for(i=0; i<response.length; i++){
				$("#idArma").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idArma").trigger("chosen:updated");
		});
	}
});
/*
$("#tipo").change(function(event){
	var idCarpeta = $("input[type=hidden][name=idCarpeta]").val();
	if(event.target.value==1){
		$.get("../denunciantes/"+idCarpeta+"", function(response, idCarpeta){
			$("#idInvolucrado").empty();
			$("#idInvolucrado").append("<option value=''>Seleccione un denunciante</option>");
			for(i=0; i<response.length; i++){
				$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
			}
		});
	}else{
		if(event.target.value==2){
			$.get("../denunciados/"+idCarpeta+"", function(response, idCarpeta){
				$("#idInvolucrado").empty();
				$("#idInvolucrado").append("<option value=''>Seleccione un denunciado</option>");
				for(i=0; i<response.length; i++){
					$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
				}
			});
		}
	}
});
*/
$("#idAbogado").chosen().change(function(event){
	if(event.target.value!=""){
		var idCarpeta = $("input[type=hidden][name=idCarpeta]").val();
		$.get("../involucrados/"+idCarpeta+"/"+event.target.value+"", function(response, idCarpeta){
			$("#idInvolucrado").empty();
			$("#idInvolucrado").append("<option value=''>Seleccione un denunciante</option>");
			for(i=0; i<response.length; i++){
				$("#idInvolucrado").append("<option value='"+response[i].id+"'> "+response[i].nombres+"</option>");
			}
			$("#idInvolucrado").trigger("chosen:updated");
		});
	}
});

$("#idEstadoC").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../municipios/"+event.target.value+"", function(response, estado){
			$("#idMunicipioC").empty();
			$("#idMunicipioC").append("<option value=''>Seleccione un municipio</option>");
			for(i=0; i<response.length; i++){
				$("#idMunicipioC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idMunicipioC").trigger("chosen:updated");
		});
	}
});

$("#idMunicipioC").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../localidades/"+event.target.value+"", function(response, municipio){
			$("#idLocalidadC").empty();
			$("#idLocalidadC").append("<option value=''>Seleccione una localidad</option>");
			for(i=0; i<response.length; i++){
				$("#idLocalidadC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idLocalidadC").trigger("chosen:updated");
		});
		$.get("../codigos/"+event.target.value+"", function(response, municipio){
			$("#cpC").empty();
			$("#cpC").append("<option value=''>Seleccione un código postal</option>");
			for(i=0; i<response.length; i++){
				$("#cpC").append("<option value='"+response[i].id+"'> "+response[i].codigoPostal+"</option>");
			}
			$("#cpC").trigger("chosen:updated");
		});
	}
});

$("#cpC").chosen().change(function(event){
	if(event.target.value!=""){
		$.get("../colonias/"+$('#cpC option:selected').html()+"", function(response, cp){
			$("#idColoniaC").empty();
			$("#idColoniaC").append("<option value=''>Seleccione una colonia</option>");
			for(i=0; i<response.length; i++){
				$("#idColoniaC").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
			}
			$("#idColoniaC").trigger("chosen:updated");
		});
	}
});

/*
$("#idEstado").change(event =>{
	$.get(`municipios/${event.target.value}`, function(res, estado){
		$("idMunicipio").empty();
		res.forEach(element => {
			$("#idMunicipio").append(`<option value=${element.id}> ${element.nombre} </option`);
		});
	});
});
*/