@extends('template.form')

@section('title', 'Agregar defensa')

@section('contenido')
	{!! Form::open(['route' => 'store.defensa', 'method' => 'POST'])  !!}
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
				<div class="row">
					@include('fields.defensa')
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection

@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Defensas registradas')
		@include('tables.defensas')
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/selects/async.js') }}"></script>
    <script src="{{ asset('js/selects/defensa.js') }}"></script>
    <script src="{{ asset('js/selects/sisy.js') }}"></script>
@endpush