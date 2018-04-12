@extends('template.form')

@section('title', 'Generar citatorio')
@section('contenido')
	{!! Form::open(['route' => 'store.citatorio', 'method' => 'POST'])  !!}
	<div class="card-header">
		<div class="row">
			<div class="text-left">
				{!! Form::hidden('idCitado', $idCitado) !!}
				{!! Form::hidden('tipo', $tipoInvolucrado) !!}
				{!! Form::hidden('status', 1) !!}
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
	<div class="card-body boxone">
		<div class="col-12">
			<div class="boxtwo">
				<div class="row">
					{{--
					<div class="col-4">
						<div class="form-group">
							{!! Form::label('tipo', 'Tipo', ['class' => 'col-form-label-sm']) !!}
							{!! Form::select('tipo', ['2' => 'TESTIGO', '1' => 'INVESTIGADO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción','required']) !!}
						</div>
					</div>

					<div class="col-4">
						<div class="form-group">
							{!! Form::label('status', 'Estado', ['class' => 'col-form-label-sm']) !!}
							{!! Form::select('status', ['1' => 'PENDIENTE', '2' => 'SE PRESENTÓ', '3' => 'NO SE PRESENTÓ'],'1', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción','required']) !!}
						</div>
					</div>
					--}}

					<div class="col-6">
						<div class="form-group">
							{!! Form::label('fecha', 'Fecha', ['class' => 'col-form-label-sm']) !!}
							<div class="input-group date" id="fechaCit" data-target-input="nearest">
								{!! Form::text('fecha', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaCit', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'AAAA-MM-DD','data-validation'=>'date', 'data-validation-format'=>'yyyy-mm-dd']) !!}
								<div class="input-group-append" data-target="#fechaCit" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
							</div>
						</div>
					</div>	
				</div>	

				<div class="col-12">
					<div class="form-group">
						{!! Form::label('motivo', 'Motivo de la Cita', ['class' => 'col-form-label-sm']) !!}
						{!! Form::textarea('motivo', null, ['class' => 'form-control form-control-sm','id' => 'motivoCita', 'required']) !!}
					</div>
				</div>
			</div>   
		</div>   
	</div>

	{!! Form::close() !!}
@endsection 
@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Citatorios registrados') @include('tables.citatorios')
	</div>
@endsection