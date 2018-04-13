<script>
	$("#nombres").focusout(function() {
		obtenerRFCFISICA();
	});
	$("#primerAp").focusout(function() {
		obtenerRFCFISICA();
	});
	$("#segundoAp").focusout(function() {
		obtenerRFCFISICA();
	});
	$("#fechaNacimiento").focusout(function() {
		obtenerRFCFISICA();
	});

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	function obtenerRFCFISICA() {
		toastr.clear();
		
		nombre = $("#nombres").val().toUpperCase();
		apPaterno = $("#primerAp").val().toUpperCase();
		apMaterno = $("#segundoAp").val().toUpperCase();
		fecha = $("#fechaNacimiento").val();

		console.log(fecha);

		dia = fecha.substr(8, 2);
		mes = fecha.substr(5, 2);
		año = fecha.substr(2, 2);

		ruta = "{{route('rfcFisico.denunciante')}}";
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

				if($("#rfc").val() == "" || $("#homo").val() == ""){
					$("#rfc").val(rfc);
					$("#homo").val(homo);
					$('#rfcAux').val(rfcOriginal);
					toastr.success('Se ha modificado el RFC', '¡Atención!');
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
</script>
