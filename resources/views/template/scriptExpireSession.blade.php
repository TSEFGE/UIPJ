{{--@if(Request::path() != 'login' )--}}
@auth
<script>
	$( document ).idleTimer( 360000 );
	$( document ).on( "idle.idleTimer", function(event, elem, obj){
		swal({
			title: "¿Desea continuar con su sesión?",
			text: "Se ha detectado inactividad en su sesión.",
			type: "warning",
			showCancelButton: true,
			//confirmButtonColor: "#DD6B55",
			confirmButtonText: "Continuar con la sesión",
			cancelButtonText: "Cerrar sesión",
			closeOnConfirm: false,
			closeOnCancel: false,
			allowEscapeKey: false,
			timer: 5000
		},
		function(isConfirm){
			if (isConfirm) {
				swal("¡Hecho!", "Se mantendrá logueado.", "success");
			}else {
				swal("Adiós", "Se cerrará su sesión", "error");
				document.getElementById('logout-form').submit();
			}
		});
	});
</script>
@endif