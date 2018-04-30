<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Familiar de</th>
            <th>Parentesco</th>
            <th>Ocupación</th>
            <th>Editar registro</th>    
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
                        <td><a href=""> <i class="fa fa-pencil-square-o"  style="font-size:24px;color:grey"></i></a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>