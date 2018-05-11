<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Abogado</th>
            <th>Defiende a</th>  
            <th>Editar registro</th>                               
        </thead>
        <tbody>
            @if(count($defensas)==0)
                <tr><td colspan="3" class="text-center">Sin registros</td></tr>
            @else
                @foreach($defensas as $defensa)
                    <tr>
                        <td>{{ $defensa->nombres." ".$defensa->primerAp." ".$defensa->segundoAp }}</td>
                        <td>{{ $defensa->nombres2." ".$defensa->primerAp2." ".$defensa->segundoAp2 }}</td>
                        @if(isset($carpetaNueva))
                            <td ><a href="{{ route('edit.defensa', ['idCarpeta'=>$carpetaNueva[0]->id,'idDefensa'=>$defensa->id])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                        @else
                            <td ><a href="{{ route('edit.defensa', ['idDefensa'=>$defensa->id, 'idCarpeta'=>$idCarpeta])}}"> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                        @endif
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>