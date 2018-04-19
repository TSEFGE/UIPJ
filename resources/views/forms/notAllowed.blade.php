<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>No permitido.</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>
	<div class="container">
		<header>
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="#"><img src="{{ asset('img/logofge2.png') }}" alt="" class="logofge"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				 <span class="navbar-toggler-icon"></span>
			 </button>

			 <div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mr-auto">
				</ul>
			</div>
		</nav>
	</header>

	<br><br><br><br>
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a>No permitido.</a>
			</h5>
		</div>
		<div style="display: flex; justify-content: center;">
			<img src="{{ asset('img/fgeLogo.jpg') }}" width="30%">
		</div>
		<h5 class="mb-0 text-center">
			<a>Sólo está permitido usar una pestaña.</a>
		</h5>
	</div>
</div>
</body>
</html>
