@include('forms.idCarpeta')
<div class="boxtwo">
	<div class="row">
		<div class="col">
			<div class="text-left">
				<a href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-dark text-center">Regresar</a>
			</div>
		</div>
		<div class="col">	
			<div class="text-right">
				{!! Form::button('Limpiar Campos', ['class' => 'btn btn-dark', 'id' => 'btn-reset']) !!}
				{!! Form::submit('Guardar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
			</div>
		</div>
	</div>
</div>
