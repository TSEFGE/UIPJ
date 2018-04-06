<div class="table">
    <table class="table table-striped">
        <thead align="center">
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
       
        </thead>
        <tbody>
            @if(count($denunciados)==0)
                <tr><td colspan="6" class="text-center">Sin registros</td></tr>
            @else
                @foreach($denunciados as $denunciado)
                    <tr>
                        <td>{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</td>
                        <td  align="center">{{ $denunciado->rfc }}</td>
                        <td  align="center">{{ $denunciado->edad }}</td>
                        <td  align="center">{{ $denunciado->sexo }}</td>
                        <td  align="center">{{ $denunciado->telefono }}</td>
                        @if($denunciado->esEmpresa==1)
                        <td  align="center">SI</td>
                        @else
                        <td  align="center">NO</td>
                       
                         @endif
                        @endforeach
                        @endif
                    </tbody>
    </table>
</div>