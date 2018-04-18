<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nombresC', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombresC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){1,100}$', 'data-validation-error-msg'=>'Nombre debe contener al menos una letra']) !!}	
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerApC', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerApC', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){1,50}$', 'data-validation-error-msg'=>'Primer apellido debe contener al menos una letra']) !!}	
		</div>
	</div> 
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('aliasC', 'Alias', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('aliasC', "SIN INFORMACION", ['class' => 'form-control form-control-sm','data-validation'=>'length', 'data-validation-length'=>'1-50','data-validation-error-msg'=>'Alias debe contener al menos cinco letras']) !!}
		</div>
	</div>
</div>
@include('fields.dir-conocido')
<div class="row">
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('senasParticC', 'Señas particulares', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('senasParticC',"SIN INFORMACION", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese las señas particulares','rows' => '3','data-validation'=>'length', 'data-validation-length'=>'1-500','data-validation-error-msg'=>'Señas particulares no debe estar vacio']) !!}
		<!--	<div class="invalid-feedback" id="invalid-senasParticC">
				Este campo debe de contener más de 3 caracteres y menos de 150.
			</div> -->
		</div>
	</div>
	
</div>