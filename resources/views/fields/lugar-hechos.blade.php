<div class="row">
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('entreCalle', 'Entre calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('entreCalle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese una calle perpendicular', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('yCalle', 'Y calle', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('yCalle', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese otra calle perpendicular', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('calleTrasera', 'Calle trasera', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('calleTrasera', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle trasera', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idZona', 'Zona de ubicación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idZona', $zonas, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una zona de ubicación', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLugar', 'Lugar', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLugar', $lugares, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione un lugar', 'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('puntoReferencia', 'Punto de referencia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('puntoReferencia', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese un punto de referencia', 'required']) !!}
		</div>
	</div>
</div>