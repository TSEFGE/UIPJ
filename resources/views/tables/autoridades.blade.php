<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Antigüedad</th>
            <th>Rango</th>
            <th>Horario laboral</th>
            <th>Documento</th>
            <th>Num. documento</th>
            <th>Narración</th>
        </thead>
        <tbody>
            @if(count($autoridades)==0)
                <tr><td colspan="7" class="text-center">Sin registros</td></tr>
            @else
                @foreach($autoridades as $autoridad)
                    <tr>
                        <td>{{ $autoridad->nombres." ".$autoridad->primerAp." ".$autoridad->segundoAp }}</td>
                        <td>{{ $autoridad->antiguedad }}</td>
                        <td>{{ $autoridad->rango }}</td>
                        <td>{{ $autoridad->horarioLaboral }}</td>
                        <td>{{ $autoridad->docIdentificacion }}</td>
                        <td>{{ $autoridad->numDocIdentificacion }}</td>

                        @if(isset($carpetaNueva))
                       <td align="center"><a href="{{ route('narracion.index', ['idAutoridad'=>$autoridad->id, 'idCarpeta'=>$carpetaNueva[0]->id,  'tipoInvolucrado'=>3])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @else
                       <td align="center"><a href="{{ route('narracion.index', ['idAutoridad'=>$autoridad->id, 'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>3])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @endif
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>