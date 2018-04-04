@include('forms.idCarpeta')
{!! Form::button('Limpiar Campos', ['class' => 'btn btn-dark', 'id' => 'btn-reset']) !!}
{!! Form::submit('Guardar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
<a href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-dark text-center"><i class="fa fa-folder-open"></i></a>