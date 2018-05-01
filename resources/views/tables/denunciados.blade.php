<div class="table">
    <table class="table table-striped">
        <thead >
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
            <th>Narración</th>
            <th>Agregar citatorio</th>
            <th>Editar registro</th>
        </thead>
        <tbody>
            @if(count($denunciados)==0)
            <tr><td colspan="8" class="text-center">Sin registros</td></tr>
            @else
            @foreach($denunciados as $denunciado)
            <tr>
                <td>{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</td>
                <td >{{ $denunciado->rfc }}</td>
                <td >{{ $denunciado->edad }}</td>
                <td >{{ $denunciado->sexo }}</td>
                <td >{{ $denunciado->telefono }}</td>
                @if($denunciado->esEmpresa==1)
                <td >SI</td>
                @else
                <td >NO</td>

                @endif

                @if(isset($carpetaNueva))
                <td align="center"><a href="{{ route('narracion.index', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$carpetaNueva[0]->id,  'tipoInvolucrado'=>2])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>                
                @else
                <td align="center"><a href="{{ route('narracion.index', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>2])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                @endif


                @if(isset($carpetaNueva))
                <td align="center"><a href="{{ route('citatorio',['idCitado'=>$denunciado->id,  'idCarpeta'=>$carpetaNueva[0]->id, 'tipoInvolucrado'=>1])}}"> <i class="fa fa-calendar" style="font-size:24px;color:grey"></i></a></td>
                @else
                <td align="center"><a href="{{ route('citatorio',['idCitado'=>$denunciado->id,'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>1])}}"> <i class="fa fa-calendar" style="font-size:24px;color:grey"></i></a></td>
                @endif
                @if(isset($carpetaNueva))
                <td ><a href="{{ route('edit.denunciado', ['idCarpeta'=>$carpetaNueva[0]->id,'idDenunciado'=>$denunciado->id])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                @else
                <td ><a href="{{ route('edit.denunciado', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$idCarpeta])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                @endif
                @endforeach
                @endif
            </tbody>
        </table>
    </div>