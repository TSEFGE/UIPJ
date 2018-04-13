<aside class="main-sidebar  elevation-4 barra-izquierda">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="https://rawcdn.githack.com/Romaincks/assets/master/img/logo-150px-FGE.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		style="opacity: .8">
		<span class="brand-text font-weight-light">FGE Veracruz</span>
	</a>

	<!-- Sidebar -->
	<div  class="sidebar font-weight-light">
		<!-- Sidebar user panel (optional) -->
		@auth
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">{{ Auth::user()->nombres." ". Auth::user()->apellidos }}</a>
				<a href="#" class="d-block"> <small>Numero de fiscal </small><b> {{ Auth::user()->numFiscal}}</b></a>
			</div>
		</div>
		@endauth

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
						with font-awesome or any other icon font library -->
						<li class="nav-item"><a href="{{ url('/home') }}" class=" {{ Request::is( 'home') ? 'active' : '' }} nav-link"><i class=" nav-icon fa fa-home"></i> <p> Inicio</p> <span></span></a></li>
						<li class="nav-item"><a href="{{ route('libro.gobierno') }}" class=" {{ Request::is( 'libro-gobierno') ? 'active' : '' }} nav-link"><i class=" nav-icon fa fa-book"></i> <p> Libro de gobierno</p><span></span></a></li>
						@if(isset($idCarpeta))
						<li class="nav-item" ><a href="{{ route('view.carpeta', $idCarpeta) }}" class="active nav-link"><i class="nav-icon fa fa-folder-open"></i><p>Carpeta Abierta</p> <span></span></a></li>
						@endif
						<li class="nav-item"><a href="{{ url('/iniciar-carpeta') }}" class="{{ Request::is( 'iniciar-carpeta') ? 'active' : '' }} nav-link"><i class="nav-icon fa fa-folder"></i><p>Nueva carpeta</p> <span></span></a></li>
						<li class="nav-item"><a href="{{ url('/bitacora') }}" class="{{ Request::is( 'bitacora') ? 'active' : '' }} nav-link"><i class="nav-icon fa fa-pencil-square-o"></i><p>Bitácora</p> <span></span></a></li>
						<li class="nav-item"><a href="{{ route('agenda') }}" class="{{ Request::is( 'agenda') ? 'active' : '' }} nav-link"><i class="nav-icon fa fa-calendar"></i><p>Agenda</p> <span></span></a></li>
						<li class="nav-item">
							<a href="pages/widgets.html" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
									Widgets
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fa fa-pie-chart"></i>
								<p>
									Charts
									<i class="right fa fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/charts/chartjs.html" class="nav-link">
										<i class="fa fa-circle-o nav-icon"></i>
										<p>ChartJS</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/flot.html" class="nav-link">
										<i class="fa fa-circle-o nav-icon"></i>
										<p>Flot</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/inline.html" class="nav-link">
										<i class="fa fa-circle-o nav-icon"></i>
										<p>Inline</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-header">MISCELLANEOUS</li>
						<li class="nav-item">
							<a href="https://adminlte.io/docs" class="nav-link">
								<i class="nav-icon fa fa-file"></i>
								<p>Documentation</p>
							</a>
						</li>
						<li class="nav-item bottom" ><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"><i class=" nav-icon fa fa-power-off" ></i><p> Cerrar sesión</p></a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
			</ul>

		</nav>
		<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
		</aside>
