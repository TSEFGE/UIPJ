<div class="table">
    <table class="table table-striped">
        <thead >
            <th >Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>           
            <th>Editar auxiliar</th>
            <th>Eliminar auxiliar</th>                              
        </thead>
        <tbody>
               <tr><td colspan="5" class="text-center">Sin registros</td></tr>
           {{-- @if(count($abogados)==0)
                <tr><td colspan="5" class="text-center">Sin registros</td></tr>
            @else
                @foreach($abogados as $abogado)
                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td ><a href=""> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                       
                    </tr>
                @endforeach
            @endif--}}
        </tbody>
    </table>
</div>