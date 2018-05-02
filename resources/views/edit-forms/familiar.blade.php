@extends('template.form')

@section('title', 'Agregar Familiar')

@section('contenido')
{!! Form::open(['route' => ['update.familiar', $idCarpeta, $familiar], 'method' => 'PUT'])  !!}
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
		<div class="row no-gutters">
			<div class="col-12">
				<div class="boxtwo">
					<h6>Datos del familiar</h6>
					@include('fields.familiar')
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection
