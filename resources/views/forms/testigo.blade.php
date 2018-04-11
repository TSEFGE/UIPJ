@extends('template.form')

@section('title', 'Agregar testigo')

@section('contenido')
{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST']) !!}
{{ csrf_field() }}

<div class="card-header">
	<div class="row">
		<div class="col">
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
					@if(!empty($idCarpeta)) {!! Form::hidden('idCarpeta', $idCarpeta) !!} @endif
				</div>
				<div class="" id="datosPer">
					<div id="testigo">
						<ul class="nav nav-tabs">
							<li class="nav-item" id="datosPer">
								<a class="nav-link active pestaña" id="personal" data-toggle="tab" href="#collapsePersonales1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item" id="datosDir">
								<a class="nav-link" data-toggle="tab" id="direccion" href="#collapseDir1"><i class="fa fa-address-card" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item" id="datosTrab">
								<a class="nav-link" data-toggle="tab" id="dtrabajo" href="#collapseTrab1"><i class="fa fa-industry" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item" id="datosNotif">
								<a class="nav-link" data-toggle="tab" id="dnotificaciones" href="#collapseNotifs1"><i class="fa fa-bell" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div id="cajados" class="boxtwo">
					<div class="tab-content" id="cttestigo">
						<div class="tab-pane active container" id="collapsePersonales1">
							@include('fields.personales')
						</div>
						<div class="tab-pane container" id="collapseDir1">
							@include('fields.direcciones')
						</div>
						<div class="tab-pane container" id="collapseTrab1">
							@include('fields.lugartrabajo')
						</div>
						<div class="tab-pane container" id="collapseNotifs1">
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
