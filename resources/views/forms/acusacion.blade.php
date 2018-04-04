@extends('template.form')

@section('title', 'Agregar Acusación')

@section('header')
{!! Form::open(['route' => 'store.acusacion', 'method' => 'POST'])  !!}
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
				<h6>Datos de la acusación</h6>
				@include('fields.acusacion')
			</div>
		</div>
	</div>
	
	{!! Form::close() !!}
@endsection

@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla','Acusaciones registradas')
		@include('tables.acusaciones')
	</div>
@endsection