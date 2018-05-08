
totalesP =0;
totalesTrab=0;
totalesAut=0;
tabs=0;
correcto=0;
$("#btn-submit").prop('disabled', true);
$('#tabsabogado.nav-tabs a').on('shown.bs.tab', function (e) {
	var index = $($(this).attr('href')).index();
	switch (index) {
		case 0:
			totalesP = $('#collapsePersonales3 .vacio').length;
			$('#collapsePersonales3').isValid();
			break;
		case 1:
			totalesTrab  = $('#collapseTrab3 .vacio').length;
			$('#collapseTrab3').isValid();
			break;
		case 2:
			totalesAut= $('#collapseAutoridad .vacio').length;
			$('#collapseAutoridad').isValid();
			break;		
	}
	tabs = $("#tabsabogado .visible").length;

	console.log("tabs", tabs);
});

$('#tabsabogado.nav-tabs a').on('hidden.bs.tab', function(event){
	var index= $($(this).attr('href')).index();
	switch(index) {
		case 0:
		totalesP = $('#collapsePersonales3 .vacio').length;
		$('#collapsePersonales3').isValid(); 	                          
		break;	
		case 1:
		totalesTrab = $('#collapseTrab3 .vacio').length; 
		$('#collapseTrab3').isValid();
		break;
		case 2:
		totalesAut= $('#collapseAutoridad .vacio').length;
		$('#collapseAutoridad').isValid();
		break;
		default:
		break;
		}
		
});
$("#tabogado").hover(function(){
	totalesP = $('#collapsePersonales3 .vacio').length;	
	correcto = $('#tabsabogado .correcto').length;
	if (correcto == tabs) {
		$("#btn-submit").prop('disabled', false);
	} else {
		$("#btn-submit").prop('disabled', true);
	} 
})

$("#collapsePersonales3").hover(function () {
	$(this).isValid();
	var count = $('#collapsePersonales3 .error').length;
	var correctos = $('#collapsePersonales3 .valid').length;
	countvacio =totalesP;
	if (count == 0) {
		$("#error").hide();
	}
	else {
		$("#error").show();
		$("#error").html(count);
	}
	$("#error").html(count);
	
	if (correctos == 0) {
		$("#bien").hide();
	}
	else if (correctos == totalesP) {
		$("#bien").show();
		$("#bien").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#bien").addClass('correcto');
	}
	else {
		$("#bien").show();
		$("#bien").html(correctos);
		$("#bien").removeClass('correcto');
	}
	/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacio").hide();
	} else {
		$("#vacio").show();
		$("#vacio").html(countvacio);
	}  */ 
	correcto = $('#tabsabogado .correcto').length;  
	console.log("totalesP",totalesP);
	console.log("errorP", count);
	console.log("correctos", correctos);
});

$("#collapseTrab3").hover(function () {
	var count = $('#collapseTrab3 .error').length;
	var correctos = $('#collapseTrab3 .valid').length;
	if (count == 0) {
		$("#error1").hide();
	}
	else {
		$("#error1").show();
		$("#error1").html(count);
	}	
	if (correctos == 0) {
		$("#bien1").hide();
	}
	else if (correctos == totalesTrab) {
		$("#bien1").show();
		$("#bien1").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#bien1").addClass('correcto');
	}
	else {
		$("#bien1").show();
		$("#bien1").html(correctos);
		$("#bien1").removeClass('correcto');
	}
	/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacio1").hide();
	} else {
		$("#vacio1").show();
		$("#vacio1").html(countvacio);
	} */
	correcto = $('#tabsabogado .correcto').length;  
	console.log("totalesTrab", totalesTrab);
});

$("#collapseAutoridad").hover(function () {
	$(this).isValid();
	var count = $('#collapseAutoridad .error').length;
	var correctos = $('#collapseAutoridad .valid').length;
	if (count == 0) {
		$("#error2").hide();
	}
	else {
		$("#error2").show();
		$("#error2").html(count);
	}
	
	if (correctos == 0) {
		$("#bien2").hide();
	}
	else if (correctos == totalesAut) {
		$("#bien2").show();
		$("#bien2").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#bien2").addClass('correcto');
	}
	else {
		$("#bien2").show();
		$("#bien2").html(correctos);
		$("#bien2").removeClass('correcto');
	}/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacio2").hide();
	} else {
		$("#vacio2").show();
		$("#vacio2").html(countvacio);
	}  
*/ correcto = $('#tabsabogado .correcto').length;  
	console.log("totalesAut", totalesAut);
});
