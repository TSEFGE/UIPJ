<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nombresC', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombresC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
			<div class="invalid-feedback" id="invalid-nombresC">
				Este campo debe de contener más de 3 caracteres y menos de 200. b
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerApC', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerApC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
			<div class="invalid-feedback" id="invalid-primerApC">
				Este campo debe de contener más de 3 caracteres y menos de 50.
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('aliasC', 'Alias', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('aliasC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias']) !!}
		<!--	<div class="invalid-feedback" id="invalid-aliasC">
				Este campo debe de contener más de 3 caracteres y menos de 50.
			</div> -->
		</div>
	</div>
</div>
@include('fields.dir-conocido')
<div class="row">
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasParticC', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasParticC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3']) !!}
		<!--	<div class="invalid-feedback" id="invalid-senasParticC">
				Este campo debe de contener más de 3 caracteres y menos de 150.
			</div> -->
		</div>
	</div>
</div>