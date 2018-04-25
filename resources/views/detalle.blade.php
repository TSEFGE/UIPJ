@extends('template.form')

@section('title', 'Detalle de carpeta')

@section('contenido') 

<div id="detallehead" class="card-header ">
    <div id="tabscarpeta">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tdenunciante">Víctima u ofendido</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tdenunciado">Investigado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tautoridad">Autoridad</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#ttestigo">Testigo</a>
            </li>
            <li class="nav-item" id="tabfisica">
                <a class="nav-link" data-toggle="tab" href="#tabogado">Abogados</a>
            </li>
            @if((count($denunciantes)>0 || count($denunciados)>0) && count($abogados)>0)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tdefensa">Defensas</a>
            </li>
            @endif
            @if(count($denunciantes)>0 || count($denunciados)>0)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tfamiliar">Familiares</a>
            </li>
            @endif            
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tdelito">Delitos</a>
            </li>
            @if(count($delitos)>0 && count($denunciantes)>0 && count($denunciados)>0)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tacusacion">Denuncias registradas</a>
            </li>
                @endif
             <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tvehiculo">Vehículos</a>
            </li>
        </ul>
    </div>
</div>

<!-- Contenido en Pestañas -->
<div class="tab-content" id="contenidotabs">
    <div class="tab-pane active container" id="tdenunciante">
        <div class="boxtwo">
            @include('tables.denunciantes')
            <div class="text-right"> 
                <a href="{{ route('new.denunciante', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
            </div>
        </div>
    </div>

    <div class="tab-pane container" id="tdenunciado">
        <div class="boxtwo">
            @include('tables.denunciados')
            <div class="text-right"> 
                <a href="{{ route('new.denunciado', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
            </div>
        </div>
    </div> 

    <div class="tab-pane container" id="tautoridad">
        <div class="boxtwo">
            @include('tables.autoridades')
            <div class="text-right"> 
                <a href="{{ route('new.autoridad', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar autoridad</a><hr>
            </div>
        </div>
    </div>

     <div class="tab-pane container" id="ttestigo">
        <div class="boxtwo">
            @include('tables.testigos')
            <div class="text-right"> 
                <a href="{{ route('new.testigo', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar testigo</a><hr>
            </div>
        </div>
    </div>

    <div class="tab-pane container" id="tabogado">
        <div class="boxtwo">
            @include('tables.abogados')
            <div class="text-right"> 
                <a href="{{ route('new.abogado', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
            </div>
        </div>          
    </div>

    <div class="tab-pane container" id="tdefensa">
        <div class="boxtwo">
            @include('tables.defensas')
            <div class="text-right"> 
                <a href="{{ route('new.defensa', $carpetaNueva[0]->id) }}" class="btn btn-primary">Asignar defensa</a><hr>
            </div>
        </div>               
    </div>

    <div class="tab-pane container" id="tfamiliar">
        <div class="boxtwo">
            @include('tables.familiares')
            <div class="text-right"> 
                <a href="{{ route('new.familiar', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar persona</a><hr>
            </div>
        </div>                   
    </div>

    <div class="tab-pane container" id="tdelito">
        <div class="boxtwo">
            @include('tables.delitos')
            <div class="text-right"> 
                <a href="{{ route('new.delito', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar delito</a><hr>
            </div>
        </div>          
    </div>

    <div class="tab-pane container" id="tacusacion">
        <div class="boxtwo">
            @include('tables.acusaciones')
            <div class="text-right">
                @if(count($acusaciones)>0)
                    <a href="{{ route('new.colaboracionpm', $carpetaNueva[0]->id) }}" class="btn btn-primary">Diligencia a PM</a>
                    <a href="{{ route('new.colaboracionsp', $carpetaNueva[0]->id) }}" class="btn btn-primary">Diligencia a SP</a>
                @endif
                <a href="{{ route('new.acusacion', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar denuncia registrada</a><hr>
            </div>
        </div>
    </div>

    <div class="tab-pane container" id="tvehiculo">
        <div class="boxtwo">
            @include('tables.vehiculos')
            <div class="text-right"> 
                <a href="{{ route('new.vehiculo', $carpetaNueva[0]->id) }}" class="btn btn-primary">Agregar Vehículo</a><hr>
            </div>
        </div>           
    </div>
</div>
@endsection

