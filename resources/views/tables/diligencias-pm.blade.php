<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre denunciante</th>
            <th>Delito</th>
            <th>Nombre denunciado</th>
            <th>Dictamen</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Descargar documento</th>
        </thead>
        <tbody>
            @if(count($diligencasPM)==0)
                <tr><td colspan="7" class="text-center">Sin registros</td></tr>
            @else
                @foreach($diligencasPM as $diligenciaPM)
                    <tr>
                        <td>{{ $diligenciaPM->nombresTE}}</td>
                        <td >{{ $diligenciaPM->delito }}</td>
                        <td >{{ $diligenciaPM->nombresADO}}</td>
                        <td >{{ $diligenciaPM->dictamen }}</td>
                        <td >{{Carbon\Carbon::parse($diligenciaPM->fecha)->format('d-m-Y')}}</td>
                        <td > @if ($diligenciaPM->status ==1)PENDIENTE @else APLICADA @endif</td>
                        <td align="center"><a href="{{ asset('storage/diligencias-pm/'.$diligenciaPM->oficio) }}" class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></a></td>

                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
