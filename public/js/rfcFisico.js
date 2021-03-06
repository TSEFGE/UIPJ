/*$("#nombres").focusout(function() {
	obtenerRfcFisica();
});
$("#primerAp").focusout(function() {
	obtenerRfcFisica();
});
$("#segundoAp").focusout(function() {
	obtenerRfcFisica();
});*/

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function obtenerRfcFisica() {
	nombre = $("#nombres").val().toUpperCase();
	apPaterno = $("#primerAp").val().toUpperCase();
	apMaterno = $("#segundoAp").val().toUpperCase();
	fecha = $("#fechaNacimiento").val();

	dia = fecha.substr(0, 2);
	mes = fecha.substr(3, 2);
	año = fecha.substr(8, 2);

	ruta = route('rfc.fisico');
	$.ajax({
		type: "POST",
		url: ruta,
		data: {
			nombre,
			apPaterno,
			apMaterno,
			dia,
			mes,
			año
		},
		dataType: "json",
		success: function(data) {

			rfc=data.res;
			rfcOriginal=rfc;
			var array= rfc.split("");
			var rfcSH=[];
			var homoC=[];

			array.forEach( function(valor, indice, array) { 

				if(indice<10){
					rfcSH.push(valor);
				} if(indice>=10){
					homoC.push(valor); 
				} 
			});

			rfc=rfcSH.join("");;
			homo=homoC.join("");
			var contador=0;

			if($("#rfc").val() == "" || $("#homo").val() == ""){
				if($("#fechaNacimiento").val() != "" ){
					$("#rfc").val(rfc);
					$("#homo").val(homo);
					$('#rfcAux').val(rfcOriginal);
			//	toastr.success('Se ha modificado el RFC', '¡Atención!');
				}
			}else{
				if($("#rfc").val() != rfc || $("#homo").val() != homo){
					toastr.options ={
						"closeButton": true,
						"newestOnTop": true,
						"preventDuplicates": true,
						"timeOut": 0,
	  					"extendedTimeOut": 10000,
	  					"positionClass": "toast-bottom-right",
					}
					toastr.info('Se ha detectado un cambio ¿Desea actualizar el RFC?<br /><button type="button" id="btn-ok" class="btn btn-light" onclick="actualizarFisico(rfcOriginal, rfc, homo)">Sí</button>');
				}
			}


		},
		error: function(data) {
			// console.log(data);
		}
 	});
}

function actualizarFisico(rfcOriginal, rfc, homo){
	$("#rfc").val(rfc);
	$("#homo").val(homo);
	$('#rfcAux').val(rfcOriginal);
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-bottom-right",
		"preventDuplicates": true,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "3000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
	toastr.success('Se ha modificado el RFC', '¡Atención!');
}
