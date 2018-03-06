<div class="row">
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idUnidad', 'Unidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('idUnidad', $nombreUnidad, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una unidad', 'readonly', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idFiscal', 'Fiscal', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('idFiscal', Auth::user()->nombres." ".Auth::user()->primerAp." ".Auth::user()->segundoAp, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un fiscal', 'readonly', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('fechaInicio', 'Fecha de inicio de carpeta', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date calendarioCompleto" id="fechaInicial" data-target-input="nearest">
				{!! Form::text('fechaInicio', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaInicial', 'readonly', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
				<span class="input-group-addon" data-target="#fechaInicial" data-toggle="datetimepicker">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('estadoCarpeta', 'Estado de la Carpeta', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('estadoCarpeta', "INICIO", ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione un estado', 'readonly', 'required']) !!}
		</div>
	</div>
	{{--
	Los campos de arriba probablemente no se mostrarán
	--}}
	<div class="col-4">
		<div class="form-group">
			<label class="col-form-label col-form-label-sm" for="formGroupExampleInput">Detalles</label>
			<div class="clearfix"></div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="checkbox" id="conDetenido" name="conDetenido" value="1"> Con detenido
				</label>
			</div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="checkbox" id="esRelevante" name="esRelevante" value="1"> Es Relevante
				</label>
			</div>
		</div>
	</div>
	<div class="col-12" id="conDet1">
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('horaIntervencion', 'Hora de intervención', ['class' => 'col-form-label-sm']) !!}
					<div class="input-group date" id="horaInter" data-target-input="nearest">
						{!! Form::text('horaIntervencion', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#horaInter', 'placeholder' => '00:00', 'required']) !!}
						<span class="input-group-addon" data-target="#horaInter" data-toggle="datetimepicker">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('npd', 'Número de puesta a disposición', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('npd', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número del puesta a disposición', 'required']) !!}
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					{!! Form::label('numIph', 'Número IPH', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('numIph', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el número del IPH', 'required']) !!}
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					{!! Form::label('fechaIph', 'Fecha IPH', ['class' => 'col-form-label-sm']) !!}
					<div class="input-group date" id="fechaiph2" data-target-input="nearest">
						{!! Form::text('fechaIph', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaiph2', 'placeholder' => 'DD/MM/AAAA', 'required']) !!}
						<span class="input-group-addon" data-target="#fechaiph2" data-toggle="datetimepicker">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('narracionIph', 'Narración IPH', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('narracionIph', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la narración del IPH','rows' => '3', 'required']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('descripcionHechos', 'Descripción de los hechos', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('descripcionHechos', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la descripción de los hechos','rows' => '3', 'required']) !!}
		</div>
	</div>
	{{--
	Los campos de abajo probablemente no se mostrarán
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fechaDeterminacion', 'Fecha determinación', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date" id="fechadet" data-target-input="nearest">
				{!! Form::text('fechaDeterminacion', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechadet', 'readonly', 'placeholder' => 'DD/MM/AAAA', 'required']) !!}
				<span class="input-group-addon" data-target="#fechadet" data-toggle="datetimepicker">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipoDeterminacion', 'Tipo determinación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idTipoDeterminacion', $tiposdet, null, ['class' => 'form-control form-control-sm chosen-select', 'placeholder' => 'Seleccione un tipo de determinación', 'readonly', 'required']) !!}
		</div>
	</div>
	--}}
</div>