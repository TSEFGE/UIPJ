<h6>Denunciado o Imputado</h6>
<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
            <th>Agregar Complemento</th>
        </thead>
        <tbody>
            @if(count($denunciados)==0)
                <tr><td colspan="7" class="text-center">Sin registros</td></tr>
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
                        <td align="center"><a href="{{ route('complement.denunciado', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$carpetaNueva[0]->id])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                        @else
                        <td align="center"><a href="{{ route('complement.denunciado', ['idDenunciado'=>$denunciado->id, 'idCarpeta'=>$idCarpeta])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                        @endif
                        @endforeach
                        @endif
                    </tbody>
    </table>
</div>