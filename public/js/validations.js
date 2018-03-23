$(document).ready(function(){
});
//Para inicio de carpeta
$('#npd').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 200){
		$(this).css({"border-color":"red"});
		$("#invalid-npd").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-npd").hide();
	}
});
$('#numIph').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 200){
		$(this).css({"border-color":"red"});
		$("#invalid-numIph").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-numIph").hide();
	}
});


//Para empresa
$('#nombres2').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 200){
		$(this).css({"border-color":"red"});
		$("#invalid-nombres2").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-nombres2").hide();
	}
});
$('#rfc2').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 200){
		$(this).css({"border-color":"red"});
		$("#invalid-rfc2").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-rfc2").hide();
	}
});

$('#rfc').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 10 || campo.length > 13){
		$(this).css({"border-color":"red"});
		$("#invalid-rfc").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-rfc").hide();
	}
});

$('#nombres').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 200){
		$(this).css({"border-color":"red"});
		$("#invalid-nombres").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-nombres").hide();
	}
});

$('#primerAp').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 50){
		$(this).css({"border-color":"red"});
		$("#invalid-primerAp").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-primerAp").hide();
	}
});


$('#segundoAp').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 50){
		$(this).css({"border-color":"red"});
		$("#invalid-segundoAp").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-segundoAp").hide();
	}
});


//fechaNacimiento
//edad
//telefono
$('#fechaNacimiento').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 10 || campo.length > 10){
		$(this).css({"border-color":"red"});
		$("#invalid-fechaNAcimiento").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-fechaNAcimiento").hide();
	}
});

$('#edad').focusout(function(){
	var campo = $(this).val();
	if (campo < 18 || campo > 150){
		$(this).css({"border-color":"red"});
		$("#invalid-edad").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-edad").hide();
	}
});

$('#telefono').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 7 || campo.length > 15){
		$(this).css({"border-color":"red"});
		$("#invalid-telefono").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-telefono").hide();
	}
});

//Denunciado conocido
$('#nombresC').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 200){
		$(this).css({"border-color":"red"});
		$("#invalid-nombresC").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-nombresC").hide();
	}
});

$('#primerApC').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 50){
		$(this).css({"border-color":"red"});
		$("#invalid-primerApC").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-primerApC").hide();
	}
});

$('#aliasC').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 50){
		$(this).css({"border-color":"red"});
		$("#invalid-aliasC").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-aliasC").hide();
	}
});

$('#senasParticC').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 3 || campo.length > 50){
		$(this).css({"border-color":"red"});
		$("#invalid-senasParticC").show();
	}else{
		$(this).css({"border-color":"green"});
		$("#invalid-senasParticC").hide();
	}
});

		$(function() {
			 required = true;
			 $('#docIdentificacion').focusout(function(){
					var docVal = $(this).val();
					if (docVal.length < 3){
							$(this).css({"border-color":"red"});
								$("#documento").show();
					}else{
							$(this).css({"border-color":"green"});
							$("#documento").hide();
					}
			 });
		});

		$(function() {
			 required = true;
			 $('#numDocIdentificacion').focusout(function(){
					var numVal = $(this).val();
					if (numVal.length == 0){
							$(this).css({"border-color":"red"});
								$("#numDocumento").show();
					}else{
							$(this).css({"border-color":"green"});
							$("#numDocumento").hide();
					}
			 });
		});

	

   $(function() {
	maxVal = 17;
	$('#curp').focusout(function(){
		   var insertedVal = $(this).val();
		   if (insertedVal.length < maxVal){
				   $(this).css({"border-color":"red"});
					   $("#validarRFCFisico").show();
		   }else{
				   $(this).css({"border-color":"green"});
				   $("#validarRFCFisico").hide();
		   }
	});
$('#narracion').focusout(function(){
narraMax=5;
var narraVal = $(this).val();
if (narraVal.length < narraMax){
	$(this).css({"border-color":"red"});
	  $("#ValidarNarracion").show();
}else{
	$(this).css({"border-color":"green"});
	$("#ValidarNarracion").hide();
}
});
$('#narracionIph').focusout(function(){
narraMax=5;
var narraVal = $(this).val();
if (narraVal.length < narraMax){
   $(this).css({"border-color":"red"});
	 $("#ValidarNarracionIph").show();
}else{
   $(this).css({"border-color":"green"});
   $("#ValidarNarracionIph").hide();
}
});
$('#descripcionHechos').focusout(function(){
narraMax=5;
var narraVal = $(this).val();
if (narraVal.length < narraMax){
  $(this).css({"border-color":"red"});
	$("#ValidarNarracionHechos").show();
}else{
  $(this).css({"border-color":"green"});
  $("#ValidarNarracionHechos").hide();
}
});
$('#motivoEstancia').focusout(function(){
narraMax=5;
var narraVal = $(this).val();
if (narraVal.length < narraMax){
 $(this).css({"border-color":"red"});
   $("#validarEstancia").show();
}else{
 $(this).css({"border-color":"green"});
 $("#validarEstancia").hide();
}
});
});

$('#numInterno').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});

$('#numInterno2').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});

$('#numInterno3').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});

$('#numInternoC').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});

$('#fax').focusout(function(){
	/*var campo = $(this).val();
	if (campo.length < 1 ){
		$(this).css({"border-color":"red"});
	
	}else{*/
		$(this).css({"border-color":"yellow"})
	//}
});
$('#numExterno').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});
$('#numExterno2').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});
$('#numExterno3').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});

$('#numExternoc').focusout(function(){
	var campo = $(this).val();
	if (campo.length < 1 || campo.length > 10){
		$(this).css({"border-color":"red"});
	
	}else{
		$(this).css({"border-color":"yellow"})
	}
});

$('#representanteLegal').focusout(function(){
	repreMax=5;
	var repreVal = $(this).val();
	if (repreVal.length < repreMax){
	 $(this).css({"border-color":"red"});
	   $("#invalidRepresentante").show();
	}else{
	 $(this).css({"border-color":"green"});
	 $("#invalidRepresentante").hide();
	}
	});

	$('#calle').focusout(function(){
		calleMax=5;
		var calleVal = $(this).val();
		if (calleVal.length < calleMax){
		 $(this).css({"border-color":"red"});
		   $("#invalidCalle").show();
		}else{
		 $(this).css({"border-color":"green"});
		 $("#invalidCalle").hide();
		}
	});
	$('#calle2').focusout(function(){
		calleMax=5;
		var calleVal = $(this).val();
		if (calleVal.length < calleMax){
		 $(this).css({"border-color":"red"});
		   $("#invalidCalle2").show();
		}else{
		 $(this).css({"border-color":"green"});
		 $("#invalidCalle2").hide();
		}
	});
	$('#calle3').focusout(function(){
		calleMax=5;
		var calleVal = $(this).val();
		if (calleVal.length < calleMax){
		 $(this).css({"border-color":"red"});
		   $("#invalidCalle3").show();
		}else{
		 $(this).css({"border-color":"green"});
		 $("#invalidCalle3").hide();
		}
	});
	$('#telefonoN').focusout(function(){
		teleMax=7;
		var teleVal = $(this).val();
		if (teleVal.length < teleMax){
		 $(this).css({"border-color":"red"});
		   $("#invalidTelefonoN").show();
		}else{
		 $(this).css({"border-color":"green"});
		 $("#invalidTelefonoN").hide();
		}
	});
	$('#telefonoTrabajo').focusout(function(){
		teleMax=7;
		var teleVal = $(this).val();
		if (teleVal.length < teleMax){
		 $(this).css({"border-color":"red"});
		   $("#invalidTelefonoT").show();
		}else{
		 $(this).css({"border-color":"green"});
		 $("#invalidTelefonoT").hide();
		}
	});
	$('#correo').focusout(function(){
					$(this).css({"border-color":"yellow"})
		
	});
	$('#senasPartic').focusout(function(){
		$(this).css({"border-color":"yellow"})

	});	
	$('#lugarTrabajo').focusout(function(){
		trabMax=7;
		var trabVal = $(this).val();
		if (trabVal.length < trabMax){
		 $(this).css({"border-color":"red"});
		   $("#invalidTrabajo").show();
		}else{
		 $(this).css({"border-color":"green"});
		 $("#invalidTrabajo").hide();
		}
	});

	
	
