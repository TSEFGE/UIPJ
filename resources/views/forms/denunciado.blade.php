@extends('template.form')

@section('title', 'Agregar denunciado')

@section('contenido')
@include('forms.errores')
{!! Form::open(['route' => 'store.denunciado', 'method' => 'POST'])  !!}
{{ csrf_field() }}

<div class="card-header">
<div class="row">
	<div class="col">
		<div class="text-left">
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
							<input class="form-check-input" type="radio" id="tipoDenunciado2" name="tipoDenunciado" value="2" required> Conoce al denunciado o imputado
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
			<div class="col">	
				<div class="text-right">
					@include('forms.buttons')
				</div>
			</div>
		</div>
	</div>
</div>

</div>

@include('forms.errores')
<div class=" card-body boxone">
<div class="row no-gutters">
	<div class="col-12">
		<div class="boxtwo">

			<div class="row">
				@if(!empty($idCarpeta))
				{!! Form::hidden('idCarpeta', $idCarpeta) !!}
				@endif	
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

				<div id="denunciado">

					<ul class="nav nav-tabs">
						<li class="nav-item" id="datosPer">
							<a class="nav-link active" data-toggle="tab" href="#collapsePersonales2">Datos personales</a>
						</li>
						<li class="nav-item" id="datosDir" >
							<a class="nav-link" data-toggle="tab" href="#collapseDir2">Dirección</a>
						</li>
						<li class="nav-item" id="datosTrab">
							<a class="nav-link" data-toggle="tab" href="#collapseTrab2">Datos del trabajo</a>
						</li> 
						<li class="nav-item" id="datosNotif">
							<a class="nav-link" data-toggle="tab" href="#collapseNotifs2">Dirección para notificaciones</a>
						</li> 
						<li class="nav-item"  id="datosExtra">
							<a class="nav-link" data-toggle="tab" href="#collapseDenun2">Otros datos</a>
						</li> 		

					</ul>
				</div>

				
				<div class="tab-content" id="ctdenunciado">
					<div class="tab-pane active container" id="collapsePersonales2">  		
						@include('fields.personales')

					</div>
					<div class="tab-pane container" id="collapseDir2">  		
						@include('fields.direcciones')		
					</div>
					<div class="tab-pane container" id="collapseTrab2">  		
						@include('fields.lugartrabajo')		
					</div>
					<div class="tab-pane container" id="collapseNotifs2">  		
						@include('fields.notificaciones')		
					</div>
					<div class="tab-pane container" id="collapseDenun2">  		
						@include('fields.extra-denunciado')

					</div>
				</div>
				<!-- Fin pestañas -->
			</div>
		</div>

	</div>
</div>
</div>


{!! Form::close() !!}
@endsection

@section('tabla')
<div class="boxtwo">
@section('titulo-tabla', 'Denunciados registrados')
@include('tables.denunciados')
</div>
@endsection