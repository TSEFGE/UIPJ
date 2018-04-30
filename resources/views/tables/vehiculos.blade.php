<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Delito asociado</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Placas</th>
            <th>Tipo vehículo</th>
            <th>Color</th>
            <th>Editar registro</th>
        </thead>
        <tbody>
            @if(count($vehiculos)==0)
                <tr><td colspan="6" class="text-center">Sin registros</td></tr>
            @else
                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->delito }}</td>
                        <td>{{ $vehiculo->marca }}</td>
                        <td>{{ $vehiculo->modelo }}</td>
                        <td>{{ $vehiculo->placas }}</td>
                        <td>{{ $vehiculo->tipovehiculo }}</td>
                        <td>{{ $vehiculo->color }}</td>
                        <td><a href=""> <i class="fa fa-pencil-square-o"  style="font-size:24px;color:grey"></i></a></td> 
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>