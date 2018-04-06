<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Persona moral</th>
            <th>Constancia de hechos</th>
         

        </thead>
        <tbody>
            @if(count($denunciantes)==0)
                <tr><td colspan="7" class="text-center">Sin registros</td></tr>
            @else
                @foreach($denunciantes as $denunciante)
                    <tr>
                        <td>{{ $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp }}</td>
                        <td  align="center">{{ $denunciante->rfc }}</td>
                        <td  align="center">{{ $denunciante->edad }}</td>
                        <td  align="center">{{ $denunciante->sexo }}</td>
                        <td  align="center">{{ $denunciante->telefono }}</td>
                        @if($denunciante->esEmpresa==1)
                            <td  align="center">SI</td>
                        @else
                            <td  align="center">NO</td>
                        @endif


                        <td align="center"><a href="{{ route('constancia.hechos',$denunciante->id) }}"> <i class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></td> </a> 
                       
                         

                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>