<div class="table">
    <table class="table table-striped">
        <thead >
            <th >Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>           
            <th>Acciones</th>
                                         
        </thead>
        <tbody>               
           @if(count($auxiliares)==0)
                <tr><td colspan="5" class="text-center">Sin registros</td></tr>
            @else
                @foreach($auxiliares as $auxiliar)
                    <tr >
                        <td>{{$auxiliar->nombre}}</td>
                        <td>{{$auxiliar->email}}</td>                        
                        <td>{{$auxiliar->telefono}}</td>                       
                        <td ><a href=""> <i class="fa fa-pencil-square-o" style="font-size:24px;color:grey"></i></a></td>
                       
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>