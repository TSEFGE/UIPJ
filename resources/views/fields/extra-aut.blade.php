<div class="row">
	@if(!empty($idCarpeta))
	{!! Form::hidden('idCarpeta', $idCarpeta) !!}
	@endif
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('antiguedad', 'Antigüedad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::number('antiguedad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la antigüedad', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('rango', 'Rango', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('rango', ['CABO' => 'CABO', 'COMANDANTE' => 'COMANDANTE'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un rango', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('horarioLaboral', 'Horario laboral', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('horarioLaboral', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el horario laboral', 'required']) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('narracion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la narración de los hechos', 'rows' => '5', 'required']) !!}
			<div id="ValidarNarracion" class="invalid-feedback">
					El campo narración debe contener al menos 5 caracteres.
			</div>
		</div>
	</div>
</div>
