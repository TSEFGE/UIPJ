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
            @if(count($diligencasSP)==0)
                <tr><td colspan="6" class="text-center">Sin registros</td></tr>
            @else
                @foreach($diligencasSP as $diligenciaSP)
                    <tr>
                        <td>{{ $diligenciaSP->nombresTE}}</td>
                        <td >{{ $diligenciaSP->delito }}</td>
                        <td >{{ $diligenciaSP->nombresADO}}</td>
                        <td >{{ $diligenciaSP->dictamen }}</td>
                        <td >{{Carbon\Carbon::parse($diligenciaSP->fecha)->format('d-m-Y')}}</td>
                        <td > @if ($diligenciaSP->status ==1)Pendiente @else Aplicada @endif</td>
                        <td align="center"><a href="{{ asset('storage/diligencias-sp/'.$diligenciaSP->oficio) }}" class="fa fa-cloud-download" style="font-size:24px;color:grey"></i></a></td>

                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
