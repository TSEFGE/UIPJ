<div class="row">
	<div id="extra-fis">
		<div class="col-12">
			<div class="row">
				<div class="col-3">
					@if(!empty($idCarpeta))
					{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif
					<div class="form-group">
						{!! Form::label('idPuesto', 'Puesto', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('idPuesto', $puestos, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un puesto', 'required']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('alias', 'Alias', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('alias', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias','data-validation'=>'length', 'data-validation-length'=>'5-100','data-validation-error-msg'=>'Alias debe contener al menos cinco letras']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('personasBajoSuGuarda', 'Dependientes Económicos', ['class' => 'col-form-label-sm']) !!}
						{!! Form::number('personasBajoSuGuarda', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número de Dependientes Económicos', 'min' => 0, 'required', 'data-validation'=>'custom' ,'data-validation-regexp'=>'^([0-9]){1,11}$','data-validation-error-msg'=>'Este campo no debe estar vacio, ingresar solo números.']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('ingreso', 'Ingreso', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('ingreso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el sueldo', 'data-validation'=>'custom', 'data-validation-regexp'=>'^[0-9]{1,15}$','data-validation-error-msg'=>'Este campo no debe estar vacio, ingresar solo números.']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('periodoIngreso', 'Periodo de ingreso', ['class' => 'col-form-label-sm']) !!}
						{!! Form::select('periodoIngreso', ['DIARIO' => 'DIARIO', 'SEMANAL' => 'SEMANAL', 'QUINCENAL' => 'QUINCENAL', 'MENSUAL' => 'MENSUAL', 'SIN INFORMACION' => 'SIN INFORMACION'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un periodo', 'required']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('residenciaAnterior', 'Residencia anterior', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('residenciaAnterior', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la  residencia anterior','data-validation'=>'length', 'data-validation-length'=>'5-100','data-validation-error-msg'=>'Este campo no debe estar vacio']) !!}
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label class="col-form-label col-form-label-sm" for="perseguidoPenalment">¿Perseguido penalmente?</label>
						<div class="clearfix"></div>
						<div class="form-check form-check-inline">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="radio" id="perseguidoPenalmente1" name="perseguidoPenalmente" value="1" required> Sí
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="radio" id="perseguidoPenalmente2" name="perseguidoPenalmente" value="0"> No
							</label>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						{!! Form::label('vestimenta', 'Vestimenta', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('vestimenta', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la vestimenta','data-validation'=>'length', 'data-validation-length'=>'5-150','data-validation-error-msg'=>'Este campo no debe estar vacio']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasPartic', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasPartic', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3','data-validation'=>'length', 'data-validation-length'=>'5-500','data-validation-error-msg'=>'Este campo no debe estar vacio, ingrese al menos cinco letras']) !!}
		</div>
	</div>
		
</div>
