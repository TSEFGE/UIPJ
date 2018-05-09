totalesP=0;
totalesD=0;
totalesTrab=0;
totalesAut=0;
tabs=0;
correcto=0;
$("#btn-submit").prop('disabled', true);
$('select').prop('data-validation','required');
$('select').prop('data-validation-event', 'change');
$('#tabsautoridad.nav-tabs a').on('shown.bs.tab', function (e) {
	var index = $($(this).attr('href')).index();
	switch (index) {
		case 0:
			totalesP = $('#collapsePersonales3 .vacio').length;
			$('#collapsePersonales3').isValid();
		break;
		case 1:
			totalesD = $('#collapseDir3 .vacio').length;
			$('#collapseDir3').isValid();
		break
		case 2:
			totalesTrab = $('#collapseTrab3 .vacio').length;
			$('#collapseTrab3').isValid();
		break;
		case 3:
			totalesAut = $('#collapseAutoridad .vacio').length;
			$('#collapseAutoridad').isValid();
		break;
	}
	tabs = $("#tabsautoridad .visible").length;

	console.log("tabs", tabs);
});
$('#tabsautoridad.nav-tabs a').on('hidden.bs.tab', function(event){

	var index= $($(this).attr('href')).index();
	switch(index) {
		case 0:
			totalesP = $('#collapsePersonales3 .vacio').length;		
		break;		
		case 1:
			totalesD = $('#collapseDir3 .vacio').length;
		break;
		case 2:
			totalesTrab = $('#collapseTrab3 .vacio').length;
		break;
		case 3:
			totalesAut = $('#collapseAutoridad .vacio').length;
		break;
		default:
		break;
	}
	tabs = $("#tabsautoridad .visible").length;
	console.log("tabs", tabs);
});
$("#ctautoridad").hover(function(){
	totalesP = $('#collapsePersonales3 .vacio').length;
	correcto = $('#tabsautoridad .correcto').length;
	if (correcto == tabs) {
		$("#btn-submit").prop('disabled', false);
	} else {
		$("#btn-submit").prop('disabled', true);
	}
	console.log("totalesP", totalesP);
});

$('#collapsePersonales3').hover(function(){
	$(this).isValid();
	var count = $('#collapsePersonales3 .error').length;
	var correctos = $('#collapsePersonales3 .valid').length;
	if (count == 0) {
		$("#errora").hide();
	}
	else {
		$("#errora").show();
		$("#errora").html(count);
	}
	
	if (correctos == 0) {
		$("#biena").hide();
	}
	else if (correctos == totalesP) {
		$("#biena").show();
		$("#biena").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#biena").addClass('correcto');
	}
	else {
		$("#biena").show();
		$("#biena").html(correctos);
		$("#biena").removeClass('correcto');
	}
	/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacioa").hide();
	} else {
		$("#vacioa").show();
		$("#vacioa").html(countvacio);
	} */
});
$('#collapseDir3').hover(function () {
	$(this).isValid();
	var count = $('#collapseDir3 .error').length;
	var correctos = $('#collapseDir3 .valid').length;
	if (count == 0) {
		$("#errora1").hide();
	}
	else {
		$("#errora1").show();
		$("#errora1").html(count);
	}
	var correctos = $('#collapseDir3 .valid').length;
	if (correctos == 0) {
		$("#biena1").hide();
	}
	else if (correctos == totalesD) {
		$("#biena1").show();
		$("#biena1").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#biena1").addClass('correcto');
	}
	else {
		$("#biena1").show();
		$("#biena1").html(correctos);
		$("#biena1").removeClass('correcto');
	}/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacioa1").hide();
	} else {
		$("#vacioa1").show();
		$("#vacioa1").html(countvacio);
	}*/

	
})
$('#collapseTrab3 ').hover(function(){
	$(this).isValid();
	var count = $('#collapseTrab3 .error').length;
	var correctos = $('#collapseTrab3 .valid').length;
	if (count == 0) {
		$("#errora2").hide();
	}
	else {
		$("#errora2").show();
		$("#errora2").html(count);
	}
	
	if (correctos == 0) {
		$("#biena2").hide();
	}
	else if (correctos == totalesTrab) {
		$("#biena2").show();
		$("#biena2").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#biena2").addClass('correcto');
	}
	else {
		$("#biena2").show();
		$("#biena2").html(correctos);
		$("#biena2").removeClass('correcto');
	}
	/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacioa2").hide();
	} else {
		$("#vacioa2").show();
		$("#vacioa2").html(countvacio);
	} */

});
$("#collapseAutoridad").hover(function(){
	$(this).isValid();
	var correctos = $('#collapseAutoridad .valid').length;
	var count = $('#collapseAutoridad .error').length;
	if (count == 0) {
		$("#errora3").hide();
	}
	else {
		$("#errora3").show();
		$("#errora3").html(count);
	}
	
	if (correctos == 0) {
		$("#biena3").hide();
	}
	else if (correctos == totalesAut) {
		$("#biena3").show();
		$("#biena3").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#biena3").addClass('correcto');
	}
	else {
		$("#biena3").show();
		$("#biena3").html(correctos);
		$("#biena3").removeClass('correcto');
	}
	/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacioa3").hide();
	} else {
		$("#vacioa3").show();
		$("#vacioa3").html(countvacio);
	}*/
});