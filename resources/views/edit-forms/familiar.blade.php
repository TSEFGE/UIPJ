@extends('template.form-edit')

@section('title', 'Editar Familiar')

@section('contenido')
{!! Form::open(['route' => ['update.familiar', $id], 'method' => 'PUT'])  !!}
	<input type="hidden" name="idInvolucrado" value="{{$id}}">
	<input type="hidden" name="idFamiliar" value="{{$datosfamiliar->idFamiliar}}">
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
					@include('edit-fields.familiar')
				</div>
			</div>
		</div>
	</div>
	
	{!! Form::close() !!}
@endsection
@push('docready-js')

$('#nombres').val("{{$datosfamiliar->nombres}}");
$('#primerAp').val("{{$datosfamiliar->primerAp}}");
$('#segundoAp').val("{{$datosfamiliar->segundoAp}}");
$('#parentesco').val("{{$datosfamiliar->parentesco}}").trigger('change');
$('#idOcupacion').val({{$datosfamiliar->idOcupacion}}).trigger('change');
@endpush