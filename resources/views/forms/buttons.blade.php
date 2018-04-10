@include('forms.idCarpeta')
{!! Form::button('<i class="fa fa-eraser" aria-hidden="true"></i>', array ('class' => 'btn btn-primary borrar ', 'id' => 'btn-reset')) !!}
<a id="regresocarpeta" href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-primary borrar"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
<<<<<<< HEAD

=======
 
>>>>>>> 14faa0aaca314fc7e018050b2ad23e9f7c0e23ae
