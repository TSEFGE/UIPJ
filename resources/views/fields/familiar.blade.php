<div class="row">
	<div class="col-4">
		@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
		@endif
		<div class="form-group">
			{!! Form::label('idPersona', 'Familiar de', ['class' => 'col-form-label-sm']) !!}
			<select name="idPersona" id="idPersona" class="form-control form-control-sm" required>
				<option value="">Seleccione un involucrado</option>
				@foreach($involucrados as $involucrado)
				<option value="{{ $involucrado->id }}">{{ $involucrado->nombres." ".$involucrado->primerAp." ".$involucrado->segundoAp }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('parentesco', 'Parentesco', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('parentesco', ['HIJO(A)' => 'HIJO(A)', 'MADRE' => 'MADRE', 'PADRE' => 'PADRE', 'CÓNYUGE' => 'CÓNYUGE'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un parentesco', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idOcupacion', 'Ocupación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idOcupacion', $ocupaciones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una ocupación', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre del familiar', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerAp', 'Primer Apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('segundoAp', 'Segundo Apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido', 'required']) !!}
		</div>
	</div>
</div>