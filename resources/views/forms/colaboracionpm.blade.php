@extends('template.form')

@section('title', 'Generar documento de colaboración con policia ministerial')
@section('header')
{!! Form::open(['route' => 'colaboracion.pm', 'method' => 'POST'])  !!}
{{ csrf_field() }}
<div class="row">
	<div class="col">
		<div class="text-left">
			{{--Aqui van radios, etc --}}
		</div>
	</div>
	<div class="col">	
		<div class="text-right">
			{!! Form::button('Limpiar Campos', ['class' => 'btn btn-dark', 'id' => 'btn-reset']) !!}
			{!! Form::submit('Generar documento', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
			<a href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-dark text-center"><i class="fa fa-folder-open"></i></a>
			
		</div>
	</div>
</div>
@endsection

@section('contenido')
@include('forms.errores')
<div class="row no-gutters">
	<div class="col-12">
		<div class="boxtwo">
			<h6>Seleccione acusaciones</h6>
			<div class="row">
				<div class="boxtwo">
					<div class="form-group">
						@foreach($servicios as $servicio)
						<div class="form-check">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="checkbox" name="servicios[]" value="{{ $servicio->id }}" id="servicio{{ $servicio->id }}"> {{ $servicio->nombre }}
							</label>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		@include('forms.idcarpeta')
		
	</div>
</div>

<div class="table">
	<table class="table table-striped">
		<thead>
			<th>Seleccione una</th>
			<th>Nombre denunciante</th>
			<th>Delito</th>
			<th>Nombre denunciado</th>
		</thead>
		<tbody>
			@if(count($acusaciones)==0)
			<tr><td colspan="4" class="text-center">Sin registros</td></tr>
			@else
			@foreach($acusaciones as $acusacion)
			<tr>
				<td><input type="radio" value="{{ $acusacion->id }}" name="radioAcusacion"></td>
				<td>{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
				<td>{{ $acusacion->delito }}</td>
				<td>{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
{!! Form::close() !!}
@endsection

