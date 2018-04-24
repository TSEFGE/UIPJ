@extends('template.form')

@section('title', 'Agregar testigo')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => 'store.testigo', 'method' => 'POST']) !!}
{{ csrf_field() }}

<div class="card-header">
	<div class="row">
		<div class="col">
		</div>
		<div class="col">
			<div class="text-right">

				<input type="radio" id="esEmpresa2" name="esEmpresa2" hidden>
				@include('forms.buttons')
			</div>
		</div>
	</div>
</div>

@include('forms.errores')
<div class=" card-body boxone">
	<div class="row no-gutters">
		<div class="col-12">
				<div class="row">
					@if(!empty($idCarpeta)) {!! Form::hidden('idCarpeta', $idCarpeta) !!} @endif
				</div>
				<div class="" id="datosPer">
					<div id="testigo">
						<ul id="tabstestigo" class="nav nav-tabs">
							<li class="nav-item" id="datosPer">
								<a class="nav-link active pestaña" data-toggle="tab" href="#collapsePersonalesTestigo"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
								<div id="espacio-notif"><span id="vacio" class="xvacio"></span>
								<span id="error" class="xerror"></span>
								<span id="bien" class="bien"></span></div>
								</a>
							</li>
							<li class="nav-item" id="datosDir">
								<a class="nav-link" data-toggle="tab"  href="#collapseDirTestigo"><p id="direccion" class="pestaña"><i class="fa fa-address-card" aria-hidden="true"></i></p>
								<div id="espacio-notif1"><span id="vacio1" class="xvacio"></span>
								<span id="error1" class="xerror"></span>
								<span id="bien1" class="bien"></span></div>
								</a>
							</li>
							<li class="nav-item" id="datosTrab">
								<a class="nav-link" data-toggle="tab"  href="#collapseTrabTestigo"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
								<div id="espacio-notif2"><span id="vacio2" class="xvacio"></span>
								<span id="error2" class="xerror"></span>
								<span id="bien2" class="bien"></span></div>
								</a>
							</li>
							<li class="nav-item" id="datosNotif">
								<a class="nav-link" data-toggle="tab"  href="#collapseNotifsTestigo"><p id="dnotificaciones" class="pestaña"><i class="fa fa-bell" aria-hidden="true"></i></p>
								<div id="espacio-notif3"><span id="vacio3" class="xvacio"></span>
								<span id="error3" class="xerror"></span>
								<span id="bien3" class="bien"></span></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="cajados" class="boxtwo">
					<div class="tab-content" id="cttestigo">
						<div class="tab-pane active container" id="collapsePersonalesTestigo">
							@include('fields.personales')
						</div>
						<div class="tab-pane container" id="collapseDirTestigo">
							@include('fields.direcciones')
						</div>
						<div class="tab-pane container" id="collapseTrabTestigo">
							@include('fields.lugartrabajo')
						</div>
						<div class="tab-pane container" id="collapseNotifsTestigo">
							@include('fields.notificaciones')
						</div>
					</div>
				</div>
					<!-- Fin pestañas -->
		</div>
	</div>
</div>
{!! Form::close() !!}
@endsection

@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Testigos registrados') @include('tables.testigos')
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('plugins/toastr/js/toastr.min.js')}}" ></script>
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/selects/async.js') }}"></script>
    <script src="{{ asset('js/selects/origen.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio-trab.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio-notif.js') }}"></script>
	<script src="{{ asset('js/selects/sisy.js') }}"></script>
	<script src="{{ asset('js/validations/tab-testigo.js') }}"></script>
	<script src="{{ asset('js/curp.js') }}"></script>
	<script src="{{ asset('js/persona.js') }}"></script>
    @include('fields.rfcFisico')
	@include('fields.ajaxCurp')
@endpush

@push('docready-js')
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
    
	$('#esEmpresa2').trigger('click');
	$('#datosPer').show();
    $('#personaFisica').show();
    $('#personaMoral').hide();
    $('#datosDir').show();
    $('#datosTrab').show();
    $('#datosNotif').show();
    $('#datosExtra').show();
    $('#extra-fis').show();
    $('#Victima').show();
@endpush
