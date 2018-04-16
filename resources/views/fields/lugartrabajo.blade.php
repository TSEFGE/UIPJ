<div class="row">
	<div class="col-8">
		<div class="form-group">
			{!! Form::label('lugarTrabajo', 'Lugar de trabajo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('lugarTrabajo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el lugar de trabajo','data-validation'=>'length', 'data-validation-length'=>'5-50','data-validation-error-msg'=>'Lugar de trabajo debe contener al menos cinco letras']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefonoTrabajo', 'Teléfono del trabajo', ['class' => 'col-form-label-sm']) !!}
			
					{!! Form::text('telefonoTrabajo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{10,15}|(SIN NUMERO))$','data-validation-error-msg'=>'En caso de no existir teléfono ingresar SIN INFORMACION']) !!}
			
		</div>
	</div>
</div>
@include('fields.direccionestrab')