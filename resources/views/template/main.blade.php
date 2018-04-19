
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Carpetas de Investigación</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	@include('template.notAllowedScript')
	{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/theme-jquery-validation.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    @yield('css')

<style type="text/css">

#subir {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 10px 35px;
  border-radius: 4px;
  overflow: hidden;
}

#subir:hover {
  background-color: black;
}

#subir:before {
 font-family: FontAwesome;
 content:"\f062";
 position: absolute;
 top: 11px;
 left: -30px;
 transition: all 200ms ease;
}
#subir:hover:before {
 left: 7px;
}


</style>

</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

	<!-- Navbar -->
	@include('template.partials.navbar')
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	@include('template.partials.sidebar')

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
<button onclick="topFunction()" id="subir" title="Subir">Subir</button>
		<div class="content-header">
			<div class="container-fluid">

	<button  id="subir" title="Subir" class="ancla">Subir</button>

				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">@yield('title')</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							@isset($idCarpeta)
								<li class="breadcrumb-item"><a href="#">{{ $idCarpeta }}</a></li>
							@else

								<li class="breadcrumb-item"><a href="#">Home</a></li>
							@endif
							<li class="breadcrumb-item active">@yield('title')</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				@yield('content')
			</div>
		</section>

	</div>


	<!-- Control Sidebar (a secondary optional sidebar) -->
	@include('template.partials.sidebar2')
	<!-- /.control-sidebar -->

	<!-- Main Footer -->
	
	</div>

	{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>--}}
	<script src="{{ asset('js/jquery-3.2.1.min.js')}}" ></script>
	<script src="{{ asset('js/jquery-ui.js')}}" ></script>
    <script src="{{ asset('js/popper.min.js')}}" ></script>
	<script src="{{ asset('js/bootstrap.min.js')}}" ></script>
	<script src="{{asset ('js/sweetalert.min.js')}}"></script>
	<script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
	<script src="{{ asset('js/toastr.min.js')}}" ></script>
	<script src="{{ asset('js/jquery.form-validator.min.js')}}" ></script>
	<script src="{{ asset('js/validations.js')}}" ></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- REQUIRED SCRIPTS -->
	<!-- Bootstrap -->
	<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

	<!-- OPTIONAL SCRIPTS -->
	<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

	<!-- PAGE PLUGINS -->
	<!-- SparkLine -->
	<script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<!-- jVectorMap -->
	<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="{{ asset('admin/plugins/chartjs/Chart.min.js') }}"></script>

	<!-- PAGE SCRIPTS -->
	
	{{--<script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>--}}

	<script type="text/javascript" src="{{ asset('js/idle-timer.min.js') }}"></script>
	@include('template.scriptExpireSession')

	<script type="text/javascript">

	$(window).on("unload", function(e) {
   //localStorage.clear();
	 localStorage.removeItem('isLiveLocal');
	  console.log('saliendio');
	});

		$("input:text").keyup(function() {
        $(this).val($(this).val().toUpperCase());
	    });
	    $("textarea").keyup(function() {
	        $(this).val($(this).val().toUpperCase());
	    });
        $(document).ready(function() {
					// var r="";
					// var num="";
					// $.get("../contador", function(response, estado){
					// 	num=response;
					// });
					// Cookies.set('numero',num);
					//
					//
					// if (typeof sessionStorage.getItem('isLive') == "undefined" || sessionStorage.getItem('isLive') == null && localStorage.getItem('isLiveLocal')!=null){
					// 		$.get("../contador", function(response, estado){
					// 			var valor=Cookies.get('name');
					// 			r= Math.floor((Math.random() * 100000) + 1);
					// 			sessionStorage.setItem('isLive',r);
					// 			localStorage.setItem('isLiveLocal',r);
					// 			Cookies.set('isLive'+response,r);
					//
					// 		});
					// }else if(typeof sessionStorage.getItem('isLive') == "undefined" || sessionStorage.getItem('isLive') == null){
					// 	$.get("../contador", function(response, estado){
					// 		r= Math.floor((Math.random() * 100000) + 1);
					// 		sessionStorage.setItem('isLive',r);
					// 		Cookies.set('isLive'+response,r);
					// 	});
					// }
					// 	var s = sessionStorage.getItem('isLive');
					// 	var sLocal = localStorage.getItem('isLiveLocal');
					// 	if(s!=sLocal){
					// 		window.location.href = "http://127.0.0.1:8000/DONTALLLOWED";
					// 	}
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



window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("subir").style.display = "block";
    } else {
        document.getElementById("subir").style.display = "none";
    }
}

function topFunction() {
   // document.body.scrollTop = 20;
    document.documentElement.scrollTop = 0;
}


	</script>

	@yield('scripts')
	@include('sweet::alert')
	@include('template.partials.footer')
</body>
</html>
