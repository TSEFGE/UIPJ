@include('fields.direccionesnotif')
<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico', ['class' => 'col-form-label-sm']) !!}
			{!! Form::email('correo',"sin@informacion.com", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el correo electrónico','data-validation'=>'email']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
					{!! Form::label('telefonoN', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('telefonoN', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{10,15}|(SIN NUMERO))$']) !!}
				</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fax', 'Fax', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('fax', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el fax','data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{1,20}|(SIN INFORMACION))$']) !!}
				</div>
	</div>
</div>

               