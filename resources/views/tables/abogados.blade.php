<div class="table">
    <table class="table table-striped">
        <thead >
            <th >Nombre</th>
            <th>Cédula</th>
            <th>Sector</th>
            <th>Tipo</th>
            <th>Editar registro</th>                                
        </thead>
        <tbody>
            @if(count($abogados)==0)
                <tr><td colspan="4" class="text-center">Sin registros</td></tr>
            @else
                @foreach($abogados as $abogado)
                    <tr >
                        <td>{{ $abogado->nombres." ".$abogado->primerAp." ".$abogado->segundoAp }}</td>
                        <td>{{ $abogado->cedulaProf }}</td>
                        <td>{{ $abogado->sector }}</td>
                        <td>{{ $abogado->tipo }}</td>
                        <td ><a href=""> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>                                   
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>