<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="{{ url('/home') }}"><img src="{{ asset('img/logofge2.png') }}" alt="" class="logofge"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				@auth
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/home') }}">Inicio <span class="sr-only">(current)</span></a>
					</li>
					{{--<li class="nav-item">
						<a class="nav-link" href="{{ url('/registrar-carpeta') }}">Registrar nueva Carpeta</a>
					</li>--}}
					@isset ($carpetaNueva)
						<li class="nav-item">
						    <a class="nav-link" href="#">Iniciando carpeta: {{ $carpetaNueva[0]->numCarpeta }}</a>
						</li>
					@else
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/iniciar-carpeta') }}">Registrar nueva Carpeta</a>
					</li>
					@endisset
				@endauth
			</ul>

			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Ingresar</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
				@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->nombres." ".Auth::user()->primerAp." ".Auth::user()->segundoAp }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Cambiar contraseña</a></li>
							<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Cerrar sesión
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endguest
			</ul>
		</div>
	</nav>
</header>