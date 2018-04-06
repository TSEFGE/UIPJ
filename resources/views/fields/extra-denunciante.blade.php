<div class="row">
	<div class="col-6">
		@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
		@endif
		<div class="form-group">
			<label class="col-form-label col-form-label-sm" for="conoceAlDenunciado">¿Conoce al Denunciado o Imputado?</label>
			<div class="clearfix"></div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="conoceAlDenunciado1" name="conoceAlDenunciado" value="1" required> Sí
				</label>
			</div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="conoceAlDenunciado2" name="conoceAlDenunciado" value="0"> No
				</label>
			</div>
		</div>
	</div>
	<div class="col-12">
		
		<div class="form-group">
			{!! Form::label('complemento', 'Complemento', ['class' => 'col-form-label-sm']) !!}
			{!! Form::textarea('complemento', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese complementos', 'rows' => '5','data-validation'=>'length', 'data-validation-length'=>'0-2000']) !!}
			
		</div>
	</div>
</div>
