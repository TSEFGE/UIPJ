@extends('template.form-edit')

@section('title', 'Editar Familiar')

@section('contenido')
{!! Form::open(['route' => ['update.familiar', $familiar->id], 'method' => 'PUT'])  !!}
	<input type="hidden" name="idFamiliar" value="{{ $familiar->id }}">
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

@push('docready-js')
	$('#idPersona').val({{$familiar->idPersona}}).trigger('change');
	$('#nombres').val("{{$familiar->nombres}}");
	$('#primerAp').val("{{$familiar->primerAp}}");
	$('#segundoAp').val("{{$familiar->segundoAp}}");
	$('#parentesco').val("{{$familiar->parentesco}}").trigger('change');
	$('#idOcupacion').val({{$familiar->idOcupacion}}).trigger('change');
@endpush