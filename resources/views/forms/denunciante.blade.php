@extends('template.form') @section('title', 'Agregar denunciante') @section('contenido') {!! Form::open(['route' => 'store.denunciante', 'method' => 'POST']) !!} {{ csrf_field() }}


<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				<div class="row">

					<div class="col-6">
						<div class="form-group">
							<label class="col-form-label col-form-label-sm" for="formGroupExampleInput">¿Es víctima?</label>
							<div class="clearfix"></div>
							<div class="form-check form-check-inline">
								<label class="form-check-label col-form-label col-form-label-sm">
									<input class="form-check-input" type="radio" id="esVictima1" name="esVictima" value="1" required> Sí
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label col-form-label col-form-label-sm">
									<input class="form-check-input" type="radio" id="esVictima2" name="esVictima" value="0" required> No
								</label>
							</div>
						</div>
					</div>
					<div  id="tipop" class="col-6" >
						@include('fields.tipo-persona')
					</div>
				</div>
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
					@if(!empty($idCarpeta)) {!! Form::hidden('idCarpeta', $idCarpeta) !!} @endif
				</div>
				<div class="" id="datosPer">
					<div id="denunciante">

						<ul class="nav nav-tabs">
							<li class="nav-item" id="datosPer">
								<a class="nav-link active" data-toggle="tab" href="#collapsePersonales1">Datos personales</a>
							</li>
							<li class="nav-item" id="datosDir">
								<a class="nav-link" data-toggle="tab" href="#collapseDir1">Dirección</a>
							</li>
							<li class="nav-item" id="datosTrab">
								<a class="nav-link" data-toggle="tab" href="#collapseTrab1">Datos del trabajo</a>
							</li>
							<li class="nav-item" id="datosNotif">
								<a class="nav-link" data-toggle="tab" href="#collapseNotifs1">Dirección para notificaciones</a>
							</li>
							<li class="nav-item" id="datosExtra">
								<a class="nav-link" data-toggle="tab" href="#collapseDenun1">Información sobre el denunciante o agraviado</a>
							</li>

						</ul>
					</div>
				</div>
				<div class="boxtwo">
					<div class="tab-content" id="ctdenunciante">
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
						<div class="tab-pane container" id="collapseDenun1">
							@include('fields.extra-denunciante')

						</div>
					</div>
				</div>
					<!-- Fin pestañas -->


		</div>
	</div>
</div>


{!! Form::close() !!} @endsection @section('tabla')
<div class="boxtwo">
	@section('titulo-tabla', 'Denunciantes registrados') @include('tables.denunciantes')
</div>
@endsection @push('PilaScripts')
<script type="text/javascript">
	$(document).ready(function() {
					$('#tipop').hide();
	});
	$('input[type=radio][name=esVictima]').change(function() {
		if (this.value == 0) {
			swal("Atención", "Ha seleccionado registrar un denunciante como ofendido .", "warning")
		} else if (this.value == 1) {
			swal("Atención", "Ha seleccionado registrar un denunciante como victima.", "warning")
		}
			$('#tipop').show();
	});
</script>
@endpush
