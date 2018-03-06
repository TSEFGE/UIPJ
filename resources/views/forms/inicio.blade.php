@extends('template.form')

@section('title', 'Iniciar nueva Carpeta de Investigación')

@section('contenido')
    {!! Form::open(['route' => 'store.carpeta', 'method' => 'POST'])  !!}
	<div class="boxtwo">
		<h6>Datos generales de la carpeta de investigación</h6>
		@include('fields.carpeta')
	</div>
	<div class="boxtwo">
		<div class="row">
			<div class="col">
				<div class="text-left">
					<a href="{{ route('home') }}" class="btn btn-dark text-center">Volver atrás</a>
				</div>
			</div>
			<div class="col">	
				<div class="text-right">
					{!! Form::submit('Iniciar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection