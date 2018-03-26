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

				if($("#rfc").val() != rfc || $("#homo").val() != homo){
					$("#rfc").val(rfc);
					$("#homo").val(homo);
					toastr.info('Se ha modificado el RFC', '¡Atención!');
				}
			},
			error: function(data) {
				// console.log(data);
			}
		});
	}
</script>
