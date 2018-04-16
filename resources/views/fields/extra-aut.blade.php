<div class="row">
	@if(!empty($idCarpeta))
	{!! Form::hidden('idCarpeta', $idCarpeta) !!}
	@endif
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('antiguedad', 'Antigüedad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('antiguedad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese numero de años', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^[0-9]{1,3}$','data-validation-error-msg'=>'Este campo no debe estar vacio, ingresar solo números.']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('rango', 'Rango', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('rango', ['CABO' => 'CABO', 'COMANDANTE' => 'COMANDANTE'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un rango', 'data-validation'=>'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('horarioLaboral', 'Horario laboral', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('horarioLaboral', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el horario laboral', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^([0-9]|[:]|[-]|[,]|[\s]|[AM]|[PM]){1,50}$','data-validation-error-msg'=>'Este campo no debe estar vacio']) !!}
		</div>
	</div>
	
</div>
