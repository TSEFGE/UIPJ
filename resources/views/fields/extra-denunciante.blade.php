<div class="row">
	<div class="col-6" id="datosExtra">
		@if(!empty($idCarpeta))
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
		@endif
		<div class="form-group">
			<label class="col-form-label col-form-label-sm" for="conoceAlDenunciado">¿Conoce al Denunciado o Imputado?</label>
			<div class="clearfix"></div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="conoceAlDenunciado1" name="conoceAlDenunciado" value="1"> Sí
				</label>
			</div>
			<div class="form-check form-check-inline">
				<label class="form-check-label col-form-label col-form-label-sm">
					<input class="form-check-input" type="radio" id="conoceAlDenunciado2" name="conoceAlDenunciado" value="0"> No
				</label>
			</div>
		</div>
	</div>
</div>
