<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script type="text/javascript">
	document.cookie = "randomCookie=true;";
	Cookies.set('isLive', Math.floor((Math.random() * 10000) + 1));
		console.log('sesion');
		if (typeof sessionStorage.getItem('isLive') == "undefined" || sessionStorage.getItem('isLive') == null && localStorage.getItem('isLiveLocal')!=null ) {
			 sessionStorage.setItem('isLive', Math.floor((Math.random() * 10000) + 1));
			 var s = sessionStorage.getItem('isLive');
			 var sLocal = localStorage.getItem('isLiveLocal');
			 if(s!=sLocal){
				 console.log('dife');
				 window.location.href = "http://127.0.0.1:8000/DONTALLLOWED";
			 }
		}else if (typeof sessionStorage.getItem('isLive') == "undefined" || sessionStorage.getItem('isLive') == null) {
				sessionStorage.setItem('isLive', Math.floor((Math.random() * 10000) + 1));
				var s = sessionStorage.getItem('isLive');
				localStorage.setItem('isLiveLocal',s);
		}else {
			var s = sessionStorage.getItem('isLive');
			var sLocal = localStorage.getItem('isLiveLocal');
			if(s!=sLocal){
				console.log('dife');
				window.location.href = "http://127.0.0.1:8000/DONTALLLOWED";
			}
			console.log(s);
		}
 </script>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de inicio de Carpetas de Investigación</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-jquery-validation.min.css') }}">
    @yield('css')
</head>

<body>
	<div class="container">
		@include('template.partials.header')

		@yield('content')
	</div>

	{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>--}}
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}" ></script>
    <script src="{{ asset('js/popper.min.js')}}" ></script>
	<script src="{{ asset('js/bootstrap.min.js')}}" ></script>
	<script src="{{asset ('js/sweetalert.min.js')}}"></script>
	<script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
	<script src="{{ asset('js/toastr.min.js')}}" ></script>
	<script src="{{ asset('js/jquery.form-validator.min.js')}}" ></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<script type="text/javascript">
	$(window).on("unload", function(e) {

	  console.log('saliendio');
	});

		$("input:text").keyup(function() {
        $(this).val($(this).val().toUpperCase());
	    });
	    $("textarea").keyup(function() {
	        $(this).val($(this).val().toUpperCase());
	    });
        $(document).ready(function() {
			$('select').select2();
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
	    });
			$.validate({
				 lang : 'es'
			});
	</script>

	@yield('scripts')
    @include('sweet::alert')
</body>
</html>
