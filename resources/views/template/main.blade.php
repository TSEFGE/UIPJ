
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Carpetas de Investigación | @yield('title')</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('template.notAllowedScript')
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{asset ('plugins/sweetalert/css/sweetalert.css')}}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
	{{-- Subdividir --}}
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	@stack('css')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
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
								@isset($numCarpeta)
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
								<li class="breadcrumb-item"><a href="{{ route('view.carpeta', $idCarpeta) }}">{{ $numCarpeta }}</a></li>
								@else
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
								@endif
								@isset($carpetaNueva)
								<li class="breadcrumb-item active">{{ $carpetaNueva[0]->numCarpeta }}</li>
								@else
								<li class="breadcrumb-item active">@yield('title')</li>
								@endif
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

	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.min.js')}}" ></script>
	<script src="{{ asset('plugins/popper/js/popper.min.js')}}" ></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
	<script src="{{ asset ('plugins/sweetalert/js/sweetalert.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<!-- REQUIRED SCRIPTS -->
	<!-- Bootstrap -->
	<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/idle-timer/js/idle-timer.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	@include('template.scriptExpireSession')

	@stack('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			@stack('docready-js')
		});
	</script>

	@include('sweet::alert')
	@include('template.partials.footer')
</body>
</html>
