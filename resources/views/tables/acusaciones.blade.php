<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre de víctima u ofendido</th>
            <th>Delito</th>
            <th>Nombre de investigado</th>
            <th>Formato de inicio</th>
        </thead>
        <tbody>
            @if(count($acusaciones)==0)
                <tr><td colspan="4" class="text-center">Sin registros</td></tr>
            @else
                @foreach($acusaciones as $acusacion)
                    <tr>
                        <td>{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
                        <td>{{ $acusacion->delito }}</td>
                        <td>{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
                        <td align="center"><a href="{{route('formato.denuncia', $acusacion->id)}}"> <i class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></a></td> 
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>