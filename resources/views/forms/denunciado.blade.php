@extends('template.form')

@section('title', 'Agregar investigado o imputado')

@section('contenido')
@include('forms.errores')
{!! Form::open(['route' => 'store.denunciado', 'method' => 'POST'])  !!}
{{ csrf_field() }}

<div class="card-header">
<div class="row">
	<div class="col">
		<div class=""> 
		<div class="row">
			<div class="col-9 text-left">
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
			<div class="col-3 comparecencia text-right">				
					@include('fields.tipo-persona')
				</div>
			</div>
		</div>
	</div>
			<div class="col-4">	
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
						<li class="nav-item" id="datosTrab">
							<a class="nav-link" data-toggle="tab" href="#collapseTrab2"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
								<div id="espacio-notif2"><span id="vacio2" class="xvacio"></span>
								<span id="error2" class="xerror"></span>
								<span id="bien2" class="bien"></span></div>
							</a>
						</li> 
						<li class="nav-item" id="datosNotif">
							<a class="nav-link" data-toggle="tab"  href="#collapseNotifs2"><p id="dnotificaciones" class="pestaña"><i class="fa fa-bell" aria-hidden="true"></i></p>
									<div id="espacio-notif3"><span id="vacio3" class="xvacio"></span>
									<span id="error3" class="xerror"></span>
									<span id="bien3" class="bien"></span></div>
								</a>
						</li> 
						<li class="nav-item"  id="datosExtra">
							<a class="nav-link" data-toggle="tab"   href="#collapseDenun2"><p id="dextra" class="pestaña"><i class="fa fa-asterisk" aria-hidden="true"></i></p>
									<div id="espacio-notif4"><span id="vacio4" class="xvacio"></span>
									<span id="error4" class="xerror"></span>
									<span id="bien4" class="bien"></span></div>
								</a>
						</li> 		

					</ul>
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

			<div id="cajados" class="boxtwo">	
				<div class="tab-content comparecencia" id="ctdenunciado">
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
			</div>
				<!-- Fin pestañas -->
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
@push('PilaScripts')
<script type="text/javascript">
	$(document).ready(function() {

//extradenunciado
$("#alias").addClass("vacio");
 $("#ingreso").addClass("vacio");
 $("#residenciaAnterior").addClass("vacio");
  $("#vestimenta").addClass("vacio");
 $("#senasPartic").addClass("vacio");
 $("#curp").addClass("vacio");
  $("#telefono").addClass("vacio");
 $("#motivoEstancia").addClass("vacio");
 $("#docIdentificacion").addClass("vacio");  	
$("#numDocIdentificacion").addClass("vacio");



});

</script>
@endpush