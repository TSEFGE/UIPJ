	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipifDelito', 'Delito', ['class' => 'col-form-label-sm']) !!}
			<select name="idTipifDelito" id="idTipifDelito" class="form-control form-control-sm" required>
				<option value="">Seleccione un delito</option>
				@foreach($tipifdelitos as $tipifdelito)
				<option value="{{ $tipifdelito->id }}">{{ $tipifdelito->delito }}</option>
				@endforeach
			</select>
		</div>
	</div>
	
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('placas', 'Placas', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('placas', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las placas' ,'data-validation'=>'custom' ,'data-validation-regexp'=>'^((([A-ZÁÉÍÓÚ]|[\d])+[-]*)+){5,11}$']) !!}	

			
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado', $estados, '30', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idMarca', 'Marca', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMarca', $marcas, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una marca', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idSubmarca', 'Submarca', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idSubmarca', ['' => 'Seleccione una submarca'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('modelo', 'Modelo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::number('modelo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el modelo', 'min' => 1000, 'max' => 2050, 'required']) !!}
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColor', 'Color', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idColor', $colores, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un color', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nrpv', 'NRPV', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nrpv', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el NRPV', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z]|[\d]){17}$']) !!}
					
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('numSerie', 'Núm. serie', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numSerie', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de serie', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z]|[\d]){17}$']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('numMotor', 'Núm. motor', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numMotor', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de motor', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z]|[\d]){1,20}$']) !!}
	</div>
	</div>

	<div class="col-4">
		<div class="form-group">
			{!! Form::label('permiso', 'Permiso', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('permiso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el permiso', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z]|[\d]){1,20}$']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idClaseVehiculo', 'Clase de vehículo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idClaseVehiculo', $clasesveh, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una clase de vehículo', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipoVehiculo', 'Tipo de vehículo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idTipoVehiculo', ['' => 'Seleccione un tipo de vehículo'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipoUso', 'Tipo de uso', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idTipoUso', $tiposuso, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un tipo de uso', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idProcedencia', 'Procedencia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idProcedencia', $procedencias, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione procedencia', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idAseguradora', 'Aseguradora', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idAseguradora', $aseguradoras, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una aseguradora', 'required']) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasPartic', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasPartic', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3', 'required','data-validation'=>'custom' ,'data-validation-regexp'=>'^(([A-Z]|[\d]|[,|.]){1,500}$']) !!}
		</div>
	</div>
