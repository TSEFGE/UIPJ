@extends('template.form')

@section('title', 'Agregar Delito')

@section('header')
{!! Form::open(['route' => 'store.delito', 'method' => 'POST'])  !!}
{{ csrf_field() }}
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
@endsection

@section('contenido')
	@include('forms.errores')
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
			
				<div class="row">
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif

					<div id="delitotabs">
						<ul class="nav nav-tabs">
 							<li class="nav-item">
    							<a class="nav-link active" data-toggle="tab" href="#infodelito">Información sobre la comisión del delito</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" data-toggle="tab" href="#lugardelito">Información sobre el lugar de los hechos</a>
  							</li>  		
						</ul>	
					</div>
					<div class="tab-content" id="ctdelito">
						<div class="tab-pane active container" id="infodelito">  		
							@include('fields.delito')		
						</div>
						<div class="tab-pane container" id="lugardelito">  		
							@include('fields.direcciones')	
							@include('fields.lugar-hechos')		
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
		@section('titulo-tabla', 'Delitos registrados')
		@include('tables.delitos')
	</div>
@endsection

	