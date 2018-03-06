<h6>Denunciantes</h6>
<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @if(count($denunciantes)==0)
                <tr><td colspan="7" class="text-center">Sin registros</td></tr>
            @else
                @foreach($denunciantes as $denunciante)
                    <tr>
                        <td>{{ $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp }}</td>
                        <td>{{ $denunciante->rfc }}</td>
                        <td>{{ $denunciante->edad }}</td>
                        <td>{{ $denunciante->sexo }}</td>
                        <td>{{ $denunciante->telefono }}</td>
                        @if($denunciante->esEmpresa==1)
                            <td>SI</td>
                        @else
                            <td>NO</td>
                        @endif
                        <td><a href="{{ route('constancia.hechos', $denunciante->id) }}" class="btn btn-secondary text-right">Descargar constancia de hechos</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>