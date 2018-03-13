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