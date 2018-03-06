<h6>Familiares</h6>
<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Familiar de</th>
            <th>Parentesco</th>
            <th>Ocupación</th>
        </thead>
        <tbody>
            @if(count($familiares)==0)
                <tr><td colspan="4" class="text-center">Sin registros</td></tr>
            @else
                @foreach($familiares as $familiar)
                    <tr>
                        <td>{{ $familiar->familiarNombre." ".$familiar->familiarPrimerAp." ".$familiar->familiarSegundoAp }}</td>
                        <td>{{ $familiar->nombres." ".$familiar->primerAp." ".$familiar->segundoAp }}</td>
                        <td>{{ $familiar->parentesco }}</td>
                        <td>{{ $familiar->ocupacion }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>