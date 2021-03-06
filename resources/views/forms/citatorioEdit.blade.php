@extends('template.form')

@section('title', 'Generar citatorio')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => ['update.citatorio',$citatorio->id], 'method' => 'PUT'])  !!}

<div class="card-header">
	<div class="row">
		<div class="text-left">
			{!! Form::hidden('idCarpeta', $citatorio->idCarpeta) !!}
			{!! Form::hidden('idCitado', $citatorio->idCitado) !!}
			{!! Form::hidden('tipo', $citatorio->tipo) !!}
		</div>
		<div class="col">
			<div class="text-right">
				{!! Form::button('<i class="fa fa-eraser" aria-hidden="true"></i>', array ('class' => 'btn btn-secondary borrar ', 'id' => 'btn-reset')) !!}
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
        <div class="col-4">
          <div class="form-group">
            {!! Form::label('status', 'Estado', ['class' => 'col-form-label-sm']) !!}
            {!! Form::select('status', ['1' => 'PENDIENTE', '2' => 'SE PRESENTÓ', '3' => 'NO SE PRESENTÓ'],$citatorio->status, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción','required']) !!}
          </div>
        </div>
					<div class="col-4">
						<div class="form-group">
							{!! Form::label('fecha', 'Fecha', ['class' => 'col-form-label-sm']) !!}
							<div class="input-group date" id="fechaCit" data-target-input="nearest">
								{!! Form::text('fecha',$citatorio->fecha, ['disabled','class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaCit', 'data-toggle' => 'datetimepicker', 'required' ]) !!}
								<div class="input-group-append" data-target="#fechaCit" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="form-group" id="" >
							{!! Form::label('hora', 'Hora', ['class' => 'col-form-label-sm']) !!}
							<div class="input-group date" id="horaCit" data-target-input="nearest">
								{!! Form::text('hora', Carbon\Carbon::parse($citatorio->fecha)->format("H:i"), ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#horaCit', 'required', 'placeholder' => '00:00','data-toggle'=>"datetimepicker",'data-validation'=>'custom' ,'data-validation-regexp'=>'^([01]?[0-9]|2[0-3]):[0-5][0-9]$','data-validation-error-msg'=>'Ingrese hora en el formato correcto HH:MM:SS (Formato 24 hrs)']) !!}
								<div class="input-group-append" data-target="#horaCit" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							{!! Form::label('motivo', 'Motivo de la Cita', ['class' => 'col-form-label-sm']) !!}
							{!! Form::textarea('motivo', $citatorio->motivo, ['readonly','class' => 'form-control form-control-sm','id' => 'motivoCita','rows' => '2','required']) !!}
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							{!! Form::label('fundamentoLegal', 'Fundamento legal', ['class' => 'col-form-label-sm']) !!}
							{!! Form::textarea('fundamentoLegal', $citatorio->fundamentoLegal, ['class' => 'form-control form-control-sm','id' => 'fundamentoLegal', 'required' ,'rows' => '5']) !!}
						</div>
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
	{{--<script src="{{ asset('js/citatorio.js') }}"></script>--}}
	<script>
	</script>
	
@endpush


@push('docready-js')
	$(function () { //Datetimepicker a la zquierda y debajo para vizualizar mejor no se oculte en la nav
		$('#horaCit').datetimepicker({
			format: 'LT',
			widgetPositioning: {
				vertical: 'bottom',
				horizontal: 'left'
			}
		});
	});
	localStorage.removeItem("[id=undefined][name=undefined][id=status][name=status]");
	localStorage.removeItem("[id=undefined][name=undefined][id=fecha][name=fecha]");
	localStorage.removeItem("[id=undefined][name=undefined][id=motivo][name=motivo]");
	localStorage.removeItem("[id=undefined][name=undefined][id=hora][name=hora]");
	$('#hora').val('{{$citatorio->hora}}');
@endpush