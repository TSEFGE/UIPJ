<h6>Acusaciones</h6>
<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre denunciante</th>
            <th>Delito</th>
            <th>Nombre denunciado</th>
            <th>Opciones</th>
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
                        <td><a href="{{ route('formato.denuncia', $acusacion->id) }}" class="btn btn-secondary text-right">Descargar formato de Denuncia</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>