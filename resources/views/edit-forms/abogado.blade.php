@extends('template.form-edit')

@section('title', 'Editar abogado')

@push('css')
<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => ['update.abogado', $idCarpeta, $id], 'method' => 'PUT'])  !!}
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">

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
				{!! Form::hidden('rfc-edit', ($personales->rfc)) !!}
				{!! Form::hidden('idExtraAbogado', ($info->idExtraAbogado)) !!}
				{!! Form::hidden('idPersona', ($personales->idPersona)) !!}
				{!! Form::hidden('idVariablesPersona', ($info->idVariablesPersona)) !!}
				{!! Form::hidden('idDomicilioTrabajo', ($direccionTrab->idDomicilioTrabajo)) !!}

				@endif
			</div>
			<div id="tabogado">
				<ul id="tabsabogado" class="nav nav-tabs">
					<li class="nav-item" id="datosPer" >
						<a class="nav-link active" data-toggle="tab" href="#collapsePersonales3"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
							<div id="espacio-notif"><span id="vacio" class="xvacio"></span>
								<span id="error" class="xerror"></span>
								<span id="bien" class="bien"></span></div>
							</a>
						</li>
						<li class="nav-item" id="datosTrab">
							<a class="nav-link" data-toggle="tab" href="#collapseTrab3"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
								<div id="espacio-notif2"><span id="vacio1" class="xvacio"></span>
									<span id="error1" class="xerror"></span>
									<span id="bien1" class="bien"></span></div>
								</a>
							</li>
							<li class="nav-item" id="datosAut">
								<a class="nav-link" data-toggle="tab" href="#collapseAutoridad"><p id="autoridad" class="pestaña"><i class="fa fa-shield" aria-hidden="true"></i></p>
									<div id="espacio-notif5"><span id="vacio2" class="xvacio"></span>
										<span id="error2" class="xerror"></span>
										<span id="bien2" class="bien"></span></div>
									</a>
								</li>
							</ul>
						</div>
						<div class="boxtwo">
							<div class="tab-content" id="ctabogado">
								<div class="tab-pane active container" id="collapsePersonales3">
									@include('fields.personales-abo')


								</div>
								<div class="tab-pane container" id="collapseTrab3">
									@include('fields.lugartrabajo')
								</div>
								<div class="tab-pane container" id="collapseAutoridad">
									@include('fields.extra-abo')
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
			@endsection

			{!! Form::hidden('idCarpeta', $idCarpeta) !!}
				{!! Form::hidden('rfc-edit', ($personales->rfc)) !!}
				{!! Form::hidden('idExtraAbogado', ($info->idExtraAbogado)) !!}
				{!! Form::hidden('idPersona', ($personales->idPersona)) !!}
				{!! Form::hidden('idVariablesPersona', ($info->idVariablesPersona)) !!}
				{!! Form::hidden('idDomicilioTrabajo', ($direccionTrab->idDomicilioTrabajo)) !!}

			@push('scripts')
			<script src="{{ asset('plugins/toastr/js/toastr.min.js')}}" ></script>
			<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
			<script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
			<script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
			<script src="{{ asset('js/persona.js') }}"></script>
			<script src="{{ asset('js/selects/async.js') }}"></script>
			<script src="{{ asset('js/selects/origen.js') }}"></script>
			<script src="{{ asset('js/selects/domicilio-trab.js') }}"></script>
			<script src="{{ asset('js/selects/sisy.js') }}"></script>
			<script src="{{ asset('js/validations/tab-abogado.js') }}"></script>
			<script src="{{ asset('js/edit-forms/abogado-edit.js') }}"></script>
			<script src="{{ asset('js/curp.js') }}"></script>
			<script src="{{ asset('js/rfcFisico.js') }}"></script>
			<script src="{{ asset('js/ajaxCurpEdit.js') }}"></script>
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
		$("#rfc").addClass("vacio");
		$("#homo").addClass("vacio");
		$("#curp").addClass("vacio");
		$("#telefono").addClass("vacio");

		$("#lugarTrabajo").addClass("vacio");
		$("#telefonoTrabajo").addClass("vacio");

		$("#calle2").addClass("vacio");
		$("#numExterno2").addClass("vacio");
		$("#numInterno2").addClass("vacio");
		$("#numInterno3").addClass("vacio");
		$("#cedulaProf").addClass("vacio");
		$("#correo").addClass("vacio");
		var rfcFisica = $("input[name='rfc-edit']").val();
		var rfc = rfcFisica.substr (0,10);
		var homoclave = rfcFisica.substr(-3);

		$('#nombres').val("{{ $personales->nombres }}");
		$('#primerAp').val("{{ $personales->primerAp }}");
		$('#segundoAp').val("{{ $personales->segundoAp }}");
		$('#sexo').val("{{ $personales->sexo }}").trigger('change');
		$('#idNacionalidad').val({{ $personales->idNacionalidad }}).trigger('change');
		$('#idEstadoOrigen').val({{ $personales->idEstado}}).trigger('change');
		$('#rfc').val(rfc);
		$('#homo').val(homoclave);
		$('#curp').val("{{$personales->curp}}");
		$('#idMunicipioOrigen').val({{$personales->idMunicipioOrigen}}).trigger('change');
		$('#telefono').val("{{$personales->telefono}}");
		$('#idEstadoCivil').val({{$personales->idEstadoCivil}}).trigger('change');
		$('#lugarTrabajo').val("{{$direccionTrab->lugarTrabajo}}");
		$('#telefonoTrabajo').val("{{$direccionTrab->telefonoTrabajo}}");
		$('#idEstado2').val({{$direccionTrab->id}}).trigger('change');
		$('#idMunicipio2').val({{$direccionTrab->idMunicipio}}).trigger('change');
		$('#idColonia2').val({{$direccionTrab->idColonia}}).trigger('change');
		$('#idLocalidad2').val({{$direccionTrab->idLocalidad}}).trigger('change');
		$('#calle2').val("{{$direccionTrab->calle}}");
		$('#numExterno2').val("{{$direccionTrab->numExterno}}");
		$('#numInterno2').val("{{$direccionTrab->numInterno}}");
		$('#tipo').val("{{$info->tipo}}");
		$('#sector').val("{{$info->sector}}");
		$('#cedulaProf').val("{{$info->cedulaProf}}");
		$('#correo').val("{{$info->correo}}");


		@endpush
