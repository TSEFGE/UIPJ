<div class="row">
	<div class="col-4">
		@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
		@endif
		<div class="form-group">
			{!! Form::label('idDelito', 'Delito', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idDelito', $delits, null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione un delito', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('fecha', 'Fecha', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date" id="fechadelit" data-target-input="nearest">
				{!! Form::text('fecha', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechadelit', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
				<span class="input-group-addon" data-target="#fechadelit" data-toggle="datetimepicker">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('hora', 'Hora', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date" id="horadelit" data-target-input="nearest">
				{!! Form::text('hora', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#horadelit', 'required', 'placeholder' => '00:00']) !!}
				<span class="input-group-addon" data-target="#horadelit" data-toggle="datetimepicker">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>
	<div class="col-4">
		<p class="col-form-label-sm">¿Con violencia?</p>
		<div class="form-group">
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="conViolencia1" name="conViolencia" id="no" value="0" checked required>
					No
				</label>
			</div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="conViolencia2" name="conViolencia" id="si" value="1">
					Sí
				</label>
			</div>
		</div>
	</div>
	<div class="col-8">
		<div class="row" id="violencia">
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idTipoArma', 'Tipo de Arma', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idTipoArma', $tiposarma, null, ['class' => 'form-control form-control-sm cv', 'placeholder' => 'Seleccione un tipo de arma', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idArma', 'Arma', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idArma', ['' => 'Seleccione el arma'], null, ['class' => 'form-control form-control-sm cv', 'required']) !!}
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					{!! Form::label('idPosibleCausa', 'Posible causa', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idPosibleCausa', $posiblescausas, null, ['class' => 'form-control form-control-sm cv', 'placeholder' => 'Seleccione una posible causa', 'required']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idModalidad', 'Modalidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idModalidad', $modalidades, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una modalidad', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('formaComision', 'Forma de comisión', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('formaComision', ['CULPOSO' => 'CULPOSO', 'DOLOSO' => 'DOLOSO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una forma de comisión', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('consumacion', 'Consumación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('consumacion', ['INSTANTÁNEA' => 'INSTANTÁNEA', 'PERMANENTE' => 'PERMANENTE'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una forma de consumación', 'required']) !!}
		</div>
	</div>
</div>