$("#curp").on("change focusout", function() {
	var curp=$(this).val();
	if(curp != ""){
		//var id='{{$personales->idPersona}}';
		var id = $('input[name=idPersona]').val();
		console.log(id);
		$.get(route('comprobarEditar.curp',{curp: curp, id: id}), function(response, estado){
			if(response.res==true){
				console.log('true')
				swal({
					title: "Alerta",
					text: "Ya existe una persona registrada con ese CURP.",
					type: "warning",
					showCancelButton: false,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Aceptar",
					closeOnConfirm: false
				});
			}
		});
	}
});