<div class="table">
    <table class="table table-striped">
        <thead align="center">
            <th>Tipo</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Hora</th>            
            <th>Número</th>
            <th>Descargar documento</th>
            <th>Editar</th>  
        </thead>
        <tbody>
            @if(count($citatorios)==0)
                <tr><td colspan="7" class="text-center">SIN RESGISTROS</td></tr>
            @else
                @foreach($citatorios as $citatorio)
                    <tr align="center">
                        @if($citatorio->tipo == 1)
                            <td>INVESTIGADO</td>
                        @else
                            <td>TESTIGO</td>
                        @endif
                        @if($citatorio->status == 1)
                            <td>PENDIENTE</td>
                        @else
                            @if($citatorio->status == 2)
                                <td>SE PRESENTÓ</td>
                            @else
                                <td>NO SE PRESENTÓ</td>
                            @endif
                        @endif
                        <td>{{ $citatorio->fecha }}</td>
                        <td>{{ $citatorio->hora }}</td>
                        <td>PRIMERA</td>

                    
                     
                        <td align="center"><a href="{{ asset('storage/citatorios/'.$citatorio->documento) }}" class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></a></td> 

            <td align="center"><a href=""> <i class="fa fa-edit" style="font-size:24px;color:grey"></i></a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>