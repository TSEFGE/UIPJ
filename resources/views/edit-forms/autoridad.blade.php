@extends('template.form-edit')

@section('title', 'Agregar autoridad')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => ['update.autoridad',$idCarpeta ], 'method' => 'put'])  !!}

	<input type="hidden" name="idExtraAutoridad" value="{{$personales->idExtraAutoridad}}">
	<input type="hidden" name="idVariablesPersona" value="{{$personales->idVariablesPersona}}">
	<input type="hidden" name="idPersona" value="{{$personales->idPersona}}">
	<input type="hidden" name="idDomicilio" value="{{$direccion->idDomicilio}}">
	<input type="hidden" name="idDomicilioTrabajo" value="{{$direccionTrab->idDomicilio}}">

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
	@include('fields.ajaxCurpEdit')

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

	@isset($personales)
		$('#nombres').val('{{$personales->nombres}}');
		$('#primerAp').val('{{$personales->primerAp}}');
		$('#segundoAp').val('{{$personales->segundoAp}}');
		$('#fechaNacimiento').val('{{ Carbon\Carbon::parse($personales->fechaNacimiento)->format('d-m-Y') }}');
		$('#edad').val('{{$personales->edad}}');
		$('#sexo').val('{{$personales->sexo}}');
		$('#idNacionalidad').val('{{$personales->idNacionalidad}}');
		$('#idEstadoOrigen').val('{{$personales->idEstadoOrigen}}');

		var homoclave = ('{{$personales->rfc}}').substr(10);
		var rfc =('{{$personales->rfc}}').substr (0,10);
		$('#rfc').val(rfc);
		$('#homo').val(homoclave);
		$('#curp').val('{{$personales->curp}}');
		$('#idEtnia').val('{{$personales->idEtnia}}');
		$('#idLengua').val('{{$personales->idLengua}}');
		$('#idMunicipioOrigen').val('{{$personales->idMunicipioOrigen}}');
		$('#telefono').val('{{$personales->telefono}}');
		$('#motivoEstancia').val('{{$personales->motivoEstancia}}');
		$('#idOcupacion').val('{{$personales->idOcupacion}}');
		$('#idEstadoCivil').val('{{$personales->idEstadoCivil}}');
		$('#idReligion').val('{{$personales->idReligion}}');
		$('#idEscolaridad').val('{{$personales->idEscolaridad}}');
		$('#numDocIdentificacion').val('{{$personales->numDocIdentificacion}}');
		docs='CREDENCIAL DE ELECTOR PASAPORTE CARTILLA MILITAR LICENCIA PARA CONDUCIR CREDENCIAL ESCOLAR';
		doc='{{$personales->docIdentificacion}}';
		if ( docs.toLowerCase().indexOf(doc.toLowerCase()) != -1 ) {
			$('#docIdentificacion').val('{{$personales->docIdentificacion}}');
		} else {
				$('#docIdentificacion').val('OTRO');
			$('#otrodocto').show();
			$('#otroDocumento').val('{{$personales->docIdentificacion}}');
		}
	@endisset
	@isset($direccion)

		$('#idEstado').val('{{$direccion->idEstado}}');
		$('#idMunicipio').val('{{$direccion->idMunicipio}}').trigger('change');
		$('#idLocalidad').val('{{$direccion->idLocalidad}}').trigger('change');
		$('#idColonia').val('{{$direccion->idColonia}}').trigger('change');
		$('#calle').val('{{$direccion->calle}}');
		$('#numExterno').val('{{$direccion->numExterno}}');
		$('#numInterno').val('{{$direccion->numInterno}}');

	@endisset
	@isset($direccionTrab)
		$('#lugarTrabajo').val('{{$personales->lugarTrabajo}}');
		$('#telefonoTrabajo').val('{{$personales->telefonoTrabajo}}');
		$('#idEstado2').val('{{$direccionTrab->idEstado}}').trigger('change');
		$('#idMunicipio2').val('{{$direccionTrab->idMunicipio}}').trigger('change');
		$('#idLocalidad2').val('{{$direccionTrab->idLocalidad}}').trigger('change');
		$('#idColonia2').val('{{$direccionTrab->idColonia}}').trigger('change');
		$('#calle2').val('{{$direccionTrab->calle}}');
		$('#numExterno2').val('{{$direccionTrab->numExterno}}');
		$('#numInterno2').val('{{$direccionTrab->numInterno}}');
	@endisset
	@isset($autoridades)
		$('#antiguedad').val('{{$autoridades->antiguedad}}');
		$('#rango').val('{{$autoridades->rango}}').trigger('change');
		$('#horarioLaboral').val('{{$autoridades->horarioLaboral}}');
	@endisset




@endpush
