@extends('template.form')

@section('title', 'Agregar autoridad')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => 'store.autoridad', 'method' => 'POST'])  !!}
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
			</div>
		</div>
		<div class="col">
			<div class="text-right">
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
				@if(!empty($idCarpeta))
					{!! Form::hidden('idCarpeta', $idCarpeta) !!}
				@endif
			</div>
<!-- Pestañas -->
		<div id="tautoridad">
				<ul id="tabsautoridad" class="nav nav-tabs">
 					<li class="nav-item">
    					<a class="nav-link active" data-toggle="tab" href="#collapsePersonales3"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
								<div id="espacio-notif"><span id="vacioa" class="xvacio"></span>
								<span id="errora" class="xerror"></span>
								<span id="biena" class="bien"></span></div>
							</a>
  					</li>
  					<li class="nav-item">
    					<a class="nav-link"  data-toggle="tab" href="#collapseDir3"><p id="direccion" class="pestaña"><i class="fa fa-address-card" aria-hidden="true"></i></p>
								<div id="espacio-notif1"><span id="vacioa1" class="xvacio"></span>
								<span id="errora1" class="xerror"></span>
								<span id="biena1" class="bien"></span></div>
						</a>
  					</li>
  					<li class="nav-item">
    					<a class="nav-link" data-toggle="tab"  href="#collapseTrab3"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
								<div id="espacio-notif2"><span id="vacioa2" class="xvacio"></span>
								<span id="errora2" class="xerror"></span>
								<span id="biena2" class="bien"></span></div>
						</a>
  					</li>
			   		<li class="nav-item">
			    		<a class="nav-link" data-toggle="tab"  href="#collapseAutoridad"><p id="autoridad" class="pestaña"><i class="fa fa-shield" aria-hidden="true"></i></p>
							 <div id="espacio-notif5"><span id="vacioa3" class="xvacio"></span>
								<span id="errora3" class="xerror"></span>
								<span id="biena3" class="bien"></span></div>
						</a>
			  		</li>
				</ul>
		</div>
		<div id="cajados" class="boxtwo">
		<div class="tab-content" id="ctautoridad">
			<div class="tab-pane active container" id="collapsePersonales3">
				@include('fields.personales-aut')
			</div>
			<div class="tab-pane container" id="collapseDir3">
				@include('fields.direcciones')
			</div>
			<div class="tab-pane container" id="collapseTrab3">
				@include('fields.lugartrabajo')
			</div>
			<div class="tab-pane container" id="collapseAutoridad">
				@include('fields.extra-aut')
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
		@section('titulo-tabla', 'Autoridades registradas')
		@include('tables.autoridades')
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
	<script src="{{ asset('js/selects/sisy.js') }}"></script>
	<script src="{{ asset('js/validations/tab-autoridad.js') }}"></script>
	<script src="{{ asset('js/curp.js') }}"></script>
	<script src="{{ asset('js/persona.js') }}"></script>
	<script src="{{ asset('js/autoridad.js') }}"></script>
    <script src="{{ asset('js/rfcFisico.js') }}"></script>
	<script src="{{ asset('js/ajaxCurp.js') }}"></script>
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
	$('select').addClass('vacio');
	$("#nombres").addClass("vacio");
	$("#primerAp").addClass("vacio");
	$("#segundoAp").addClass("vacio");
	$("#fechaNacimiento").addClass("vacio");
	$("#edad").addClass("vacio");
	$("#rfc").addClass("vacio");
	$("#homo").addClass("vacio");
	$("#curp").addClass("vacio");
	$("#telefono").addClass("vacio");
	$("#motivoEstancia").addClass("vacio");

	$("#numDocIdentificacion").addClass("vacio");
	$("#calle").addClass("vacio");
	$("#numExterno").addClass("vacio");
	$("#numInterno").addClass("vacio");
	$("#numExterno2").addClass("vacio");
	$("#numInterno2").addClass("vacio");
	$("#lugarTrabajo").addClass("vacio");
	$("#telefonoTrabajo").addClass("vacio");
	$("#calle2").addClass("vacio");
	$("#antiguedad").addClass("vacio");
	$("#horarioLaboral").addClass("vacio");
@endpush
