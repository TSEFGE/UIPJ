@include('fields.direccionesnotif')
<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico', ['class' => 'col-form-label-sm']) !!}
			{!! Form::email('correo',"sin@informacion.com", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el correo electrónico','data-validation'=>'email','data-validation-error-msg'=>'Proporcione un correo válido. Ejemplo: algo@gmail.com']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefonoN', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telefonoN', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{10,15}|(SIN NUMERO))$','data-validation-error-msg'=>'En caso de existir número debe ingresar SIN NUMERO']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fax', 'Fax', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('fax',"SIN INFORMACION", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el fax','data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{1,20}|(SIN INFORMACION))$','data-validation-error-msg'=>'En caso de existir fax debe ingresar SIN INFORMACION']) !!}
		</div>
	</div>
</div>

               