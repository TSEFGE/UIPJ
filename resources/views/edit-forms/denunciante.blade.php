@extends('template.form-edit')

@section('title', 'Editar víctima, ofendido u apoderado legal')

@push('css')
<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => ['update.denunciante', $personales->idDenunciante], 'method' => 'PUT']) !!}
{{ csrf_field() }}
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
	{!! Form::hidden('rfcMoral', ($personales->rfc)) !!}
	
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
	{{--<script src="{{ asset('js/persona.js') }}"></script>--}}
	<script src="{{ asset('js/persona-moral.js') }}"></script>
	{{--<script src="{{ asset('js/tipo-persona.js') }}"></script>
	<script src="{{ asset('js/denunciante.js') }}"></script>	
	<script src="{{ asset('js/selects/async.js') }}"></script>
	{{--<script src="{{ asset('js/selects/origen.js') }}"></script>
	<script src="{{ asset('js/selects/domicilio.js') }}"></script>
	<script src="{{ asset('js/selects/domicilio-trab.js') }}"></script>
	<script src="{{ asset('js/selects/domicilio-notif.js') }}"></script>
	<script src="{{ asset('js/selects/sisy.js') }}"></script>--}}
	<script src="{{ asset('js/validations/tab-denunciante.js') }}"></script>
	<script src="{{ asset('js/curp.js') }}"></script>
	@include('fields.rfcMoral');
	@include('fields.rfcFisico')
	@include('fields.ajaxCurp')
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
	
	var rfcMoral = $("input[name='rfcMoral']").val();
	var rfc = rfcMoral.substr (0,9);
	var homoclave = rfcMoral.substr(-3);
	$('#nombres2').val("{{ $personales->nombres }}");
	$('#rfc2').val(rfc);
	$('#homo2').val(homoclave);
	$("#representanteLegal").val("{{ $personales->nombres }}");
	$("#narracionUnoM").prop('disabled',true);
	console.log(rfcMoral);
	console.log(rfc);
	console.log(homoclave);
	@endpush
