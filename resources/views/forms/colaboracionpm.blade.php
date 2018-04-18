@extends('template.form')

@section('title', 'Generar documento de colaboración con policia ministerial')

@section('contenido')
{!! Form::open(['route' => 'colaboracion.pm', 'method' => 'POST'])  !!}
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
			{!! Form::button('Limpiar campos', ['class' => 'btn btn-dark', 'id' => 'btn-reset']) !!}
			{!! Form::submit('Generar documento', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
			<a href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-dark text-center"><i class="fa fa-folder-open"></i></a>
			
		</div>
	</div>
</div>
</div>


@include('forms.errores')
<div class="row no-gutters">
	<div class="col-12">
		<div class="boxtwo">
			<h6>Servicios:</h6>
			<div class="row">
				<div class="boxtwo">
					<div class="form-group">
						@foreach($servicios as $servicio)
						<div class="form-check">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="checkbox" name="servicios[]" value="{{ $servicio->id }}" id="servicio{{ $servicio->id }}"  style="width:15px;height:15px"> {{ $servicio->nombre }}
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
		<thead  align="center">
			<th>Seleccionar acusación</th>
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
				<td align="center"><input type="radio" id="radio" value="{{ $acusacion->id }}" name="radioAcusacion" style="width:20px;height:20px"></td>
				<td align="center">{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
				<td align="center">{{ $acusacion->delito }}</td>
				<td align="center">{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
{!! Form::close() !!}
@endsection
<style type="text/css">
	
	.radio{
		background-color: #2196F3;
	}
</style>
