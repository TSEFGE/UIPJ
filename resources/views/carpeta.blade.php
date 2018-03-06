@extends('template.main')

@section('css')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Carpeta de Investigación: {{ $carpetaNueva[0]->numCarpeta }}</div>
            <div class="card-body boxone">
                <div class="boxtwo">
                    @include('tables.denunciantes')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciante', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.denunciados')
                    <div class="text-right"> 
                        <a href="{{ route('new.denunciado', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>
                

                <div class="boxtwo">
                    @include('tables.autoridades')
                    <div class="text-right"> 
                        <a href="{{ route('new.autoridad', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar Autoridad</a><hr>
                    </div>
                </div>

                <div class="boxtwo">
                    @include('tables.abogados')
                    <div class="text-right"> 
                        <a href="{{ route('new.abogado', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>

               @if((count($denunciantes)>0 || count($denunciados)>0) && count($abogados)>0)
                <div class="boxtwo">
                    @include('tables.defensas')
                    <div class="text-right"> 
                        <a href="{{ route('new.defensa', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Asignar defensa</a><hr>
                    </div>
                </div>
                @endif

                @if(count($denunciantes)>0 || count($denunciados)>0)
                <div class="boxtwo">
                    @include('tables.familiares')
                    <div class="text-right"> 
                        <a href="{{ route('new.familiar', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar persona</a><hr>
                    </div>
                </div>
                @endif

                <div class="boxtwo">
                    @include('tables.delitos')
                    <div class="text-right"> 
                        <a href="{{ route('new.delito', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar delito</a><hr>
                    </div>
                </div>

                @if(count($delitos)>0 && count($denunciantes)>0 && count($denunciados)>0)
                <div class="boxtwo">
                    @include('tables.acusaciones')
                    <div class="text-right">
                        @if(count($acusaciones)>0)
                            <a href="{{ route('new.colaboracionpm', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Colaboración PM</a>
                            <a href="{{ route('new.colaboracionsp', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Colaboración SP</a>
                        @endif
                        <a href="{{ route('new.acusacion', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar Acusación</a><hr>
                    </div>
                </div>
                @endif

                @if($delits==true)
                <div class="boxtwo">
                    @include('tables.vehiculos')
                    <div class="text-right"> 
                        <a href="{{ route('new.vehiculo', $carpetaNueva[0]->id) }}" class="btn btn-secondary">Agregar Vehículo</a><hr>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection