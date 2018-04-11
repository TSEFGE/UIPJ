@extends('template.form')

@section('title', 'Agregar acusación')

@section('contenido')

{!! Form::open(['route' => 'store.acusacion', 'method' => 'POST'])  !!}
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

	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<h6>Datos de la acusación</h6>
				
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif
					
					@include('fields.acusacion')
			
			</div>
		</div>
	</div>

	
{!! Form::close() !!}
@endsection
@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Acusaciones registradas')
		@include('tables.acusaciones')
	</div>
@endsection
