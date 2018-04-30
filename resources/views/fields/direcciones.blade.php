<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado', $estados, '30', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa','data-validation'=>'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipio', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipio', $municipiosVer,null, ['placeholder' => 'Seleccione un municipio','class' => 'form-control form-control-sm', 'data-validation'=>'required']) !!}
		</div>
	</div>
	<div class="col-4">
 		<div class="form-group">
			{!! Form::label('idLocalidad', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidad', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm','data-validation'=>'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm','data-validation'=>'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp', 'Código postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle','data-validation'=>'length', 'data-validation-length'=>'3-100','data-validation-error-msg'=>'Calle debe contener al menos tres caracteres']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExterno', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno', "S/N", ['class' => 'form-control form-control-sm','data-validation'=>'custom', 'data-validation-regexp'=>'^(([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10}$','data-validation-error-msg'=>'En caso de no haber número debe ingresar S/N']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numInterno', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numInterno', "S/N", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior','data-validation'=>'custom', 'data-validation-regexp'=>'^(([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10}$','data-validation-error-msg'=>'En caso de no haber número debe ingresar S/N']) !!}
		</div>
	</div>
</div>
