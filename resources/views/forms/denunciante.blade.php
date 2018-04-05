@extends('template.form')

@section('title', 'Agregar Denunciante')

@section('contenido')
@include('forms.errores')
{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST'])  !!}
{{ csrf_field() }}

<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">				
				
					<div class="row">
						@include('fields.tipo-persona')
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

				<div class="card" id="datosPer">

					<div id="denunciante">

					<ul class="nav nav-tabs">
						<li class="nav-item" id="datosPer">
							<a class="nav-link active" data-toggle="tab" href="#collapsePersonales1">Datos personales</a>
						</li>
						<li class="nav-item" id="datosDir" >
							<a class="nav-link" data-toggle="tab" href="#collapseDir1">Dirección</a>
						</li>
						<li class="nav-item" id="datosTrab">
							<a class="nav-link" data-toggle="tab" href="#collapseTrab1">Datos del trabajo</a>
						</li> 
						<li class="nav-item" id="datosNotif">
							<a class="nav-link" data-toggle="tab" href="#collapseNotifs1">Dirección para notificaciones</a>
						</li> 
						<li class="nav-item"  id="datosExtra">
							<a class="nav-link" data-toggle="tab" href="#collapseDenun1">Información sobre el Denunciante o Agraviado</a>
						</li> 		

					</ul>
				</div>

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
@section('titulo-tabla', 'Denunciantes registrados')
@include('tables.denunciantes')
</div>
@endsection
