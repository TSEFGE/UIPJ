@extends('template.form-edit')

@section('title', 'Editar investigado o imputado')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
@include('forms.errores')
{!! Form::open(['route' => ['update.denunciado', $personales->idDenunciado], 'method' => 'PUT']) !!}

<div class="card-header">
<div class="row">

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
			<div class="comparecencia">
				<div id="denunciado">
					<ul class="nav nav-tabs" id="tdenunciado">
						<li class="nav-item" id="datosPer">
							<a class="nav-link active" data-toggle="tab"  href="#collapsePersonales2"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
								<div id="espacio-notif"><span id="vacio" class="xvacio"></span>
								<span id="error" class="xerror"></span>
								<span id="bien" class="bien"></span></div>
							</a>
						</li>
						<li class="nav-item" id="datosDir" >
							<a class="nav-link" data-toggle="tab" href="#collapseDir2"><p id="direccion" class="pestaña"><i class="fa fa-address-card" aria-hidden="true"></i></p>
								<div id="espacio-notif1"><span id="vacio1" class="xvacio"></span>
								<span id="error1" class="xerror"></span>
								<span id="bien1" class="bien"></span></div>
							</a>
						</li>
						@if (isset ($personales) )
							@if ( ($personales->esEmpresa) == 0)
						<li class="nav-item" id="datosTrab">
							<a class="nav-link" data-toggle="tab" href="#collapseTrab2"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
								<div id="espacio-notif2"><span id="vacio2" class="xvacio"></span>
								<span id="error2" class="xerror"></span>
								<span id="bien2" class="bien"></span></div>
							</a>
						</li>
							@endif
						@endif
						<li class="nav-item" id="datosNotif">
							<a class="nav-link" data-toggle="tab"  href="#collapseNotifs2"><p id="dnotificaciones" class="pestaña"><i class="fa fa-bell" aria-hidden="true"></i></p>
									<div id="espacio-notif3"><span id="vacio3" class="xvacio"></span>
									<span id="error3" class="xerror"></span>
									<span id="bien3" class="bien"></span></div>
								</a>
						</li>
						@if (isset ($personales) )
							@if ( ($personales->esEmpresa) == 0)
						<li class="nav-item"  id="datosExtra">
							<a class="nav-link" data-toggle="tab"   href="#collapseDenun2"><p id="dextra" class="pestaña"><i class="fa fa-asterisk" aria-hidden="true"></i></p>
									<div id="espacio-notif4"><span id="vacio4" class="xvacio"></span>
									<span id="error4" class="xerror"></span>
									<span id="bien4" class="bien"></span></div>
								</a>
						</li>
						@endif
						@endif
					</ul>
				</div>
			</div>

			<div id="qrr">
				<div class="boxtwo">
					<div class="row">

					</div>
				</div>
			</div>

			<div id="cajados" class="boxtwo">
				<div class="tab-content comparecencia" id="ctdenunciado">
					<div class="tab-pane active container" id="collapsePersonales2">

					@if (isset ($personales) )
									@if ( ($personales->esEmpresa) == 1)
										@include('edit-fields.personales-moral')

									@endif
								@endif
								@if (isset ($personales) )
									@if ( ($personales->esEmpresa) == 0)
									@include('edit-fields.personales-fisica')
									@endif
								@endif

					</div>
					<div class="tab-pane container" id="collapseDir2">
						@include('fields.direcciones')
											</div>
						@if (isset ($personales) )
							@if ( ($personales->esEmpresa) == 0)

					<div class="tab-pane container" id="collapseTrab2">
						@include('fields.lugartrabajo')
					</div>
					@endif
			      @endif
					<div class="tab-pane container" id="collapseNotifs2">
						@include('fields.notificaciones')
					</div>
					@if (isset ($personales) )
							@if ( ($personales->esEmpresa) == 0)
					<div class="tab-pane container" id="collapseDenun2">
						@include('fields.extra-denunciado')
					</div>
					@endif
			      @endif
				</div>
			</div>
			{!! Form::hidden('esEmpresa', ($personales->esEmpresa)) !!}
			{!! Form::hidden('rfc-edit', ($personales->rfc)) !!}
			{!! Form::hidden('idExtraDenunciado', ($personales->idDenunciado)) !!}
			{!! Form::hidden('idPersona', ($personales->idPersona)) !!}
			{!! Form::hidden('idVariablesPersona', ($personales->idVariablesPersona)) !!}
			{!! Form::hidden('idDireccion', ($direccion->id)) !!}
			@if (isset ($personales) )
				@if ( ($personales->esEmpresa) == 0)
			{!! Form::hidden('idDireccionTrab', ($direccionTrab->id)) !!}
				@endif
			@endif

			{!! Form::hidden('idNotificacion', ($direccionNotif->idNotificacion)) !!}
				<!-- Fin pestañas -->
			</div>
		</div>

	</div>
{!! Form::close() !!}
@endsection


