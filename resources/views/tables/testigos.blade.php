<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
            {{-- <th>Constancia de hechos</th> --}}
             <th>Narración</th>
             <th>Agregar citatorio</th>


        </thead>
        <tbody>
            @if(count($testigos)==0)
                <tr><td colspan="8" class="text-center">Sin registros</td></tr>
            @else
                @foreach($testigos as $testigo)
                    <tr>
                        <td>{{ $testigo->nombres." ".$testigo->primerAp." ".$testigo->segundoAp }}</td>
                        <td  align="center">{{ $testigo->rfc }}</td>
                        <td  align="center">{{ $testigo->edad }}</td>
                        <td  align="center">{{ $testigo->sexo }}</td>
                        <td  align="center">{{ $testigo->telefono }}</td>
                        <td  align="center">NO</td>
                        
                        {{-- <td align="center"><a href="{{ route('constancia.hechos',$testigo->id) }}"> <i class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></a></td> --}}

                      @if(isset($carpetaNueva))
                       <td align="center"><a href="{{ route('narracion.index', ['idTestigo'=>$testigo->id, 'idCarpeta'=>$carpetaNueva[0]->id,  'tipoInvolucrado'=>4])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @else
                       <td align="center"><a href="{{ route('narracion.index', ['idTestigo'=>$testigo->id, 'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>4])}}"> <i class="fa fa-plus-square" style="font-size:24px;color:grey"></i></a></td>
                       @endif

                        @if(isset($carpetaNueva))
                <td align="center"><a href="{{ route('citatorio',['idCitado'=>$testigo->id, 'idCarpeta'=>$carpetaNueva[0]->id, 'tipoInvolucrado'=>2])}}"> <i class="fa fa-calendar" style="font-size:24px;color:grey"></i></a></td>
                @else
                <td align="center"><a href="{{ route('citatorio',['idCitado'=>$testigo->id,'idCarpeta'=>$idCarpeta, 'tipoInvolucrado'=>2])}}"> <i class="fa fa-calendar" style="font-size:24px;color:grey"></i></a></td>
                @endif

                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
