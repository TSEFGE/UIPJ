$("#btn-submit").prop('disabled', true);
$('#tabInfodelito').addClass('visible');
$('#tabLugardelito').addClass('visible');
totalesD=0;
totalesH=0;
tabs=0;
correcto=0;
$('#tabsdelito.nav-tabs a').on('shown.bs.tab', function (event) {
	var index = $($(this).attr('href')).index();
	switch (index) {
		case 0:
			totalesD = $('#infodelito .vacio').length;
			$('#infodelito').isValid();
			break;
		case 1:
			
			totalesH = $('#lugardelito .vacio').length;
			$('#lugardelito ').isValid();
			break;
		default:
			break;
	}
	tabs = $("#tabsdelito .visible").length;
	console.log(tabs);
});

$('#tabsdelito.nav-tabs a').on('hidden.bs.tab', function(event){
	var index= $($(this).attr('href')).index();
	switch(index) {
		case 0:
			totalesD = $('#infodelito .vacio').length; 
			$('#infodelito').isValid();	                            
			break;	
		case 1:
			totalesH = $('#lugardelito .vacio').length; 
			$('#lugardelito ').isValid();			
			break;
	default:
	break;
}
	
});
$("#cajados").hover(function(){	
	correcto = $('#tabsdelito .correcto').length;
	if (correcto == tabs) {
		$("#btn-submit").prop('disabled', false);
	} else {
		$("#btn-submit").prop('disabled', true);
	}
	console.log("totalesD", totalesD); 
	console.log("totalesH", totalesH); 
});
$("#infodelito").hover(function(){
	$(this).isValid();
	var count = $('#infodelito .error').length;
	var correctos = $('#infodelito .valid').length;
	if (count == 0) {
		$("#errorad").hide();
	}
	else {
		$("#errorad").show();
		$("#errorad").html(count);
	}
	
	if (correctos == 0) {
		$("#bienad").hide();
	}
	else if (correctos == totalesD) {
		$("#bienad").show();
		$("#bienad").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#bienad").addClass('correcto');
	}
	else {
		$("#bienad").show();
		$("#bienad").html(correctos);
		$("#bienad").removeClass('correcto');
	}
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacioad").hide();
	} else {
		$("#vacioad").show();
		$("#vacioad").html(countvacio);
	}   
});
$('#lugardelito').hover(function(){
	$(this).isValid();
	totalesD = $('#infodelito .vacio').length;
	var count = $('#lugardelito .error').length;
	var correctos = $('#lugardelito .valid').length;
	if (count == 0) {
		$("#errorad2").hide();
	}
	else {
		$("#errorad2").show();
		$("#errorad2").html(count);
	}
	
	if (correctos == 0) {
		$("#bienad2").hide();
	}
	else if (correctos == totalesH) {
		$("#bienad2").show();
		$("#bienad2").html('<i class="fa fa-check" aria-hidden="true"></i>');
		$("#bienad2").addClass('correcto');
	}
	else {
		$("#bienad2").show();
		$("#bienad2").html(correctos);
		$("#bienad2").removeClass('correcto');
	}

	/*
	countvacio = countvacio - count - correctos;
	if (countvacio == 0 || countvacio == totales) {
		$("#vacioad2").hide();
	} else {
		$("#vacioad2").show();
		$("#vacioad2").html(countvacio);
	} */

});