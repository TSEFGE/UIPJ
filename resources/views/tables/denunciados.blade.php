<div class="table">
    <table class="table table-striped">
        <thead align="center">
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
             <th>Narración</th>
             <th>Agregar citatorio</th>
        </thead>
        <tbody>
            @if(count($denunciados)==0)
                <tr><td colspan="8" class="text-center">Sin registros</td></tr>
            @else
                @foreach($denunciados as $denunciado)
                    <tr>
                        <td>{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</td>
                        <td  align="center">{{ $denunciado->rfc }}</td>
                        <td  align="center">{{ $denunciado->edad }}</td>
                        <td  align="center">{{ $denunciado->sexo }}</td>
                        <td  align="center">{{ $denunciado->telefono }}</td>
                        @if($denunciado->esEmpresa==1)
                        <td  align="center">SI</td>
                        @else
                        <td  align="center">NO</td>
                       
                         @endif

                        @if(isset($carpetaNueva))
                       <td align="center"><a href="{{ route('narracion.index', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$carpetaNueva[0]->id,  'tipoInvolucrado'=>2])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @else
                       <td align="center"><a href="{{ route('narracion.index', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>2])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @endif

                         <td align="center"><a href="{{ route('citatorio',['idCitado'=>$denunciado->id])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                        @endforeach
                        @endif
                    </tbody>
    </table>
</div>