	@extends('template.form')

	@section('title', 'Generar citatorio')
	@section('contenido')
	{!! Form::open(['route' => 'store.citatorio', 'method' => 'POST', 'files'=>true])  !!}
	<div class="card-header">
		<div class="row">
			<div class="text-left">
				{!! Form::hidden('idAcusacion', $idAcusacion) !!}
			</div>
			<div class="col">
				<div class="text-right">
					{!! Form::button('<i class="fa fa-eraser" aria-hidden="true"></i>', array ('class' => 'btn btn-primary borrar ', 'id' => 'btn-reset')) !!}
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}

				</div>
			</div>
		</div>
	</div>

	@include('forms.errores')
	<div class=" card-body boxone">
		<div class="col-12">
			<div class="boxtwo">
				<div class="row">					
					<div class="col-6">
						<div class="form-group">
							{!! Form::label('tipo', 'Tipo', ['class' => 'col-form-label-sm']) !!}
							{!! Form::select('tipo', ['TESTIGO' => 'TESTIGO', 'INVESTIGADO' => 'INVESTIGADO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							{!! Form::label('status', 'Estado', ['class' => 'col-form-label-sm']) !!}
							{!! Form::select('status', ['1' => 'GENERADO', '2' => 'ENTREGADO','3' => 'NO ASISTIÓ','4' => 'YA SE PRESENTÓ'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
						</div>
					</div>

				</div>   

			</div>
		</div>
	</div>

	{!! Form::close() !!}
	@endsection @section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Citatorios registrados') @include('tables.citatorios')
	</div>
	@endsection