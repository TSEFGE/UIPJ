@extends('template.form')

@section('title', 'Generar citatorio')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => 'store.citatorio', 'method' => 'POST'])  !!}
<div class="card-header">
	<div class="row">
		<div class="text-left">
			{!! Form::hidden('idCarpeta', $idCarpeta) !!}
			{!! Form::hidden('idCitado', $idCitado) !!}
			{!! Form::hidden('tipo', $tipoInvolucrado) !!}
			{!! Form::hidden('status', 1) !!}
		</div>
		<div class="col">
			<div class="text-right">				
				{!! Form::button('<i class="fa fa-eraser" aria-hidden="true"></i>', array ('class' => 'btn btn-primary borrar ', 'id' => 'btn-reset')) !!}
				<a id="regresocarpeta" href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-primary borrar"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
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
							{!! Form::label('fechaCit', 'Fecha', ['class' => 'col-form-label-sm']) !!}
							<div class="input-group date" id="fechaCit" data-target-input="nearest">
								{!! Form::text('fecha', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaCit', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'AAAA-MM-DD', 'data-validation'=>'date','data-validation-format'=>'yyyy-mm-dd','data-validation-error-msg'=>'Ingrese fecha en el formato correcto AAAA-MM-DD']) !!}
								<div class="input-group-append" data-target="#fechaCit" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group" id="" >
							{!! Form::label('horaCit', 'Hora', ['class' => 'col-form-label-sm']) !!}
							<div class="input-group date" id="horaCit" data-target-input="nearest">
								{!! Form::text('hora', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#horaCit', 'required', 'placeholder' => '00:00','data-toggle'=>"datetimepicker",'data-validation'=>'custom' ,'data-validation-regexp'=>'^([01]?[0-9]|2[0-3]):[0-5][0-9]$','data-validation-error-msg'=>'Ingrese hora en el formato correcto HH:MM (Formato 24 hrs)']) !!}
								<div class="input-group-append" data-target="#horaCit" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
								</div>
							</div>
						</div>
					</div>	

					<div class="col-12">
						<div class="form-group">
							{!! Form::label('motivo', 'Motivo de la Cita', ['class' => 'col-form-label-sm']) !!}
							{!! Form::textarea('motivo', $motivoCita, ['class' => 'form-control form-control-sm','id' => 'motivoCita', 'required','rows' => '2','data-validation'=>'length','data-validation-length'=>'5-500','data-validation-error-msg'=>'Motivo de cita debe contener al menos cinco letras']) !!}
						</div>
					</div>
					
					<div class="col-12">
						<div class="form-group">
							{!! Form::label('fundamentoLegal', 'Fundamento legal', ['class' => 'col-form-label-sm']) !!}
							{!! Form::textarea('fundamentoLegal',$fundamentoLegal, ['class' => 'form-control form-control-sm','id' => 'fundamentoLegal', 'required' ,'rows' => '5','data-validation'=>'length','data-validation-length'=>'5-3000','data-validation-error-msg'=>'Fundamento legal debe contener al menos cinco letras']) !!}
						</div>
					</div>
				</div>					
			</div>   
		</div>   
	</div>
{!! Form::close() !!}
@endsection

@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Citatorios registrados')
		@include('tables.citatorios')
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
	<script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<script src="{{ asset('js/citatorio.js') }}"></script>
@endpush