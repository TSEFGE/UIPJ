<div class="row">
	@isset($idCarpeta)
				{!! Form::hidden('idCarpeta', $idCarpeta) !!}
	@endisset
	@isset($extra)
		{!! Form::hidden('idExtra', $extra->id) !!}
	@endisset
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('narracion', $extra->narracion, ['class' => 'form-control form-control-sm','disabled']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('complemento', 'Complemento', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('complemento', $extra->complemento, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese complementos', 'rows' => '5','data-validation'=>'length', 'data-validation-length'=>'5-2000']) !!}

		</div>
	</div>
</div>
