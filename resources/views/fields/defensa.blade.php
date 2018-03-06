<div class="row">
	<div class="col-6">
		<div class="form-group">
			{!! Form::label('idAbogado', 'Abogado', ['class' => 'col-form-label-sm']) !!}
			<select name="idAbogado" id="idAbogado" class="form-control form-control-sm" required>
				<option value="">Seleccione un abogado</option>
				@foreach($abogados as $abogado)
				<option value="{{ $abogado->id }}">{{ $abogado->nombres." ".$abogado->primerAp." ".$abogado->segundoAp }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			{!! Form::label('idInvolucrado', 'Involucrado', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idInvolucrado', [''=>'Seleccione un Involucrado'], null, ['class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
</div>