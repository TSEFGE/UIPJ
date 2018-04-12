<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Número</th>
            <th>Generar Documento</th>  
        </thead>
        <tbody>
            @if(count($citatorios)==0)
                <tr><td colspan="4" class="text-center">SIN RESGISTROS</td></tr>
            @else
                @foreach($citatorios as $citatorio)
                    <tr>
                        @if($citatorio->tipo == 1)
                            <td>INVESTIGADO</td>
                        @else
                            <td>TESTIGO</td>
                        @endif
                        @if($citatorio->status == 1)
                            <td>PENDIENTE</td>
                        @else
                            @if($citatorio->status == 2)
                                <td>SE PRESENTÓ</td>
                            @else
                                <td>NO SE PRESENTÓ</td>
                            @endif
                        @endif
                        <td>PRIMERA</td>
                        <td align="center"><a href="{{ asset('../storage/expedientes/'.$citatorio->documento) }}" class="btn btn-info" target="_blank">Ver documento</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>