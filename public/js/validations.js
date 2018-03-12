$(document).ready(function(){
});

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