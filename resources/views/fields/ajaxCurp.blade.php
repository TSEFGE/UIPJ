@push('scripts')
<script type="text/javascript">
	$("#curp").on("change focusout", function() {
		var curp=$(this).val();
		$.get("/carpetas/public/persona/curp/"+curp, function(response, estado){
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
	});
</script>
@endpush
