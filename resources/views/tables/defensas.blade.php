<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Abogado</th>
            <th>Defiende a</th>                                
        </thead>
        <tbody>
            @if(count($defensas)==0)
                <tr><td colspan="2" class="text-center">Sin registros</td></tr>
            @else
                @foreach($defensas as $defensa)
                    <tr>
                        <td>{{ $defensa->nombres." ".$defensa->primerAp." ".$defensa->segundoAp }}</td>
                        <td>{{ $defensa->nombres2." ".$defensa->primerAp2." ".$defensa->segundoAp2 }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>