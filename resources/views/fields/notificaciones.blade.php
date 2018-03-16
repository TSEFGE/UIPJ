@include('fields.direccionesnotif')
<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico', ['class' => 'col-form-label-sm']) !!}
			{!! Form::email('correo',"sin@informacion.com", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el correo electrónico']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefonoN', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telefonoN', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'required']) !!}
			<div class="invalid-feedback" id="invalidTelefonoN">
				Este campo debe de contener de 7 a 15 caracteres.
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fax', 'Fax', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('fax', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el fax']) !!}
		</div>
	</div>
</div>