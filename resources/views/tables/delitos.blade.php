<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Delito</th>
            <th>Modalidad</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Editar registro</th>    
        </thead>
        <tbody>
            @if(count($delitos)==0)
                <tr><td colspan="5" class="text-center">Sin registros</td></tr>
            @else
                @foreach($delitos as $delito)
                    <tr>
                        <td>{{ $delito->delito }}</td>
                        <td>{{ $delito->modalidad }}</td>
                        <td>{{ $delito->fecha }}</td>
                        <td>{{ $delito->hora }}</td>
                         @if(isset($carpetaNueva))
                       <td ><a href="{{ route('edit.delito', ['idCarpeta'=>$carpetaNueva[0]->id,'idDelito'=>$delito->id])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                       @else
                       <td ><a href="{{ route('edit.delito', ['idCarpeta'=>$idCarpeta,'idDelito'=>$delito->id])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                       @endif
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>