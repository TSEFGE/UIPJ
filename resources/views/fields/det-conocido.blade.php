<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nombresC', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombresC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerApC', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerApC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('aliasC', 'Alias', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('aliasC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el alias', 'required']) !!}
		</div>
	</div>
</div>
@include('fields.dir-conocido')
<div class="row">
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasParticC', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasParticC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3', 'required']) !!}
		</div>
	</div>
</div>