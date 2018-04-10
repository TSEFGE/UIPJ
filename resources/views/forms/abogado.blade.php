@extends('template.form')

@section('title', 'Agregar abogado')
@section('contenido')	
{!! Form::open(['route' => 'store.abogado', 'method' => 'POST'])  !!}
{{ csrf_field() }}
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
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
		<div id="tabogado">
				<ul class="nav nav-tabs">
					 <li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#collapsePersonales3">Datos personales</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#collapseTrab3">Datos del trabajo</a>
					  </li>  		
					   <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#collapseAutoridad">Información sobre la autoridad</a>
					  </li>
				</ul>
		</div>
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">			
				<div class="row">
						@if(!empty($idCarpeta))
							{!! Form::hidden('idCarpeta', $idCarpeta) !!}
						@endif	
				</div>

				<div class="tab-content" id="ctabogado">
					<div class="tab-pane active container" id="collapsePersonales3">  		
						@include('fields.personales-abo')		
					</div>
					<div class="tab-pane container" id="collapseTrab3">  		
						@include('fields.lugartrabajo')		
					</div>
					<div class="tab-pane container" id="collapseAutoridad">  		
						@include('fields.extra-abo')		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
{!! Form::close() !!}
@endsection
@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Abogados Registrados')
		@include('tables.abogados')
	</div>
@endsection
