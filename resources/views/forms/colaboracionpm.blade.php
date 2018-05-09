@extends('template.form')

@section('title', 'Diligencias a policia ministerial')

@section('contenido')
{!! Form::open(['route' => 'diligencia.pm', 'method' => 'POST'])  !!}
<div class="card-header">
<div class="row">
	<div class="col">
		<div class="text-left">
			{{--Aqui van radios, etc --}}
		</div>
	</div>
	<div class="col">
		<div class="text-right">
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
			<h6>Acusaciones</h6>
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
							<td align="center"><input required  type="radio" id="radio" value="{{ $acusacion->id }}" name="radioAcusacion" style="width:20px;height:20px"></td>
							<td align="center">{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
							<td align="center">{{ $acusacion->delito }}</td>
							<td align="center">{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
			<div class="row col-md-12">
				<div class="form-group col-md-12">
						{!! Form::label('servicios', 'Servicio:', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('servicios', $servicios->pluck('nombre','id')->all(), null, ['name'=>'servicio','class' => 'form-control select', 'required']) !!}
				</div>
			</div>

		</div>
		@include('forms.idcarpeta')
	</div>
</div>

{!! Form::close() !!}
@endsection
@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Diligencias registradas')
		@include('tables.diligencias-pm')
	</div>
@endsection
@push('docready-js')

@endpush
