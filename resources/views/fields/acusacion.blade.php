<div class="row">
	<div class="col-4">
		@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
		@endif
		<div class="form-group">
			{!! Form::label('idDenunciante', 'Denunciante', ['class' => 'col-form-label-sm']) !!}
			<select name="idDenunciante" id="idDenunciante" class="form-control form-control-sm" required>
				<option value="">Seleccione un denunciante</option>
				@foreach($denunciantes as $denunciante)
				<option value="{{ $denunciante->id }}">{{ $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idTipifDelito', 'Delito', ['class' => 'col-form-label-sm']) !!}
			<select name="idTipifDelito" id="idTipifDelito" class="form-control form-control-sm" required>
				<option value="">Seleccione un delito</option>
				@foreach($tipifdelitos as $tipifdelito)
				<option value="{{ $tipifdelito->id }}">{{ $tipifdelito->nombre }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idDenuciado', 'Denunciado', ['class' => 'col-form-label-sm']) !!}
			<select name="idDenunciado" id="idDenuncidoe" class="form-control form-control-sm" required>
				<option value="">Seleccione un denunciado</option>
				@foreach($denunciados as $denunciado)
				<option value="{{ $denunciado->id }}">{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</option>
				@endforeach
			</select>
		</div>
	</div>
</div>