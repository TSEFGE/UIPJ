@extends('template.form-edit')

@section('title', 'Editar víctima, ofendido u apoderado legal')

@push('css')
<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => ['update.denunciante', $personales->idDenunciante], 'method' => 'PUT']) !!}
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
		 </div>
		 <div class="" id="">
			 <div id="denunciante">

				<ul id="tdenunciante" class="nav nav-tabs">
				 <li class="nav-item " id="datosPer">
					<a class="nav-link tab active pestaña " id="p-personal" data-toggle="tab" href="#collapsePersonales1"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
						<div id="espacio-notif"><span id="tab1" class="xvacio"></span>
						 <span id="txtTab1" class="xerror"></span>
						 <span id="t1" class="bien"></span></div>
					 </a>
				 </li>
				 <li class="nav-item" id="datosDir">
					<a class="nav-link" data-toggle="tab" id="p-direccion" href="#collapseDir1"><p id="direccion" class="pestaña"><i class="fa fa-address-card" aria-hidden="true"></i></p>
						<div id="espacio-notif1"><span id="tab2" class="xvacio"></span>
						 <span id="txtTab2" class="xerror"></span>
						 <span id="t2" class="bien"></span></div>
					 </a>
				 </li>
				 @if (isset ($personales) )
				@if ( ($personales->esEmpresa) == 0)
				 <li class="nav-item" id="datosTrab">
					<a class="nav-link" data-toggle="tab"  href="#collapseTrab1"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
						<div id="espacio-notif2"><span id="tab3" class="xvacio"></span>
						 <span id="txtTab3" class="xerror"></span>
						 <span id="t3" class="bien"></span></div>
					 </a>
				 </li>
				 @endif
				 @endif
				 <li class="nav-item" id="datosNotif">
					<a class="nav-link" data-toggle="tab"  href="#collapseNotifs1"><p id="dnotificaciones" class="pestaña"><i class="fa fa-bell" aria-hidden="true"></i></p>
					 <div id="espacio-notif3"><span id="tab4" class="xvacio"></span>
						 <span id="txtTab4" class="xerror"></span>
						 <span id="t4" class="bien"></span></div>
					 </a>
				 </li>
			 </ul>
		 </div>
	 </div>
	 <div id="cajados" class="boxtwo">
		 <div class="tab-content" id="ctdenunciante">
			<div class="tab-pane active container" id="collapsePersonales1">
			@if (isset ($personales) )
				@if ( ($personales->esEmpresa) == 1)
					@include('edit-fields.personales-moral')
					@include('fields.extra-denunciante')
				@endif
			@endif
			@if (isset ($personales) )
				@if ( ($personales->esEmpresa) == 0)
				@include('edit-fields.personales-fisica')
				@include('fields.extra-denunciante')
				@endif
			@endif

			{{--@include('edit-fields.personales-fisica')
				@include('fields.extra-denunciante')--}}
			</div>

			<div class="tab-pane container" id="collapseDir1">
				@include('fields.direcciones')
			</div>
			@if (isset ($personales) )
				@if ( ($personales->esEmpresa) == 0)
			<div class="tab-pane container" id="collapseTrab1">
				@include('fields.lugartrabajo')
			</div>
			@endif
			@endif
			<div class="tab-pane container" id="collapseNotifs1">
				@include('fields.notificaciones')
			</div>

		</div>
	</div>
	{!! Form::hidden('esEmpresa', ($personales->esEmpresa)) !!}
	{!! Form::hidden('rfc-edit', ($personales->rfc)) !!}
	{!! Form::hidden('idExtraDenunciante', ($personales->idDenunciante)) !!}
	{!! Form::hidden('idPersona', ($personales->idPersona)) !!}
	{!! Form::hidden('idVariablesPersona', ($personales->idVariablesPersona)) !!}
	{!! Form::hidden('idDireccion', ($direccion->id)) !!}
	@if (isset ($personales) )
		@if ( ($personales->esEmpresa) == 0)
	{!! Form::hidden('idDireccionTrab', ($direccionTrab->id)) !!}	
	{!! Form::hidden('idInterprete', ($personales->idInterprete)) !!}
	
		@endif
	@endif
	{!! Form::hidden('idNoficiacion', ($direccionNotif->idNotificacion)) !!}
	{!! Form::hidden('idDomicilioNotif', ($direccionNotif->idDomicilioNotif)) !!}

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
	<script src="{{ asset('js/persona.js') }}"></script>
	<script src="{{ asset('js/persona-moral.js') }}"></script>
	{{--<script src="{{ asset('js/tipo-persona.js') }}"></script>
	<script src="{{ asset('js/denunciante.js') }}"></script>--}}
	<script src="{{ asset('js/selects/async.js') }}"></script>
	<script src="{{ asset('js/selects/origen.js') }}"></script>
	<script src="{{ asset('js/selects/domicilio.js') }}"></script>
	<script src="{{ asset('js/selects/domicilio-trab.js') }}"></script>
	<script src="{{ asset('js/selects/domicilio-notif.js') }}"></script>
	<script src="{{ asset('js/selects/sisy.js') }}"></script>--}}
	{{--<script src="{{ asset('js/validations/tab-denunciante.js') }}"></script>--}}
	<script src="{{ asset('js/curp.js') }}"></script>
	<script src="{{ asset('js/rfcFisico.js') }}"></script>
	<script src="{{ asset('js/rfcMoral.js') }}"></script>
	<script src="{{ asset('js/ajaxCurpEdit.js') }}"></script>

	@endpush
	<script>


	</script>
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
		$('#fechanac').datetimepicker({
			format: 'DD-MM-YYYY',
			minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
			maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
			widgetPositioning: {
				vertical: 'bottom',
				horizontal: 'left'
			}
		});
	});
	$("#espacioNarracion").hide();
	$("#narracionUnoM").prop('disabled',true);	
	$("#narracionUno").prop('disabled',true);
	
	var esEmpresa = $("input[name='esEmpresa']").val();
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
			$("#representanteLegal").val("{{ $personales->nombres }}");
			$('#idEstado').val({{$direccion->idEstado}}).trigger('change');
			$('#idMunicipio').val({{$direccion->idMunicipio}}).trigger('change');
			$('#idLocalidad').val({{$direccion->idLocalidad}}).trigger('change');
			$('#idColonia').val({{$direccion->idColonia}}).trigger('change');
			$('#calle').val("{{$direccion->calle}}");
			$('#numExterno').val("{{$direccion->numExterno}}");
			$('#numInterno').val("{{$direccion->numInterno}}");
			$('#calle3').val("{{$direccionNotif->calle}}");
			$('#numExterno3').val("{{$direccionNotif->numExterno}}");
			$('#numInterno3').val("{{$direccionNotif->numInterno}}");
			$('#correo').val("{{$direccionNotif->correo}}");
			$('#telefonoN').val("{{$direccionNotif->telefono}}");
			$('#fax').val("{{$direccionNotif->fax}}");
			console.log(rfcMoral);
			console.log(rfc);
			console.log(homoclave);
			@endif
			@endif
			@if (isset ($personales) )

		@if ( ($personales->esEmpresa) == 0)
			var rfcFisica = $("input[name='rfc-edit']").val();
			var rfc = rfcFisica.substr (0,10);
			var homoclave = rfcFisica.substr(-3);
			$('#nombres').val("{{ $personales->nombres }}");
			$('#primerAp').val("{{ $personales->primerAp }}");
			$('#segundoAp').val("{{ $personales->segundoAp }}");
			$('#fechanac').datetimepicker('format', "DD-MM-YYYY");
			$('#fechanac').datetimepicker('date', moment("{{ $personales->fechaNacimiento}}").format("DD-MM-YYYY"));
			/*$("#fechanac").on("change.datetimepicker", function(e) {
				$('#edad').val(moment().diff(e.date, 'years'));
				});*/
			/*var anios = "{{ $personales->fechaNacimiento}}";
			var hoy = moment('years');
			var abajo = $('#fechanac').datetimepicker('date', moment("{{ $personales->fechaNacimiento}}").format("DD-MM-YYYY"));
			console.log("abajo",anios);
			console.log("hoy",hoy);
			/*$("#edad").onload(function() {
					var anios = $('#edad').val();
					$('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
			});*/
			$('#sexo').val("{{ $personales->sexo }}").trigger('change');
			$('#idNacionalidad').val({{ $personales->idNacionalidad }}).trigger('change');
			$('#idEstadoOrigen').val({{ $personales->idEstado}}).trigger('change');
			$('#rfc').val(rfc);
			$('#homo').val(homoclave);
			$('#curp').val("{{$personales->curp}}");
			$('#idEtnia').val({{$personales->idEtnia}}).trigger('change');
			$('#idLengua').val({{$personales->idLengua}}).trigger('change');
			
			$('#nombreInterprete').val("{{ $personales->nombreInterprete }}");
			$('#lugarTrabInterprete').val("{{ $personales->trabajoInterprete }}");
			$('#idMunicipioOrigen').val({{$personales->idMunicipioOrigen}}).trigger('change');
			$('#idReligion').val({{$personales->idReligion}}).trigger('change');
			$('#idEscolaridad').val({{$personales->idEscolaridad}}).trigger('change');
			$('#telefono').val("{{$personales->telefono}}");
			$('#motivoEstancia').val("{{$personales->motivoEstancia}}");
			$('#idOcupacion').val({{$personales->idOcupacion}}).trigger('change');
			$('#idEstadoCivil').val({{$personales->idEstadoCivil}}).trigger('change');
			$('#docIdentificacion').val("{{$personales->docIdentificacion}}").trigger('change');
			docs='CREDENCIAL DE ELECTOR PASAPORTE CARTILLA MILITAR LICENCIA PARA CONDUCIR CREDENCIAL ESCOLAR';
			doc='{{$personales->docIdentificacion}}';
				if ( docs.toLowerCase().indexOf(doc.toLowerCase()) != -1 ) {
					$('#docIdentificacion').val('{{$personales->docIdentificacion}}');
				} else {
						$('#docIdentificacion').val('OTRO');
					$('#otrodocto').show();
					$('#otroDocumento').val('{{$personales->docIdentificacion}}');
				}	
			$('#numDocIdentificacion').val("{{$personales->numDocIdentificacion}}");
			$('#idEstado').val({{$direccion->idEstado}}).trigger('change');
			$('#idMunicipio').val({{$direccion->idMunicipio}}).trigger('change');
			$('#idLocalidad').val({{$direccion->idLocalidad}}).trigger('change');
			$('#idColonia').val({{$direccion->idColonia}}).trigger('change');			
			$('#calle').val("{{$direccion->calle}}");
			$('#numExterno').val("{{$direccion->numExterno}}");
			$('#numInterno').val("{{$direccion->numInterno}}");
			$('#idEstado2').val({{$direccionTrab->idEstado}}).trigger('change');
			$('#idMunicipio2').val({{$direccionTrab->idMunicipio}}).trigger('change');
			$('#idLocalidad2').val({{$direccionTrab->idLocalidad}}).trigger('change');
			$('#idColonia2').val({{$direccionTrab->idColonia}}).trigger('change');
			$('#cp2').val({{$direccionTrab->codigoPostal}}).trigger('change');
			$('#lugarTrabajo').val("{{$personales->lugarTrabajo}}");
			$('#telefonoTrabajo').val("{{$personales->telefonoTrabajo}}");
			$('#calle2').val("{{$direccionTrab->calle}}");
			$('#numExterno2').val("{{$direccionTrab->numExterno}}");
			$('#numInterno2').val("{{$direccionTrab->numInterno}}");
			$('#idEstado3').val({{$direccionNotif->idEstado}}).trigger('change');
			$('#idMunicipio3').val({{$direccionNotif->idMunicipio}}).trigger('change');
			$('#idLocalidad3').val({{$direccionNotif->idLocalidad}}).trigger('change');
			$('#idColonia3').val({{$direccionNotif->idColonia}}).trigger('change');
			$('#cp3').val({{$direccionNotif->codigoPostal}}).trigger('change');
			$('#calle3').val("{{$direccionNotif->calle}}");
			$('#numExterno3').val("{{$direccionNotif->numExterno}}");
			$('#numInterno3').val("{{$direccionNotif->numInterno}}");
			$('#correo').val("{{$direccionNotif->correo}}");
			$('#telefonoN').val("{{$direccionNotif->telefono}}");
			$('#fax').val("{{$direccionNotif->fax}}");
			console.log("fisica",rfcFisica);
			console.log(rfc);
			console.log(homoclave);
		@endif
	@endif


	@endpush
