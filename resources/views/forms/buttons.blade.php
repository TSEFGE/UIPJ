@include('forms.idCarpeta')
@if(isset ($idCarpeta))
{!! Form::button('<i class="fa fa-eraser" aria-hidden="true"></i>', array ('class' => 'btn btn-secondary borrar ','data-toggle'=>'tooltip','title'=>'Borrar Campos','id' => 'btn-reset')) !!}
<a id="regresocarpeta" href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-secondary borrar" data-toggle="tooltip" title="Regresar a carpeta"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
@else
{!! Form::button('<i class="fa fa-plus" aria-hidden="true"></i>', array ('class' => 'btn btn-secondary ','data-toggle'=>'tooltip','title'=>'Agregar un Auxiliar','id' => 'btn-agregar')) !!}
{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
@endif
