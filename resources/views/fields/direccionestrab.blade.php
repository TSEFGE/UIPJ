<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado2', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado2', $estados, '30', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa','data-validation'=>'required', 'data-validation-event'=>'change']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipio2', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipio2',$municipiosVer, null,['placeholder' => 'Seleccione un municipio','class' => 'form-control form-control-sm', 'data-validation'=>'required', 'data-validation-event'=>'change']) !!}
		</div>
	</div> 
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLocalidad2', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidad2', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm','data-validation'=>'required', 'data-validation-event'=>'change']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia2', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColonia2', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm', 'data-validation'=>'required', 'data-validation-event'=>'change']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp2', 'Código postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cp2', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm','data-validation'=>'required', 'data-validation-event'=>'change']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calle2', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calle2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'data-validation'=>'length', 'data-validation-length'=>'3-100','data-validation-error-msg'=>'Calle debe contener al menos tres caracteres', 'data-validation-event'=>'keyup']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExterno2', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExterno2', "S/N", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número exterior','data-validation'=>'custom', 'data-validation-regexp'=>'^(([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10}$','data-validation-error-msg'=>'En caso de no haber número debe ingresar S/N', 'data-validation-event'=>'keyup']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numInterno2', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numInterno2', "S/N", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior','data-validation'=>'custom', 'data-validation-regexp'=>'^(([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10}$','data-validation-error-msg'=>'En caso de no haber número debe ingresar S/N', 'data-validation-event'=>'keyup']) !!}
		</div>
	</div>
</div>
