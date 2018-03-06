<h6>Delitos</h6>
<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Delito</th>
            <th>Modalidad</th>
            <th>Fecha</th>
            <th>Hora</th>
        </thead>
        <tbody>
            @if(count($delitos)==0)
                <tr><td colspan="4" class="text-center">Sin registros</td></tr>
            @else
                @foreach($delitos as $delito)
                    <tr>
                        <td>{{ $delito->delito }}</td>
                        <td>{{ $delito->modalidad }}</td>
                        <td>{{ $delito->fecha }}</td>
                        <td>{{ $delito->hora }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>