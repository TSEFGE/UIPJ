@extends('template.form')

@section('title', 'Generar citatorio')
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
								{!! Form::text('fecha',$citatorio->fecha, ['readonly','class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaCit', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'AAAA-MM-DD', 'data-validation'=>'date','data-validation-format'=>'yyyy-mm-dd']) !!}
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
								{!! Form::text('hora', $citatorio->hora, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#horaCit', 'required', 'placeholder' => '00:00','data-toggle'=>"datetimepicker",'data-validation'=>'custom' ,'data-validation-regexp'=>'^([01]?[0-9]|2[0-3]):[0-5][0-9]$']) !!}
								<div class="input-group-append" data-target="#horaCit" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							{!! Form::label('motivo', 'Motivo de la Cita', ['class' => 'col-form-label-sm']) !!}
							{!! Form::textarea('motivo', $citatorio->motivo, ['class' => 'form-control form-control-sm','id' => 'motivoCita', 'required','data-validation'=>'length','data-validation-length'=>'5-500']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{!! Form::close() !!}
	@endsection
	@push('PilaScripts')
<script type="text/javascript">
	$(document).ready(function(){
		console.log('hola');
		localStorage.removeItem("[id=undefined][name=undefined][id=status][name=status]");
		localStorage.removeItem("[id=undefined][name=undefined][id=fecha][name=fecha]");
		localStorage.removeItem("[id=undefined][name=undefined][id=motivo][name=motivo]");
		localStorage.removeItem("[id=undefined][name=undefined][id=hora][name=hora]");
		$('#hora').val('{{$citatorio->hora}}');

	});



</script>
	@endpush
