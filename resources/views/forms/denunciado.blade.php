@extends('template.form')

@section('title', 'Agregar Denunciado')

@section('contenido')
	@if ($errors->any())
		<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
    {!! Form::open(['route' => 'store.denunciado', 'method' => 'POST'])  !!}
	<div class="boxtwo">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label class="col-form-label col-form-label-sm" for="formGroupExampleInput">Selecciona una opción</label>
					<div class="clearfix"></div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="tipoDenunciado1" name="tipoDenunciado" value="1" required> Q.R.R.
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="tipoDenunciado2" name="tipoDenunciado" value="2" required> Conoce al denunciado
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="tipoDenunciado3" name="tipoDenunciado" value="3" required> Por comparecencia
						</label>
					</div>
				</div>
			</div>
			<div class="col-6 comparecencia">
				<div class="row">
	    			@include('fields.tipo-persona')
				</div>
	    	</div>
		</div>
	</div>

	<div id="qrr">
		<div class="boxtwo">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						{!! Form::label('nombresQ', 'Nombre', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('nombresQ', "QUIEN RESULTE RESPONSABLE", ['class' => 'form-control form-control-sm', 'readonly']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="conocido">
		<div class="boxtwo">
			@include('fields.det-conocido')
		</div>
	</div>

	<div class="comparecencia">
		<div class="card" id="datosPer">
			<div class="card-header">
				<h5 class="mb-0 text-center">
					<a data-toggle="collapse" href="#collapsePersonales2" aria-expanded="false" aria-controls="collapsePersonales2">
						Datos personales
					</a>
				</h5>
			</div>
			<div id="collapsePersonales2" class="collapse show boxcollapse">
				<div class="boxtwo">
					@include('fields.personales')
				</div>
			</div>
		</div>

		<div class="card" id="datosDir">
			<div class="card-header">
				<h5 class="mb-0 text-center">
					<a data-toggle="collapse" href="#collapseDir2" aria-expanded="false" aria-controls="collapseDir2">
						Dirección
					</a>
				</h5>
			</div>
			<div id="collapseDir2" class="collapse boxcollapse">
				<div class="boxtwo">
					@include('fields.direcciones')
				</div>
			</div>
		</div>

		<div class="card" id="datosTrab">
			<div class="card-header">
				<h5 class="mb-0 text-center">
					<a data-toggle="collapse" href="#collapseTrab2" aria-expanded="false" aria-controls="collapseTrab2">
						Datos del trabajo
					</a>
				</h5>
			</div>
			<div id="collapseTrab2" class="collapse boxcollapse">
				<div class="boxtwo">
					@include('fields.lugartrabajo')
				</div>
			</div>
		</div>

		<div class="card" id="datosNotif">
			<div class="card-header">
				<h5 class="mb-0 text-center">
					<a data-toggle="collapse" href="#collapseNotifs2" aria-expanded="false" aria-controls="collapseNotifs2">
						Dirección para notificaciones
					</a>
				</h5>
			</div>
			<div id="collapseNotifs2" class="collapse boxcollapse">
				<div class="boxtwo">
					@include('fields.notificaciones')
				</div>
			</div>
		</div>

		<div class="card" id="datosExtra">
			<div class="card-header">
				<h5 class="mb-0 text-center">
					<a data-toggle="collapse" href="#collapseDenun2" aria-expanded="false" aria-controls="collapseDenun2">
						Otros datos
					</a>
				</h5>
			</div>
			<div id="collapseDenun2" class="collapse boxcollapse">
				<div class="boxtwo">
					@include('fields.extra-denunciado')
				</div>
			</div>
		</div>
	</div>

	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="boxtwo">
		@include('tables.denunciados')
	</div>
@endsection