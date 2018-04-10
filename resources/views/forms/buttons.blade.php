@include('forms.idCarpeta')
{!! Form::button('', ['class' => 'btn btn-primary', 'id' => 'btn-reset']) !!}
<a id="regresocarpeta" href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-primary text-center"></a>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
 