@push('scripts')
	<script src="{{ asset('plugins/toastr/js/toastr.min.js')}}" ></script>
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
	<script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	{{-- <script src="{{ asset('js/persona.js') }}"></script>--}}
	<script src="{{ asset('js/persona-moral.js') }}"></script>
	{{-- <script src="{{ asset('js/tipo-persona.js') }}"></script>
	<script src="{{ asset('js/denunciado.js') }}"></script>--}}
    <script src="{{ asset('js/selects/async.js') }}"></script>
    <script src="{{ asset('js/selects/origen.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio-trab.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio-notif.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio-den-conocido.js') }}"></script>
	<script src="{{ asset('js/selects/sisy.js') }}"></script>  
	<script src="{{ asset('js/curp.js') }}"></script>
	<script src="{{ asset('js/rfcFisico.js') }}"></script>
	<script src="{{ asset('js/rfcMoral.js') }}"></script>
	<script src="{{ asset('js/ajaxCurpEdit.js') }}"></script>
	{{--<script src="{{ asset('js/validations/tab-denunciado.js') }}"></script>--}}

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
$(function(){
		$('#fechanac2').datetimepicker({
			format: 'DD-MM-YYYY',
			minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
			maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
			widgetPositioning: {
				vertical: 'bottom',
				horizontal: 'left'
			}
		});
	});


	@if (isset ($personales) )
	@if ( ($personales->esEmpresa) == 0)
	var rfcFisica = $("input[name='rfc-edit']").val();
	var rfc = rfcFisica.substr (0,10);
	var homoclave = rfcFisica.substr(-3);
	$('#nombres').val("{{ $personales->nombres }}");
	$("#primerAp").val("{{ $personales->primerAp }}");
	$("#segundoAp").val("{{ $personales->segundoAp }}");
	$('#fechanac2').datetimepicker('format', "DD-MM-YYYY");
	$('#fechanac2').datetimepicker('date', moment("{{ $personales->fechaNacimiento}}").format("DD-MM-YYYY"));
	$("#sexo").val("{{ $personales->sexo }}");
	$('#idNacionalidad').val({{$personales->idNacionalidad}}).trigger('change');
	$('#idEstadoOrigen').val({{ $personales->idEstado}}).trigger('change');
	$('#rfc').val(rfc);
	$('#homo').val(homoclave);
	$('#curp').val("{{$personales->curp}}");
	$('#idEtnia').val({{$personales->idEtnia}}).trigger('change');
	$('#idLengua').val({{$personales->idLengua}}).trigger('change');
	$('#idMunicipioOrigen').val({{$personales->idMunicipioOrigen}}).trigger('change');
	$('#idReligion').val(7).trigger('change');
	$('#idEscolaridad').val({{$personales->idEscolaridad}}).trigger('change');

	$("#telefono").val("{{ $personales->telefono }}");
	$("#motivoEstancia").val("{{ $personales->motivoEstancia }}");
	$("#docIdentificacion").val("{{ $personales->docIdentificacion }}");
	$("#numDocIdentificacion").val("{{ $personales->numDocIdentificacion }}");
	$("#calle").val("{{ $direccion->calle }}");
	$("#numExterno").val("{{ $direccion->numExterno }}");
	$("#numInterno").val("{{ $direccion->numInterno }}");
	$("#alias").val("{{ $personales->alias }}");
	$("#personasBajoSuGuarda").val("{{ $personales->personasBajoSuGuarda }}");
	$("#ingreso").val("{{ $personales->ingreso }}");
	$("#residenciaAnterior").val("{{ $personales->residenciaAnterior }}");
	$("#vestimenta").val("{{ $personales->vestimenta }}");
	$("#senasPartic").val("{{ $personales->senasPartic }}");
	$("#calle2").val("{{ $direccionTrab->calle }}");
	$("#lugarTrabajo").val("{{ $personales->lugarTrabajo }}");
	$("#numExterno2").val("{{ $direccion->numExterno }}");
	$("#numInterno2").val("{{ $direccion->numInterno }}");
	$("#calle3").val("{{ $direccionNotif->calle }}");
	$("#numExterno3").val("{{ $direccionNotif->numExterno }}");
	$("#numInterno3").val("{{ $direccionNotif->numInterno }}");
	$("#email").val("{{ $direccionNotif->correo }}");
	$("#telefonoN").val("{{ $direccionNotif->telefono }}");
	$("#fax").val("{{ $direccionNotif->fax }}");
	$('#idEstadoCivil').val({{$personales->idEstadoCivil}}).trigger('change');
	$('#idEstado').val({{$personales->idEstado}}).trigger('change');
	$('#idMunicipio').val({{$direccion->idMunicipio}}).trigger('change');
	$('#idLocalidad').val({{$direccion->idLocalidad}}).trigger('change');
	$('#idColonia').val({{$direccion->idColonia}}).trigger('change');
	$('#telefonoTrabajo').val({{$personales->telefonoTrabajo}}).trigger('change');
	$('#codigoPostal').val({{$direccion->codigoPostal}}).trigger('change');
	$('#periodoIngreso').val("{{$personales->periodoIngreso}}");
	$('#idOcupacion').val({{$personales->idOcupacion}}).trigger('change');
	$("#narracionUno").prop('disabled', true);
	@endif
	@endif
	@if (isset ($personales) )
	@if ( ($personales->esEmpresa) == 1)
	var rfcMoral = $("input[name='rfc-edit']").val();
	var rfc = rfcMoral.substr (0,9);
	var homoclave = rfcMoral.substr(-3);
	$('#nombres2').val("{{ $personales->nombres }}");
	$('#rfc2').val(rfc);
	$('#homo2').val(homoclave);
	$('#fechaAltaEmpresa').datetimepicker('format', "DD-MM-YYYY");
	$('#fechaAltaEmpresa').datetimepicker('date', moment("{{ $personales->fechaNacimiento}}").format("DD-MM-YYYY"));
	$('#representanteLegal').val("{{ $personales->representanteLegal }}");
	$("#calle").val("{{ $direccion->calle }}");
	$("#numExterno").val("{{ $direccion->numExterno }}");
	$("#numInterno").val("{{ $direccion->numInterno }}");
	$("#calle3").val("{{ $direccion->calle }}");
	$("#numExterno3").val("{{ $direccion->numExterno }}");
	$("#numInterno3").val("{{ $direccion->numInterno }}");
	$("#email").val("{{ $direccionNotif->correo }}");
	$("#telefonoN").val("{{ $direccionNotif->telefono }}");
	$("#fax").val("{{ $direccionNotif->fax }}");

	$("#narracionUnoM").prop('disabled', true);

	@endif
	@endif




@endpush
