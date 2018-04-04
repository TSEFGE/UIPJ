@extends('template.form')

@section('title', 'Iniciar nueva Carpeta de Investigación')

@section('header')
	{!! Form::open(['route' => 'store.carpeta', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="row">
			<div class="col">
				<div class="text-left">
					{{--Aqui van radios, etc --}}
				</div>
			</div>
			<div class="col">
				<div class="text-right">
					<a href="{{ route('home') }}" class="btn btn-dark text-center">Volver atrás</a>
					{!! Form::submit('Iniciar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
				</div>
			</div>
		</div>
@endsection

@section('contenido')
	@include('forms.errores')
	<div class="boxtwo">
		<h6>Datos generales de la carpeta de investigación</h6>
		@include('fields.carpeta')
	</div>
	{!! Form::close() !!}
@endsection
