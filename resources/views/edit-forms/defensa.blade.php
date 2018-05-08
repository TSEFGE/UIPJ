@extends('template.form-edit')

@section('title', 'Editar defensa')

@section('contenido')
{!! Form::open(['route' => ['update.defensa', $idCarpeta, $id], 'method' => 'PUT'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
		<div class="row">
			<div class="col">
				<div class="text-left">
					{{--Aqui van radios, etc --}}
				</div>
				{!! Form::hidden('idAbogado', ($idAbogado)) !!} 
				{!! Form::hidden('idInvolucrado', ($idInvolucrado)) !!} 


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

@push('scripts')
	<script src="{{ asset('js/selects/async.js') }}"></script>
    <script src="{{ asset('js/selects/defensa-edit.js') }}"></script>
    <script src="{{ asset('js/selects/sisy.js') }}"></script>
@endpush
@push('docready-js')
	$("#idAbogado").addClass("vacio");
	$("#idInvolucrado").addClass("vacio");

	$('#idAbogado').val({{$idAbogado}}).trigger('change');
	$('#idInvolucrado').val({{$idInvolucrado}}).trigger('change');

@endpush