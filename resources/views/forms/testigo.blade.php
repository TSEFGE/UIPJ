@extends('template.form')

@section('title', 'Agregar testigo')

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
								<a class="nav-link active pestaña" id="personal" data-toggle="tab" href="#collapsePersonalesTestigo"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
								<span id="vacio" class="xvacio"></span>
								<span id="error" class="error"></span>
								<span id="bien" class="bien"></span>
							</li>
							<li class="nav-item" id="datosDir">
								<a class="nav-link" data-toggle="tab" id="direccion" href="#collapseDirTestigo"><i class="fa fa-address-card" aria-hidden="true"></i></a>
								<span id="vacio1" class="xvacio"></span>
								<span id="error1" class="error"></span>
								<span id="bien1" class="bien"></span>
							</li>
							<li class="nav-item" id="datosTrab">
								<a class="nav-link" data-toggle="tab" id="dtrabajo" href="#collapseTrabTestigo"><i class="fa fa-industry" aria-hidden="true"></i></a>
								<span id="vacio2" class="xvacio"></span>
								<span id="error2" class="error"></span>
								<span id="bien2" class="bien"></span>
							</li>
							<li class="nav-item" id="datosNotif">
								<a class="nav-link" data-toggle="tab" id="dnotificaciones" href="#collapseNotifsTestigo"><i class="fa fa-bell" aria-hidden="true"></i></a>
								<span id="vacio3" class="xvacio"></span>
								<span id="error3" class="error"></span>
								<span id="bien3" class="bien"></span>
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

{!! Form::close() !!} @endsection @section('tabla')
<div class="boxtwo">
	@section('titulo-tabla', 'Testigos registrados') @include('tables.testigos')
</div>
@endsection
@push('PilaScripts')
<script>
	$(document).ready(function(){
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
    });
</script>
@endpush
