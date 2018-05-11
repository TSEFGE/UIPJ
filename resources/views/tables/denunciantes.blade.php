<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
            <th>Constancia de hechos</th>
            <th>Narración</th>
            <th>Editar registro</th>        

        </thead>
        <tbody>
            @if(count($denunciantes)==0)
                <tr><td colspan="9" class="text-center">Sin registros</td></tr>
            @else
                @foreach($denunciantes as $denunciante)
                    <tr>
                        <td>{{ $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp }}</td>
                        <td >{{ $denunciante->rfc }}</td>
                        <td >{{ $denunciante->edad }}</td>
                        <td >{{ $denunciante->sexo }}</td>
                        <td >{{ $denunciante->telefono }}</td>
                        @if($denunciante->esEmpresa==1)
                            <td>SI</td>
                        @else
                            <td>NO</td>
                        @endif


                        <td align="center"><a href="{{ route('constancia.hechos',$denunciante->id) }}"> <i class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></a></td> 

                      @if(isset($carpetaNueva))
                            <td align="center"><a href="{{ route('narracion.index', ['idDenunciante'=>$denunciante->id, 'idCarpeta'=>$carpetaNueva[0]->id,  'tipoInvolucrado'=>1])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @else
                            <td align="center"><a href="{{ route('narracion.index', ['idDenunciante'=>$denunciante->id, 'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>1])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @endif
                       @if(isset($carpetaNueva))
                            <td ><a href="{{ route('edit.denunciante', ['idCarpeta'=>$carpetaNueva[0]->id,'idDenunciante'=>$denunciante->id])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                        @else
                            <td ><a href="{{ route('edit.denunciante', ['idDenunciante'=>$denunciante->id, 'idCarpeta'=>$idCarpeta])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                        @endif

                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>