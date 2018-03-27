<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstadoC', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstadoC', $estados, '30', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipioC', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipioC', $municipiosVer,null, ['placeholder' => 'Seleccione un municipio','class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLocalidadC', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLocalidadC', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColoniaC', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColoniaC', ['' => 'Seleccione una colonia'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cpC', 'Código Postal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('cpC', ['' => 'Seleccione un código postal'], null, ['class' => 'form-control form-control-sm']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calleC', 'Calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calleC',"SIN INFORMACION", ['class' => 'form-control form-control-sm','data-validation'=>'length', 'data-validation-length'=>'3-100']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numExternoC', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numExternoC',"S/N", ['class' => 'form-control form-control-sm','data-validation'=>'custom', 'data-validation-regexp'=>'^(([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10}$']) !!}
		</div>
		
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('numInternoC', 'Número interior', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numInternoC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número interior','data-validation'=>'custom', 'data-validation-regexp'=>'^(([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10}$']) !!}
		</div>
	</div>
</div>
