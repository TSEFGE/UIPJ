<div class="row">
	@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
	@endif
	<div class="col-12">
		<div class="form-group">
			{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('narracion', $denunciante->narracion, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la narración de los hechos', 'rows' => '5','data-validation'=>'length', 'data-validation-length'=>'5-2000']) !!}
			
		</div>
		<div class="form-group">
			{!! Form::label('complemento', 'Complemento', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('complemento', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese complementos', 'rows' => '5','data-validation'=>'length', 'data-validation-length'=>'0-2000']) !!}
			
		</div>
	</div>
</div>
