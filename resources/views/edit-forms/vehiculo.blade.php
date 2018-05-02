@extends('template.form')

@section('title', 'Editar vehículo')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => 'store.vehiculo', 'method' => 'POST'])  !!}
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
				<h6>Datos generales de la unidad</h6>
				<div class="row">
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif
					@include('fields.vehiculo')
				</div>
			</div>
		</div>
	</div>
</div>
	{!! Form::close() !!}
@endsection


@push('scripts')
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/selects/async.js') }}"></script>
    <script src="{{ asset('js/selects/vehiculo.js') }}"></script>
    <script src="{{ asset('js/selects/sisy.js') }}"></script>
@endpush