 @extends('template.main')

 @section('title', 'Listado de Carpetas')

 @section('content')

 <div id="listacarpeta" class="card-header">
    <div id="tabslista" class="center" >
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#iniciadas">Carpetas iniciadas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#asignadas">Carpetas asignadas</a>
            </li>
        </ul>
    </div>
</div>

<!-- Contenido en Pestañas -->

<div class="boxtwo">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="tab-content" id="contenidotabs">
        <div class="tab-pane active" id="iniciadas">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <th>Núm. Carpeta</th>
                        <th>Unidad</th>
                        <th>Fiscal</th>
                        <th>Fecha inicio</th>
                        <th>Estado carpeta</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @if(count($carpetas)==0)
                        <tr><td colspan="6" class="text-center">Sin registros</td></tr>
                        @else
                        @foreach($carpetas as $carpeta)
                        <tr>
                            <td>{{ $carpeta->numCarpeta }}</td>
                            <td>{{ $carpeta->nombre }}</td>
                            <td>{{ $carpeta->nombres." ".$carpeta->apellidos }}</td>
                            <td>{{ $carpeta->fechaInicio }}</td>
                            <td>{{ $carpeta->estadoCarpeta }}</td>
                            <td><a href="{{ route('carpeta', $carpeta->id) }}" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ver</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $carpetas->links() }}
            </div>
        </div>

        <div class="tab-pane container" id="asignadas">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <th>Núm. Carpeta</th>
                        <th>Unidad</th>
                        <th>Fiscal</th>
                        <th>Fecha inicio</th>
                        <th>Estado carpeta</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @if(count($carpetasUat)==0)
                        <tr><td colspan="6" class="text-center">Sin registros</td></tr>
                        @else
                        @foreach($carpetasUat as $carpetaUat)
                        <tr>
                            <td>{{ $carpetaUat->numCarpeta }}</td>
                            <td>{{ $carpetaUat->nombre }}</td>
                            <td>{{ $carpetaUat->nombres." ".$carpeta->apellidos }}</td>
                            <td>{{ $carpetaUat->fechaInicio }}</td>
                            <td>{{ $carpetaUat->estadoCarpeta }}</td>
                            <td><a href="{{ route('carpeta', $carpetaUat->id) }}" class="btn btn-secondary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ver</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $carpetasUat->links() }}
            </div>
        </div>
     </div> 

</div>

</div>


@endsection
