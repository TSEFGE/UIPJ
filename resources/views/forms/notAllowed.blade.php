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
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="hold-transition login-page">	
	<div id="#dontcard" class="login-box2 rounded">
			<div class="card-body arriba rounded-top">
				<a id="login-logo2" ><img src="{{ asset('img/logo-fge-svg.svg') }}" alt=""></a>
			</div>
			<div id="cuadro" class="card-body login-card-body abajo rounded-bottom">
				<div class="text-center" >
					<strong style="color:#ffffff">Ya tiene una sesión activa en este navegador</strong>
				</div>
			</div>		
	</div>
</body>
</html>
